<?php

namespace App\Http\Controllers;

use App\Models\Estate;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $accessibleFlats = Estate::query()
            ->where('is_busy', true)
            ->get();
        return view('home.index', [
            'accessibleFlats' => $accessibleFlats
        ]);
    }
}
