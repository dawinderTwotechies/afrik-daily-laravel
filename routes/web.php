<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.home.home');

   // return view('welcome');
})->name('home');
Route::get('/all-properties', function () {
    return view('public.properties.properties');
   // return view('welcome');
});
Route::get('/property-details', function () {
    return view('public.property.property');
   // return view('welcome');
});
Route::get('/signup', function () {
    return view('public.auth.signup');
   // return view('welcome');
});
Route::get('/loginn', function () {
    return view('public.auth.login');
   // return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::middleware([])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard.welcome');
    })->name('admin.index');
})->prefix('admin')->name('admin.');




require __DIR__.'/auth.php';




