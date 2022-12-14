<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name('main');

Route::get('/auth', function () {
    return view('sign-in');
});

Route::get('/auth/sign_up', function () { return view('sign-in'); })->name('auth.sign_up');
Route::get('/auth/forgot_password', function () { return view('sign-in');})->name('auth.forgot_password');


Route::get('/dashboard', function () {
    return view('welcome');
})->name('dashboard');