<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Support\Facades\Redirect;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Contact;
use App\Models\Portofolio;

class ClientController extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        $chunkedSkills = $skills->chunk(ceil($skills->count() / 2));

        $education = Education::all();
        $experience = Experience::all();

        $portofolios = Portofolio::all();
        $certificates = Certificate::all();
        
        return view('index', compact('chunkedSkills', 'education', 'experience', 'portofolios', 'certificates'));
    }

    public function store(Request $request)
    {
        $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->save();

        return Redirect::route('index');

    }
}
