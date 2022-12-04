<?php


namespace App\Http\Controllers;


use App\Models\Address;
use App\Models\Estate;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EstateController extends Controller
{
    public function store(Request $request)
    {
        $user_id = Auth::user()->id;

        $data = $request->all();
        $estate = new Estate($data);
        $estate->fill([
            'user_id' => $user_id,
            'pay_for_communals' => $data['communals_price'] != null || $data['communals_price'] != 0,
            'is_busy' => false,
        ]);

        $estate->save();

        if($request->hasFile('photo')) {
            $photo = $request->photo;
            $newPhotoName = time();
            $photo->move(public_path('images'), $newPhotoName);
            $media = new Media([
                   'type' => 'image',
                   'value' => $newPhotoName
            ]);
        }

        $media->estate()->associate($estate);
        $media->save();

        $lessorFlats = Estate::query()
            ->with(['address'])
            ->where('user_id', $user_id)
            ->get();

        return view('lessor.home', [
            'lessorFlats' => $lessorFlats,
        ]);
    }

    public function edit($id)
    {
        $estate = Estate::where('id', $id)
            ->with(['address', 'media'])
            ->first();
        $addresses = Address::query()->get();

        return view('lessor.edit', [
            'estate' => $estate,
            'addresses' => $addresses,
        ]);
    }
}
