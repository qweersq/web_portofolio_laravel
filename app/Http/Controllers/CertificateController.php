<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificate;
use Illuminate\Support\Facades\Storage;


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

        $uploadedPhoto = $request->file('photo')->store('public/certificates_photos');
        $photoUrl = Storage::url($uploadedPhoto);
        $fileName = basename($uploadedPhoto);

        $certificate = new Certificate();
        $certificate->certificate_name = $request->input('certificate_name');
        $certificate->description = $request->input('description');
        $certificate->year = $request->input('year');
        $certificate->photo_url = $photoUrl;
        $certificate->file_name = $fileName;
        $certificate->certificate_url = $request->input('certificate_url');
        $certificate->save();

        return redirect(route('certificates.index'));
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
        if ($request->hasFile('photo')) {
            $uploadedPhoto = $request->file('photo')->store('public/certificates_photos');
            $photoUrl = Storage::url($uploadedPhoto);
            $fileName = basename($uploadedPhoto);
        } else {
            $photoUrl = $certificate->photo_url;
            $fileName = $certificate->file_name;
        }
        $certificate->certificate_name = $request->input('certificate_name');
        $certificate->description = $request->input('description');
        $certificate->year = $request->input('year');
        $certificate->photo_url = $photoUrl;
        $certificate->file_name = $fileName;
        $certificate->certificate_url = $request->input('certificate_url');
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
