<?php

namespace App\Http\Controllers;

use App\Models\Estate;

class HomeController extends Controller
{
    public function index()
    {
        $accessibleFlats = Estate::query()
            ->with(['media', 'address'])
            ->where('is_busy', false)
            ->get();

        return view('home.index', [
            'accessibleFlats' => $accessibleFlats
        ]);
    }
}
