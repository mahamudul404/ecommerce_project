<?php

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StripePaymentController;
use Illuminate\Http\Request;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/dashboard', [HomeController::class, 'login_home'])->middleware(['auth', 'verified'])->name('dashboard');

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

Route::get('edit_product/{slug}', [AdminController::class, 'edit_product'])->middleware('auth','admin');

Route::put('/update_product/{id}', [AdminController::class, 'update_product'])->middleware('auth','admin');

Route::get('search_product', [AdminController::class, 'search_product'])->middleware('auth','admin')->name('search_product');


Route::controller(StripePaymentController::class)->group(function () {

    Route::get('stripe/{total}', 'stripe');

    Route::post('stripe/{total}', 'stripePost')->name('stripe.post');
});



Route::get('product_details/{id}', [HomeController::class, 'product_details']);

Route::get('add_to_cart/{id}', [HomeController::class, 'add_to_cart'])->middleware('auth','verified');

Route::get('my_cart', [HomeController::class, 'my_cart'])->middleware('auth','verified');

Route::get('remove_cart/{id}', [HomeController::class, 'remove_cart'])->middleware('auth','verified');

Route::post('confirm_order', [HomeController::class, 'confirm_order'])->middleware('auth','verified');

Route::get('my_order', [HomeController::class, 'my_order'])->middleware('auth','verified');

Route::get('view_order', [AdminController::class, 'view_order'])->middleware('auth','admin')->name('view_order');

Route::get('update_status/{id}', [AdminController::class, 'update_status'])->middleware('auth','admin');

Route::get('delevered/{id}', [AdminController::class, 'deleverd'])->middleware('auth','admin');

Route::get('print_pdf/{id}', [AdminController::class, 'print_pdf'])->middleware('auth','admin');

Route::get('shop', [HomeController::class, 'shop']);

Route::get('why', [HomeController::class, 'why']);

Route::get('testimonial', [HomeController::class, 'testimonial']);

Route::get('contact', [HomeController::class, 'contact']);