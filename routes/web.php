<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/dashboard', function () {
    return view('home.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';


Route::get('admin/dashboard', [HomeController::class, 'index'])->middleware('auth','admin');

Route::get('view_category', [AdminController::class, 'view_category'])->middleware('auth','admin')->name('view_category');

Route::post('add_category', [AdminController::class, 'add_category'])->middleware('auth','admin');

Route::get('/delete_category/{id}', [AdminController::class, 'delete_category'])->middleware('auth','admin');

Route::get('edit_category/{id}', [AdminController::class, 'edit_category'])->middleware('auth','admin');

Route::get('/update_category/{id}', [AdminController::class, 'update_category'])->middleware('auth','admin');

Route::get('/add_product', [AdminController::class, 'add_product'])->middleware('auth','admin');

Route::post('/upload_product', [AdminController::class, 'upload_product'])->middleware('auth','admin');

Route::get('view_product', [AdminController::class, 'view_product'])->middleware('auth','admin')->name('view_product');

Route::get('/delete_product/{id}', [AdminController::class, 'delete_product'])->middleware('auth','admin');

Route::get('edit_product/{id}', [AdminController::class, 'edit_product'])->middleware('auth','admin');

Route::put('/update_product/{id}', [AdminController::class, 'update_product'])->middleware('auth','admin');

Route::get('search_product', [AdminController::class, 'search_product'])->middleware('auth','admin')->name('search_product');