<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;

Route::get('/', [WebsiteController::class, 'index'])->name('website.index');
Route::get('/servicios', [WebsiteController::class, 'services'])->name('website.services');
Route::get('/programas', [WebsiteController::class, 'programs'])->name('website.programs');
Route::get('/terminos-y-condiciones', [WebsiteController::class, 'terms'])->name('website.terms');
Route::get('/contacto', [WebsiteController::class, 'contact'])->name('website.contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
