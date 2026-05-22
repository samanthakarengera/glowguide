<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;

//publieke sites
Route::get('/', [\App\Http\Controllers\WelcomeController::class,'index'])->name('welcome');
//user sites

// admin sites
//naar hier krijg je lijst met alle categorieen
//Route::get('/admin/categories',[\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('categories');
//naar hier geef me formulier om de categorie te creeeren
//Route::get('/admin/categories/create',[\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('categories.create'); //waar je naartoe gaat voor het aanmaken van categorieen
//naar hier om de formulier te ontvangen
//Route::post('/admin/categories',[\App\Http\Controllers\Admin\CategoryController::class,'store'])->name('categories.create'); //waar je naartoe gaat als je de categorie hebt aangemaakt als je op de knop hebt gedrukt
//naar hier om categorie te bewerken
//Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class,'show');

//admin

//CATEGORIE

// lijst van categorieën
Route::get('/admin/categories', [CategoryController::class, 'index'])->name('categories.index');

// formulier tonen
Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('categories.create');

// categorie opslaan
Route::post('/admin/categories', [CategoryController::class, 'store'])->name('categories.store');

// edit formulier tonen
Route::get('/admin/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');

// update opslaan
Route::put('/admin/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');

// verwijderen
Route::delete('/admin/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

//PROVIDER

//tonen
Route::get('/admin/providers', [\App\Http\Controllers\Admin\ProviderController::class, 'index'])->name('providers.index');


//aanmaken
Route::get('/admin/providers/create', [\App\Http\Controllers\Admin\ProviderController::class, 'create'])->name('providers.create');


//opgeslagen
Route::post('/admin/providers', [\App\Http\Controllers\Admin\ProviderController::class, 'store'])->name('providers.store');

//wijzigen
Route::get('/admin/providers/{provider}/edit', [\App\Http\Controllers\Admin\ProviderController::class, 'edit'])->name('providers.edit');


//gewijzigd
Route::put('/admin/providers/{provider}', [\App\Http\Controllers\Admin\ProviderController::class, 'update'])->name('providers.update');


//verwijderen
Route::delete('/admin/providers/{provider}', [\App\Http\Controllers\Admin\ProviderController::class, 'destroy'])->name('providers.destroy');


Route::get('/dashboard', function () {
    return view('userzone.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [App\Http\Controllers\Userzone\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [App\Http\Controllers\Userzone\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [App\Http\Controllers\Userzone\ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
