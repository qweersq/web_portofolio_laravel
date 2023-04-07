<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
{
    public function index()
    {
        $educations = Education::all();

        return view('admin.educations.index', compact('educations'));
    }

    public function create()
    {
        return view('admin.educations.create');
    }

    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'school_name' => 'required|max:255',
        //     'range_year' => 'required|max:255',
        //     'description' => 'required'
        // ]);

        $education = new Education;
        $education->school_name = $request->input('school_name');
        $education->range_year = $request->input('range_year');
        $education->description = $request->input('description');
        $education->save();

        return redirect()->route('educations.index')->with('success', 'Education has been added.');
    }

    public function edit($id)
    {
        $education = Education::find($id);

        return view('admin.educations.edit', compact('education'));
    }

    public function update(Request $request, $id)
    {
        // $validatedData = $request->validate([
        //     'school_name' => 'required|max:255',
        //     'range_year' => 'required|max:255',
        //     'description' => 'required'
        // ]);

        $education = Education::find($id);
        $education->school_name = $request->input('school_name');
        $education->range_year = $request->input('range_year');
        $education->description = $request->input('description');
        $education->save();

        return redirect()->route('educations.index')->with('success', 'Education has been updated.');
    }

    public function destroy($id)
    {
        $education = Education::find($id);
        $education->delete();

        return redirect()->route('educations.index')->with('success', 'Education has been deleted.');
    }
}
