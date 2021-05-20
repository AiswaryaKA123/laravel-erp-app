<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::post('/registersave',[MainController::class,'save'])->name('registersave');
Route::post('/logincheck',[MainController::class,'check'])->name('logincheck');
Route::get('/logout',[MainController::class,'logout'])->name('logout');
Route::get('/about',[MainController::class,'about'])->name('about');
Route::get('/contact',[MainController::class,'contact'])->name('contact');
Route::get('/profile',[MainController::class,'profile'])->name('profile');

Route::group(['middleware'=>['UserCheck']],function(){
    Route::get('/login',[MainController::class,'login'])->name('login');
    Route::get('/register',[MainController::class,'register'])->name('register');
    Route::get('/home',[MainController::class,'home'])->name('home');
    Route::get('/gallery',[MainController::class,'gallery'])->name('gallery');
    Route::get('/scholarship',[MainController::class,'scholarship'])->name('scholarship');
    Route::get('/viewstudent',[Maincontroller::class,'viewstudent'])->name('viewstudent');
    Route::get('/studadmission',[Maincontroller::class,'studadmission'])->name('studadmission');
    Route::post('/addstud',[Maincontroller::class,'addstud'])->name('addstud');
    Route::get('/charity',[Maincontroller::class,'charity'])->name('charity');
    Route::get('/scholarship',[Maincontroller::class,'scholarship'])->name('scholarship');
    Route::get('/tutionfee',[Maincontroller::class,'tution'])->name('tution');
    Route::get('/event',[Maincontroller::class,'events'])->name('events');
    Route::get('/bus',[Maincontroller::class,'bus'])->name('bus');
    Route::get('/profile',[Maincontroller::class,'profile'])->name('profile');
    

});