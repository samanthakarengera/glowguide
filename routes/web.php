<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Userzone\ProfileController;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProviderController;
use App\Http\Controllers\FaqCategoryController;
use App\Http\Controllers\FaqItemController;


// PUBLIEKE PAGINA'S


// Homepage
Route::get('/', [WelcomeController::class, 'index'])
    ->name('welcome');

// Publieke FAQ
Route::get('/faq', [FaqController::class, 'index'])
    ->name('faq');

// Publieke categorie
Route::get('/categories/{category}', [WelcomeController::class, 'showCategory'])
    ->name('categories.show');

// Publieke provider detailpagina
Route::get('/providers/{provider}', [WelcomeController::class, 'showProvider'])
    ->name('providers.show');

// Contactpagina
Route::get('/contact', [ContactController::class, 'index'])
    ->name('contact');

// Contactformulier versturen
Route::post('/contact', [ContactController::class, 'send'])
    ->name('contact.send');


// USER ROUTES
// Alleen ingelogde gebruikers

Route::middleware(['auth'])->group(function () {

    // Profiel bekijken/bewerken
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    // Profiel opslaan
    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    // Account verwijderen
    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

});


// ADMIN ROUTES
// Alleen ingelogde admins

Route::middleware(['auth', 'admin'])->group(function () {

    // ADMIN DASHBOARD

    Route::get('/admin', function () {

        return view('admin.dashboard');

    })->name('admin.dashboard');

    // CATEGORIES

    // Lijst van categorieën
    Route::get('/admin/categories', [CategoryController::class, 'index'])
        ->name('categories.index');

    // Formulier voor nieuwe categorie
    Route::get('/admin/categories/create', [CategoryController::class, 'create'])
        ->name('categories.create');

    // Nieuwe categorie opslaan
    Route::post('/admin/categories', [CategoryController::class, 'store'])
        ->name('categories.store');

    // Formulier categorie aanpassen
    Route::get('/admin/categories/{category}/edit', [CategoryController::class, 'edit'])
        ->name('categories.edit');

    // Aangepaste categorie opslaan
    Route::put('/admin/categories/{category}', [CategoryController::class, 'update'])
        ->name('categories.update');

    // Categorie verwijderen
    Route::delete('/admin/categories/{category}', [CategoryController::class, 'destroy'])
        ->name('categories.destroy');

    // PROVIDERS

    // Lijst van providers
    Route::get('/admin/providers', [ProviderController::class, 'index'])
        ->name('providers.index');

    // Formulier nieuwe provider
    Route::get('/admin/providers/create', [ProviderController::class, 'create'])
        ->name('providers.create');

    // Nieuwe provider opslaan
    Route::post('/admin/providers', [ProviderController::class, 'store'])
        ->name('providers.store');

    // Formulier provider aanpassen
    Route::get('/admin/providers/{provider}/edit', [ProviderController::class, 'edit'])
        ->name('providers.edit');

    // Provider aanpassen
    Route::put('/admin/providers/{provider}', [ProviderController::class, 'update'])
        ->name('providers.update');

    // Provider verwijderen
    Route::delete('/admin/providers/{provider}', [ProviderController::class, 'destroy'])
        ->name('providers.destroy');


    // FAQ CATEGORIES
    Route::resource(
        '/admin/faq-categories',
        FaqCategoryController::class
    );

    // FAQ ITEMS
    Route::resource(
        '/admin/faq-items',
        FaqItemController::class
    );

});


// =====================================================
// AUTHENTICATION
// Login / Register / Logout / Password reset
// =====================================================

require __DIR__.'/auth.php';