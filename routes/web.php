<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;

//publieke sites
Route::get('/', [\App\Http\Controllers\WelcomeController::class,'index'])->name('welcome');

//user

Route::get('/users/{user}', [App\Http\Controllers\Userzone\ProfileController::class, 'show'])->name('users.show');

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


    // PROVIDER ROUTES

    //tonen
    Route::get('/admin/providers', [\App\Http\Controllers\Admin\ProviderController::class, 'index'])->name('providers.index');
    //aanmaken
    Route::get('/admin/providers/create', [\App\Http\Controllers\Admin\ProviderController::class, 'create'])->name('providers.create');
    //opslaan
    Route::post('/admin/providers', [\App\Http\Controllers\Admin\ProviderController::class, 'store'])->name('providers.store');
    //wijzigen
    Route::get('/admin/providers/{provider}/edit', [\App\Http\Controllers\Admin\ProviderController::class, 'edit'])->name('providers.edit');
    //gewijzigd
    Route::put('/admin/providers/{provider}', [\App\Http\Controllers\Admin\ProviderController::class, 'update'])->name('providers.update');
    //verwijderen
    Route::delete('/admin/providers/{provider}', [\App\Http\Controllers\Admin\ProviderController::class, 'destroy'])->name('providers.destroy');

});




Route::get('/dashboard', function () {
    return view('userzone.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [App\Http\Controllers\Userzone\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [App\Http\Controllers\Userzone\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [App\Http\Controllers\Userzone\ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
