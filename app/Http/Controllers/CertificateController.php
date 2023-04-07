<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificate;

class CertificateController extends Controller
{
    public function index()
    {
        $certificates = Certificate::all();

        return view('admin.certificates.index', compact('certificates'));
    }

    public function create()
    {
        return view('admin.certificates.create');
    }

    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'school_name' => 'required|max:255',
        //     'range_year' => 'required|max:255',
        //     'description' => 'required'
        // ]);

        $certificate = new Certificate;
        $certificate->school_name = $request->input('school_name');
        $certificate->range_year = $request->input('range_year');
        $certificate->description = $request->input('description');
        $certificate->save();

        return redirect()->route('certificates.index')->with('success', 'Certificate has been added.');
    }

    public function edit($id)
    {
        $certificate = Certificate::find($id);

        return view('admin.certificates.edit', compact('certificate'));
    }

    public function update(Request $request, $id)
    {
        // $validatedData = $request->validate([
        //     'school_name' => 'required|max:255',
        //     'range_year' => 'required|max:255',
        //     'description' => 'required'
        // ]);

        $certificate = Certificate::find($id);
        $certificate->school_name = $request->input('school_name');
        $certificate->range_year = $request->input('range_year');
        $certificate->description = $request->input('description');
        $certificate->save();

        return redirect()->route('certificates.index')->with('success', 'Certificate has been updated.');
    }

    public function destroy($id)
    {
        $certificate = Certificate::find($id);
        $certificate->delete();

        return redirect()->route('certificates.index')->with('success', 'Certificate has been deleted.');
    }
}
