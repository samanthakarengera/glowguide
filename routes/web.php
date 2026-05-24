<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\FaqCategoryController;
use App\Http\Controllers\FaqItemController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\Admin\ProviderController;
use App\Http\Controllers\Userzone\ProfileController;

//publieke sites
Route::get('/', [WelcomeController::class,'index'])->name('welcome');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');

//user

Route::middleware('auth')->group(function () {

    // profiel bewerken
    Route::get('/profile', [App\Http\Controllers\Userzone\ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile', [App\Http\Controllers\Userzone\ProfileController::class, 'update'])->name('profile.update');
});

//admin

Route::middleware(['auth', 'admin'])->group(function () {

    // CATEGORY ROUTES

    // lijst van categorieën
    Route::get('/admin/categories', [CategoryController::class, 'index'])->name('categories.index');
    //formulier tonen
    Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    //categorie opslaan
    Route::post('/admin/categories', [CategoryController::class, 'store'])->name('categories.store');
    //categorie wijzigen
    Route::get('/admin/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    //categorie gewijzigd
    Route::put('/admin/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
    //categorie verwijderen
    Route::delete('/admin/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    Route::resource('admin/faq-categories', [App\Http\Controllers\Admin\FaqCategoryController::class]);

    Route::resource('admin/faq-items', [App\Http\Controllers\Admin\FaqItemController::class]);

    // PROVIDER ROUTES

    //tonen
    Route::get('/admin/providers', [ProviderController::class, 'index'])->name('providers.index');
    //aanmaken
    Route::get('/admin/providers/create', [ProviderController::class, 'create'])->name('providers.create');
    //opslaan
    Route::post('/admin/providers', [ProviderController::class, 'store'])->name('providers.store');
    //wijzigen
    Route::get('/admin/providers/{provider}/edit', [ProviderController::class, 'edit'])->name('providers.edit');
    //gewijzigd
    Route::put('/admin/providers/{provider}', [ProviderController::class, 'update'])->name('providers.update');
    //verwijderen
    Route::delete('/admin/providers/{provider}', [ProviderController::class, 'destroy'])->name('providers.destroy');

    //DASHBOARD
    Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');})->middleware(['auth', 'admin'])->name('admin.dashboard');
});




Route::get('/dashboard', function () {
    return view('userzone.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
