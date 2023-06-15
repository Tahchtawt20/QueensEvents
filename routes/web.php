<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\ClientController ;
use App\Http\Controllers\Owner\OwnerController;
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

// Routes for guests
Route::view('/', 'welcome')->name('welcome');
Route::view('/about', ('about'))->name('about');
Route::view('/theme', ('theme'))->name('theme');
Route::view('/special', ('special'))->name('special');
Route::view('/team', ('team'))->name('team');
Route::get('lang/{lang}',[
    'uses'=>'App\Http\Controllers\LocalizationController@switchLang',
])->name('lang');

// Client Routes
Route::get('/reservation', [ClientController::class ,'create' ])->name('reservation')->middleware('role:client');
Route::post('/reservation' , [ClientController::class ,'store'])->name('storeRes');
Route::get('/myevents' , [ClientController::class ,'index'])->name('myevents')->middleware('role:client');

// Client And Owner Routes
Route::get('/myaccount' , [userController::class ,'index'])->name('indexAcc');
Route::put('/myaccount/{id}',[userController::class, 'update'])->name('updateAcc');
Route::get('/myaccount/{id}/edit',[userController::class, 'edit'])->name('editAcc');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Owner Routes
Route::get('/reservations' , [OwnerController::class ,'index'])->name('reservations')->middleware('role:owner');


Auth::routes();

Route::fallback(function(){
    return view('notFound');
});