<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();

        return view('admin.contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view('admin.contacts.create');
    }

    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'contact_name' => 'required|max:255',
        //     'range_year' => 'required|max:255',
        //     'description' => 'required'
        // ]);

        $contact = new Contact;
        $contact->contact_name = $request->input('contact_name');
        $contact->range_year = $request->input('range_year');
        $contact->description = $request->input('description');
        $contact->save();

        return redirect()->route('contacts.index')->with('success', 'Contact has been added.');
    }

    public function edit($id)
    {
        $contact = Contact::find($id);

        return view('admin.contacts.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        // $validatedData = $request->validate([
        //     'contact_name' => 'required|max:255',
        //     'range_year' => 'required|max:255',
        //     'description' => 'required'
        // ]);

        $contact = Contact::find($id);
        $contact->contact_name = $request->input('contact_name');
        $contact->range_year = $request->input('range_year');
        $contact->description = $request->input('description');
        $contact->save();

        return redirect()->route('contacts.index')->with('success', 'Contact has been updated.');
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect()->route('contacts.index')->with('success', 'Contact has been deleted.');
    }
}
