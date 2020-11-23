<?php

use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeMail;
use App\Http\Controllers\PartnerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('register', function() {
    return view('auth.register');
})->name('register');

Route::get('privacy-policy', function () {
    return view('auth.privacy-policy');
})->name('privacy-policy');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('profile.show');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/verified', function () {
    return view('auth.verified');
})->name('verified');

Route::get('/email', function () {
    Mail::to('radomski.adr@gmail.com')->send(new WelcomeMail());
});

// Route::resource('partners', PartnerController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/partners', [PartnerController::class, 'index'])->name('partners');