<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\FormContact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        $contacts = FormContact::first();
        return view('contact', compact('contacts'));
    }

    public function index(Request $request)
    {
        $search = $request->input('search');
        $perPage = 10;

        $contacts = FormContact::whereNull('deleted_at');

        if ($search) {
            $contacts->where(function ($q) use ($search) {
                $q->where('first_name', 'like', '%' . $search . '%')
                    ->orWhere('last_name', 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%')
                    ->orWhere('message', 'like', '%' . $search . '%');
            });
        }

        $contacts = $contacts->orderBy('id', 'asc')->paginate($perPage);

        return view('admin.contact.index', compact('contacts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name'    => 'required',
            'last_name'     => 'required',
            'email'         => 'required',
            'message'       => 'required',
        ]);

        FormContact::create($request->all());

        return redirect()->back()->with('success', 'Contact created successfully.');
    }

    public function show($slug)
    {
        $contact = FormContact::where('slug', $slug)->first();
        return view('admin.contact.show', compact('contact'));
    }
}
