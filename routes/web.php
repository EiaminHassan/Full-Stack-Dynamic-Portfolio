<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\Controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/education', function () {
    return view('education');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::post('/admin/dashboard', [Controller::class, 'dashboard']);

// Login routes
Route::post('/login', [AuthenticationController::class, 'login']);

Route::get('/login', function () {
    return view('auth.login');
})->name('login');


// Registration route
Route::post('/registration', [AuthenticationController::class, 'register'])->name('registration');

Route::get('registration', function(){
    return view('auth.registration');
})->name('registration');


//Authentication routes----------
Route::get('/admin/dashboard', [Controller::class, 'dashboard'])->name('admin.dashboard')->middleware('auth');

// Dashboard route for authenticated users
// Route::get('/admin/dashboard', [Controller::class, 'dashboard'])->name('admin.dashboard')->middleware('auth');
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [Controller::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/update-profile', [Controller::class, 'dashboard'])->name('admin.dashboard');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
