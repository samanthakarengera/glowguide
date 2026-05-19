<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\WelcomeController::class,'index'])->name('welcome');

Route::get('/categories/create',[\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('categories.create'); //waar je naartoe gaat voor het aanmaken van categorieen
Route::post('/categories',[\App\Http\Controllers\Admin\CategoryController::class,'store'])->name('categories.create'); //waar je naartoe gaat als je de categorie hebt aangemaakt als je op de knop hebt gedrukt


Route::get('/dashboard', function () {
    return view('userzone.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [App\Http\Controllers\Userzone\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [App\Http\Controllers\Userzone\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [App\Http\Controllers\Userzone\ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
