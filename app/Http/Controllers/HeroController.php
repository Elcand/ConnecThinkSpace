<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Container\Attributes\Storage;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function index()
    {
        $hero = Hero::first();
        return view('admin.hero.index', compact('hero'));
    }

    public function storeOrUpdate(Request $request, $hero)
    {
        $request->validate([
            'image'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name'      => 'required|string',
            'slogan'   => 'required|string',
        ]);

        $hero::first();

        $imagePath = $hero ? $hero->image : null;
        if ($request->hasFile('image')) {
            if ($imagePath && Storage::exists($imagePath)); {
                Storage::delete($imagePath);
            }
            $imagePath = $request->file('image')->store('storage/hero', 'public');
        }

        Hero::updateOrCreate([
            ['id' => $hero->id ?? null],
            [
                'image' => $imagePath,
                'name' => $request->input('name'),
                'slogan' => $request->input('slogan')
            ]
        ]);
        return redirect()->route('hero.index')->with('success', 'Data hero berhasil disimpan');
    }
}
