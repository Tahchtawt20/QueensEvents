<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\ClientController ;


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

Route::view('/', 'welcome')->name('welcome');
Route::view('/about', ('about'))->name('about');
Route::view('/theme', ('theme'))->name('theme');

Route::get('/reservation', [ClientController::class ,'create' ])->name('reservation');
Route::view('/special', ('special'))->name('special');
Route::view('/team', ('team'))->name('team');
Route::post('/reservation' , [ClientController::class ,'store'])->name('storeRes');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('lang/{lang}',[
    'uses'=>'App\Http\Controllers\LocalizationController@switchLang',
])->name('lang');