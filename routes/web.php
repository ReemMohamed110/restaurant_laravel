<?php

use App\Mail\registerEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MenuItemController;

Route::get('/', function () {
    return view('home');
});



// Route::get('/dashboard', function () {
//     return view('home');
// })->name('dashboard');
// Route::get('/dashboard', function () {
//     return view('home');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/', [MenuItemController::class,'index'])->name('dashboard');
Route::get('menu', [MenuController::class,'index'])->name('menu');

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
Route::get('about', 'about');
});
Route::get('adminDashboard', function () {
    return view('admin.layouts.admin_app');
});

require __DIR__ . '/auth.php';
