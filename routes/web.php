<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'welcome')->name('home');
Route::view('/about', ('about'))->name('about');
Route::view('/menu', ('menu'))->name('menu');
Route::view('/reservation', ('reservation'))->name('reservation');
Route::view('/special', ('special'))->name('special');
Route::view('/team', ('team'))->name('team');
