<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;
use App\Models\Skill;

class PortofolioController extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        $chunkedSkills = $skills->chunk(ceil($skills->count() / 2));

        $education = Education::all();
        $experience = Experience::all();
        
        return view('index', compact('chunkedSkills', 'education', 'experience'));
    }
}
