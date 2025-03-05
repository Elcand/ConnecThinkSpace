<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function index()
    {
        $hero = Hero::first();
        return view('admin.hero.index', compact('hero'));
    }

    public function storeOrUpdate(Request $request, Hero $hero)
    {
        $request->validate([
            'image'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name'      => 'required|string',
            'slogan'    => 'required|string',
        ]);

        $hero = Hero::first();

        $imagePath = $hero ? $hero->image : null;
        if ($request->hasFile('image')) {
            if ($imagePath && Storage::disk('public')->exists($imagePath)) {
                Storage::disk('public')->delete($imagePath);
            }
            $imagePath = $request->file('image')->store('hero', 'public');
        }

        Hero::updateOrCreate(
            ['id' => $hero->id ?? null],
            [
                'image' => $imagePath,
                'name' => $request->input('name'),
                'slogan' => $request->input('slogan')
            ]
        );
        return redirect()->route('admin.hero.index')->with('success', 'Hero data has been successfully saved');
    }
}
