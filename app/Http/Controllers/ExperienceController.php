<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::all();

        return view('admin.experiences.index', compact('experiences'));
    }

    public function create()
    {
        return view('admin.experiences.create');
    }

    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'experience_name' => 'required|max:255',
        //     'range_year' => 'required|max:255',
        //     'description' => 'required'
        // ]);

        $experience = new Experience;
        $experience->experience_name = $request->input('experience_name');
        $experience->range_year = $request->input('range_year');
        $experience->description = $request->input('description');
        $experience->save();

        return redirect()->route('experiences.index')->with('success', 'Experience has been added.');
    }

    public function edit($id)
    {
        $experience = Experience::find($id);

        return view('admin.experiences.edit', compact('experience'));
    }

    public function update(Request $request, $id)
    {
        // $validatedData = $request->validate([
        //     'experience_name' => 'required|max:255',
        //     'range_year' => 'required|max:255',
        //     'description' => 'required'
        // ]);

        $experience = Experience::find($id);
        $experience->experience_name = $request->input('experience_name');
        $experience->range_year = $request->input('range_year');
        $experience->description = $request->input('description');
        $experience->save();

        return redirect()->route('experiences.index')->with('success', 'Experience has been updated.');
    }

    public function destroy($id)
    {
        $experience = Experience::find($id);
        $experience->delete();

        return redirect()->route('experiences.index')->with('success', 'Experience has been deleted.');
    }
}
