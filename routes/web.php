<?php

use App\Http\Controllers\Member;
use App\Http\Controllers\Publication;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
Route::resource('pub', Publication::class);
Route::resource('members', Member::class);

Route::get('/', function () {
    return redirect()->route('pub.index');
})->name('oeuvres');
Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
Route::get('/login', function () {
    return view('authentification.login');
})->name('login');
Route::get('/signup', function () {
    return view('authentification.signup');
})->name('signup');
Route::post('/auth', [AuthController::class,'login'])->name('auth');
Route::post('/logout', [AuthController::class,'logout'])->name('logout');
Route::post('/save',[Member::class,'saveUser'])->name('save');