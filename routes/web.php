<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Mail\registerEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});



Route::get('/dashboard', function () {
    Mail::to('demo@mail.com')->send(new registerEmail());
    return view('home');
})->name('dashboard');
// Route::get('/dashboard', function () {
//     return view('home');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::controller(PagesController::class)-> group(function () {
Route::get('/booking','booking')->name('booking');
Route::get('/contact', 'contact');
Route::get('/services', 'services')->name('services');
Route::get('/team', 'team')->name('team');
Route::get('/testimonial', 'testimonial')->name('testimonial');
Route::get('/menu', 'menu')->name('menu');
Route::get('about', 'about');
});
Route::get('adminDashboard', function () {
    return view('admin.layouts.admin_app');
});

require __DIR__ . '/auth.php';
