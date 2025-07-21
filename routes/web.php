<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
