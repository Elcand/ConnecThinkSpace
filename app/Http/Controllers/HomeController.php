<?php

namespace App\Http\Controllers;

use App\Models\FormContact;
use App\Models\Hero;
use App\Models\Studio;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $hero = Hero::first();
        $studios = Studio::all();
        $contacts = FormContact::first();
        return view('home', compact('hero', 'studios', 'contacts'));
    }
}
