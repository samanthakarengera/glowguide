<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;

use App\Http\Controllers\Userzone\ProfileController;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProviderController;
use App\Http\Controllers\Admin\FaqCategoryController;
use App\Http\Controllers\Admin\FaqItemController;

use App\Http\Controllers\FaqController;


// PUBLIEKE PAGINA'S

// homepage
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

// publieke FAQ pagina
Route::get('/faq', [FaqController::class, 'index'])->name('faq');


// category detail page
Route::get('/categories/{category}', [WelcomeController::class, 'showCategory'])->name('categories.show');

// provider detail page
Route::get('/providers/{provider}', [WelcomeController::class, 'showProvider'])->name('providers.show');

// contact pagina
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');

// form versturen
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'send']);

// USER ROUTES
// enkel ingelogde users


Route::middleware(['auth'])->group(function () {

    // profiel pagina
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // profiel updaten
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // profiel verwijderen
    Route::delete('/profile', [ProfileController::class, 'destroy']) ->name('profile.destroy');

});



// ADMIN ROUTES
// enkel admins

Route::middleware(['auth', 'admin'])->group(function () {

   
    // ADMIN DASHBOARD

    Route::get('/admin/dashboard', function () {

        return view('admin.dashboard');

    })->name('admin.dashboard');


    
    // CATEGORIES
  
    Route::get('/admin/categories', [CategoryController::class, 'index'])->name('categories.index');

    Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('categories.create');

    Route::post('/admin/categories', [CategoryController::class, 'store'])->name('categories.store');

    Route::get('/categories/{category}', [WelcomeController::class, 'showCategory'])->name('categories.show');

    Route::get('/admin/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');

    Route::put('/admin/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');

    Route::delete('/admin/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');


    // PROVIDERS
    
    Route::get('/admin/providers', [ProviderController::class, 'index'])->name('providers.index');

    Route::get('/admin/providers/create', [ProviderController::class, 'create'])->name('providers.create');

    Route::post('/admin/providers', [ProviderController::class, 'store'])->name('providers.store');

    Route::get('/admin/providers/{provider}/edit', [ProviderController::class, 'edit'])->name('providers.edit');

    Route::get('/providers/{provider}', [ProviderController::class, 'show'])->name('providers.show');

    Route::put('/admin/providers/{provider}', [ProviderController::class, 'update'])->name('providers.update');

    Route::delete('/admin/providers/{provider}', [ProviderController::class, 'destroy'])->name('providers.destroy');


    
    // FAQ CATEGORIES
   
    Route::resource(  'admin/faq-categories',FaqCategoryController::class);


    
    // FAQ ITEMS
   

    Route::resource('admin/faq-items',FaqItemController::class );

});



// DASHBOARD

Route::get('/dashboard', function () {

    return view('admin.dashboard');

})->middleware(['auth'])->name('dashboard');



// AUTH ROUTES
// login/register/logout


require __DIR__.'/auth.php';