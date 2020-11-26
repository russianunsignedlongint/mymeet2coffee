<?php

use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeMail;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\FeedbackController;

use App\Models\User;
use App\Feedback;

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

Route::get('faq', function () {
    return view('faq');
})->name('faq');

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

// Route::middleware(['auth:sanctum', 'verified'])->get('/feedback', function () {
//     //dd(auth()->user()->feedbacks->last()->message);
// })->name('feedback');

Route::middleware(['auth:sanctum', 'verified'])->get('/feedback', function() {
    return view('profile.feedback');
})->name('feedback_get');

Route::middleware(['auth:sanctum', 'verified'])->post('/feedback', [FeedbackController::class, 'store'])->name('feedback_post');
