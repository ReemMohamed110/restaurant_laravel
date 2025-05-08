<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\EmployeeController;
use App\Mail\registerEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MenuItemController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\userController;

Route::get('/', function () {
    return view('home');
});
Route::get('adminDashboard', function () {
    // @dd(123);
    return view('admin.layouts.admin_app');
});


// Route::get('/dashboard', function () {
//     return view('home');
// })->name('dashboard');
// Route::get('/dashboard', function () {
//     return view('home');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/', [MenuItemController::class, 'index'])->name('dashboard');
Route::get('menu', [MenuController::class, 'index'])->name('menu');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::controller(PagesController::class)->group(function () {
    Route::get('/booking', 'booking')->name('booking');
    Route::get('/contact', 'contact');
    Route::get('/services', 'services')->name('services');
    Route::get('/team', 'team')->name('team');
    Route::get('/testimonial', 'testimonial')->name('testimonial');
    Route::get('about', 'about');
});
Route::controller(CategoriesController::class)->group(function () {
    Route::get('/allCategories', 'index')->name('allCategories');
    Route::get('/addCategory', 'create')->name('addCategory');
    Route::post('/store_category', 'store')->name('store_category');
    Route::delete('/delete_category/{id}', 'destroy')->name('delete_category');
    // Route::get('/testimonial', 'testimonial')->name('testimonial');
    // Route::get('about', 'about');
});
Route::controller(userController::class)->group(function () {
    Route::get('/allUsers', 'index')->name('allUsers');
    Route::get('/addAdmin', 'addAdmin')->name('addAdmin');
    Route::post('/storeAdmin', 'storeAdmin')->name('storeAdmin');
    Route::delete('/delete_user/{id}', 'destroy')->name('delete_user');
    Route::get('/edit_user/{id}', 'edit')->name('edit_user');
    Route::post('/update_user/{id}', 'update')->name('update_user');
});
Route::controller(MenuItemController::class)->group(function () {
    Route::get('/allItems', 'allItems')->name('allItems');
    // Route::get('/contact', 'contact');
    // Route::get('/services', 'services')->name('services');
    // Route::get('/team', 'team')->name('team');
    // Route::get('/testimonial', 'testimonial')->name('testimonial');
    // Route::get('about', 'about');
});
Route::controller(EmployeeController::class)->group(function () {
    Route::get('/employees', 'index')->name('employees');
    Route::get('/addEmployee', 'create')->name('addEmployee');
    Route::post('/store_employee', 'store')->name('store_employee');
    Route::delete('/delete_employee/{id}', 'destroy')->name('delete_employee');
    // Route::get('/testimonial', 'testimonial')->name('testimonial');
    // Route::get('about', 'about');
});
Route::controller(PostController::class)->group(function () {
    Route::get('/allPosts', 'index')->name('allPosts');
    Route::get('/addPost', 'create')->name('addPost');
    Route::post('/store_post', 'store')->name('store_post');
    Route::delete('/delete_post/{id}', 'destroy')->name('delete_post');
    // Route::get('/testimonial', 'testimonial')->name('testimonial');
    // Route::get('about', 'about');
});


require __DIR__ . '/auth.php';
