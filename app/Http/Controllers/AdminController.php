<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Portofolio;
use App\Models\Certificate;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $skillCount = Skill::count();
        $educationCount = Education::count();
        $experienceCount = Experience::count();
        $portofolioCount = Portofolio::count();
        $certificateCount = Certificate::count();
        $contactCount = Contact::count();

        return view('admin.index', compact('skillCount', 'educationCount', 'experienceCount', 'portofolioCount', 'certificateCount', 'contactCount'));
    }

}
