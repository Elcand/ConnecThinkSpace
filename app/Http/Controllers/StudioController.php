<?php

namespace App\Http\Controllers;

use App\Models\Studio;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class StudioController extends Controller
{
    public function studio()
    {
        $studios = Studio::all();
        // dd($studios);
        return view('studio', compact('studios'));
    }
}
