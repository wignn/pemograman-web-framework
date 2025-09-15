<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


//pertemuab 1
Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return 'ini contact';
})->name('contact');



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

// tugas 1


Route::prefix('tugas1')->group(function () {
    Route::get('/profile', function () {
        return view('tugas-1.user');
    }) ->name('user');

    Route::get('/menu', function() {
        return view('tugas-1.menu');
    })-> name('menu');
});


//pertemuan 2
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//tugas 2