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

    public function index()
    {
        $studios = Studio::all();
        return view('admin.studio.index', compact('studios'));
    }


    public function create()
    {
        return view('admin.studio.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image'        => 'required|image|mimes:jpeg,png,jpg,|max:2048',
            'name_labs'    => 'required|string',
            'description'  => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->storeAs('studio', $image->hashName());
        } else {
            $imagePath = null;
        }

        Studio::create([
            'image'        => $imagePath,
            'name_labs'    => $request->name_labs,
            'description'  => $request->description,
        ]);
        return redirect()->route('admin.studio.index')->with('success', 'Studio berhasil ditambahkan');
    }
}
