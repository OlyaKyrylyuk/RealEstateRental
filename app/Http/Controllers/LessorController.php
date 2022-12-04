<?php
namespace App\Http\Controllers;


use App\Models\Address;
use App\Models\Estate;
use Illuminate\Support\Facades\Auth;

class LessorController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;

        $lessorFlats = Estate::query()
            ->where('user_id', $user_id)
            ->get();

        return view('lessor.home', [
            'lessorFlats' => $lessorFlats
        ]);
    }

    public function create()
    {
        $addresses = Address::query()->get();
        return view('lessor.create', ['addresses' => $addresses]);
    }

}
