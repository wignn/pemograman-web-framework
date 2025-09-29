<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


//pertemuab 2
Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return 'ini contact';
})->name('contact');

// Route::get('login', function() {
//     return view('auth.login');
// });

Route::get('/rahasia', function() {
    return 'Ini Hallaman rahasia';
})->middleware('role');

Route::get('/hallo', function () {
    return 'hello world';
});

// Route::get('/user/{id}', function ($id) {
//     return "User ID:" . $id;
// });

// Route::get('/user/{name?}', function ($name = 'Guest') {
//     return 'Hallo ' . $name;
// });

Route::prefix('manage')->group(function () {
    Route::get('/edit', function () {
        return 'edit';
    });
    Route::get('/create', function () {
        return 'create';
    });
});

// tugas pertemuan 2


Route::prefix('tugas1')->group(function () {
    Route::get('/profile', function () {
        return view('tugas-1.user');
    }) ->name('user');

    Route::get('/menu', function() {
        return view('tugas-1.menu');
    })-> name('menu');
});


//pertemuan 3
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'role:admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('product', [ProductController::class, 'index']);

Route::get('product-count/{id}', [ProductController::class, 'showBarang']);


//uts: jawaban no 1
Route::get('uts', function() {
    return view('uts');
})->name('uts');

require __DIR__.'/auth.php';


