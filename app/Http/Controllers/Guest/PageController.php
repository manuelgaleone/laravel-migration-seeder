<?php

namespace App\Http\Controllers\Guest;

use App\Models\train;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function trains()
    {
        $trains = train::all();
        return view('trains', compact('trains'));
    }

    public function contacts()
    {
        return view('contacts');
    }
}
