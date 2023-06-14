<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\ClientController ;
use App\Http\Controllers\userController ;


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
Route::view('/special', ('special'))->name('special');
Route::view('/team', ('team'))->name('team');

Route::get('/reservation', [ClientController::class ,'create' ])->name('reservation');
Route::post('/reservation' , [ClientController::class ,'store'])->name('storeRes');
Route::get('/myevents' , [ClientController::class ,'index'])->name('myevents');

Route::get('/myaccount' , [userController::class ,'index'])->name('indexAcc');
Route::put('/myaccount/{id}',[userController::class, 'update'])->name('updateAcc');
Route::get('/myaccount/{id}/edit',[userController::class, 'edit'])->name('editAcc');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('lang/{lang}',[
    'uses'=>'App\Http\Controllers\LocalizationController@switchLang',
])->name('lang');