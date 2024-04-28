<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\ProductController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', function () {
    // return view('home');
    $products = Product::latest()->paginate(3);
        return view('home',['products' => $products]);
});

Route::get('/register', [RegisterController::class, 'create'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/login', [SessionsController::class, 'create'])->name('login.index');
Route::post('/login', [SessionsController::class, 'store'])->name('login.store');
Route::get('/logout', [SessionsController::class, 'destroy'])->name('login.destroy');
Route::resource('/products', ProductController::class);