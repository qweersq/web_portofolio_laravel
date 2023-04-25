<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Portofolio;

class PortofolioController extends Controller
{
    public function index()
    {
        $portofolios = Portofolio::all();

        return view('admin.portofolios.index', compact('portofolios'));
    }

    public function create()
    {
        return view('admin.portofolios.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        // $validatedData = $request->validate([
        //     'portofolio_name' => 'required',
        //     'description' => 'required',
        //     'photo' => 'required|image|max:2048',
        //     'url_apps' => 'required',
        // ]);

        // Simpan foto ke direktori public
        
        $uploadedPhoto = $request->file('photo')->store('public/portofolios_photos');
        $photoUrl = Storage::url($uploadedPhoto);
        $fileName = basename($uploadedPhoto);


        // Buat entri portofolio baru
        $portofolio = new Portofolio;
        $portofolio->portofolio_name = $request->input('portofolio_name');
        $portofolio->description = $request->input('description');
        $portofolio->photo_url = $photoUrl;
        $portofolio->file_name = $fileName;
        $portofolio->url_apps = $request->input('url_apps');
        $portofolio->save();

        return redirect(route('portofolios.index'));
    }

    public function edit($id)
    {
        $portofolio = Portofolio::find($id);

        return view('admin.portofolios.edit', compact('portofolio'));
    }

    public function update(Request $request, $id)
    {
        // $validatedData = $request->validate([
        //     'portofolio_name' => 'required|max:255',
        //     'range_year' => 'required|max:255',
        //     'description' => 'required'
        // ]);

        $portofolio = Portofolio::find($id);
        if ($request->hasFile('photo')) {
            $uploadedPhoto = $request->file('photo')->store('public/portofolios_photos');
            $photoUrl = Storage::url($uploadedPhoto);
            $fileName = basename($uploadedPhoto);
        } else {
            $photoUrl = $portofolio->photo_url;
            $fileName = $portofolio->file_name;
        }
        $portofolio->portofolio_name = $request->input('portofolio_name');
        $portofolio->description = $request->input('description');
        $portofolio->photo_url = $photoUrl;
        $portofolio->file_name = $fileName;
        $portofolio->url_apps = $request->input('url_apps');
        $portofolio->save();

        return redirect()->route('portofolios.index')->with('success', 'Portofolio has been updated.');
    }

    public function destroy($id)
    {
        $portofolio = Portofolio::find($id);
        $portofolio->delete();

        return redirect()->route('portofolios.index')->with('success', 'Portofolio has been deleted.');
    }
}
