<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route untuk domain utama
Route::domain('localhost')->group(function () {
    Route::get('/', [ClientController::class, 'index'])->name('index');
    Route::post('/contact/store', [ClientController::class, 'store'])->name('contacts.store');

});

// Route untuk subdomain
Route::domain('admin.localhost')->group(function () {

    Route::get('/', [AdminController::class, 'index'])->name('admin.index');

    Route::get('/skill', [SkillController::class, 'index'])->name('skills.index');
    Route::get('/skill/create', [SkillController::class, 'create'])->name('skills.create');
    Route::post('/skill/store', [SkillController::class, 'store'])->name('skills.store');
    Route::get('/skill/edit/{id}', [SkillController::class, 'edit'])->name('skills.edit');
    Route::post('/skill/update/{id}', [SkillController::class, 'update'])->name('skills.update');
    Route::post('/skill/destroy/{id}', [SkillController::class, 'destroy'])->name('skills.destroy');

    Route::get('/certificate', [CertificateController::class, 'index'])->name('certificates.index');
    Route::get('/certificate/create', [CertificateController::class, 'create'])->name('certificates.create');
    Route::post('/certificate/store', [CertificateController::class, 'store'])->name('certificates.store');
    Route::get('/certificate/edit/{id}', [CertificateController::class, 'edit'])->name('certificates.edit');
    Route::post('/certificate/update/{id}', [CertificateController::class, 'update'])->name('certificates.update');
    Route::post('/certificate/destroy/{id}', [CertificateController::class, 'destroy'])->name('certificates.destroy');
    
    Route::get('/education', [EducationController::class, 'index'])->name('educations.index');
    Route::get('/education/create', [EducationController::class, 'create'])->name('educations.create');
    Route::post('/education/store', [EducationController::class, 'store'])->name('educations.store');
    Route::get('/education/edit/{id}', [EducationController::class, 'edit'])->name('educations.edit');
    Route::post('/education/update/{id}', [EducationController::class, 'update'])->name('educations.update');
    Route::post('/education/destroy/{id}', [EducationController::class, 'destroy'])->name('educations.destroy');

    Route::get('/experience', [ExperienceController::class, 'index'])->name('experiences.index');
    Route::get('/experience/create', [ExperienceController::class, 'create'])->name('experiences.create');
    Route::post('/experience/store', [ExperienceController::class, 'store'])->name('experiences.store');
    Route::get('/experience/edit/{id}', [ExperienceController::class, 'edit'])->name('experiences.edit');
    Route::post('/experience/update/{id}', [ExperienceController::class, 'update'])->name('experiences.update');
    Route::post('/experience/destroy/{id}', [ExperienceController::class, 'destroy'])->name('experiences.destroy');
    
    Route::get('/portofolio', [PortofolioController::class, 'index'])->name('portofolios.index');
    Route::get('/portofolio/create', [PortofolioController::class, 'create'])->name('portofolios.create');
    Route::post('/portofolio/store', [PortofolioController::class, 'store'])->name('portofolios.store');
    Route::get('/portofolio/edit/{id}', [PortofolioController::class, 'edit'])->name('portofolios.edit');
    Route::post('/portofolio/update/{id}', [PortofolioController::class, 'update'])->name('portofolios.update');
    Route::post('/portofolio/destroy/{id}', [PortofolioController::class, 'destroy'])->name('portofolios.destroy');
    
    Route::get('/contact', [ContactController::class, 'index'])->name('contacts.index');


    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/edit', function () {
        return view('admin.editpage');
    })->name('admin.edit');
   
});
