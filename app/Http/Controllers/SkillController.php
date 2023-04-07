<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::all();

        return view('admin.skills.index', compact('skills'));
    }

    public function create()
    {
        return view('admin.skills.create');
    }

    public function store(Request $request)
    {
        $skill = new Skill;
        $skill->skill_name = $request->input('skill_name');
        $skill->rate_skill = $request->input('rate_skill');
        $skill->save();

        return redirect()->route('skills.index');
    }

    public function edit($id)
    {
        $skill = Skill::find($id);

        return view('admin.skills.edit', compact('skill'));
    }

    public function update(Request $request, $id)
    {
        $skill = Skill::find($id);
        $skill->skill_name = $request->input('skill_name');
        $skill->rate_skill = $request->input('rate_skill');
        $skill->save();

        return redirect()->route('skills.index');
    }

    public function destroy($id)
    {
        $skill = Skill::find($id);
        $skill->delete();

        return redirect()->route('skills.index');
    }
}
