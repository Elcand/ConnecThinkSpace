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
}
