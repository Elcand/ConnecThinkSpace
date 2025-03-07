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

    public function index(Request $request)
    {
        $search = $request->input('search');
        $perPage = 10;

        $studios = Studio::whereNull('deleted_at');

        if ($search) {
            $studios->where(function ($q) use ($search) {
                $q->where('name_labs', 'like', '%' . $search . '%')
                    ->orWhere('description', 'like', '%' . $search . '%');
            });
        }

        $studios = $studios->orderBy('id', 'asc')->paginate($perPage);

        return view('admin.studio.index', compact('studios'));
    }


    public function create()
    {
        return view('admin.studio.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image'        => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'name_labs'    => 'required|string',
            'description'  => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('studio', $filename);
            $imagePath = 'studio/' . $filename;
        } else {
            $imagePath = null;
        }

        Studio::create([
            'image'        => $imagePath,
            // dd($imagePath),
            'name_labs'    => $request->name_labs,
            'description'  => $request->description,
        ]);

        return redirect()->route('admin.studio.index')->with('success', 'Studio berhasil ditambahkan');
    }

    public function show($slug)
    {
        $studio = Studio::where('slug', $slug)->first();
        return view('admin.studio.show', compact('studio'));
    }

    public function edit($slug)
    {
        $studio = Studio::where('slug', $slug)->first();
        return view('admin.studio.edit', compact('studio'));
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'image'        => 'image|mimes:jpeg,png,jpg|max:2048',
            'name_labs'    => 'required|string',
            'description'  => 'required|string',
        ]);

        $studio = Studio::where('slug', $slug)->first();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('studio', $filename);
            $imagePath = 'studio/' . $filename;
        } else {
            $imagePath = $studio->image;
        }

        $studio->update([
            'image'        => $imagePath,
            'name_labs'    => $request->name_labs,
            'description'  => $request->description,
        ]);
        return redirect()->route('admin.studio.index')->with('success', 'Studio was successfully converted');
    }

    public function destroy($slug)
    {
        $studio = Studio::where('slug', $slug)->first();

        if (!$studio) {
            return response()->json(['success' => false, 'message' => 'Studio not found'], 404);
        }

        $studio->delete();

        return response()->json(['success' => true, 'message' => 'Studio successfully deleted']);
    }


    public function restore($slug)
    {
        $studio = Studio::withTrashed()->where('slug', $slug)->firstOrFail();
        $studio->restore();

        return response()->json(['message' => 'The studio was successfully restored']);
    }
}
