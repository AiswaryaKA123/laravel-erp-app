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
Route::get('/admin_reg',[MainController::class,'admin_reg'])->name('admin_reg');
Route::post('/admin_save',[MainController::class,'admin_save'])->name('admin_save');
Route::get('/dashboard',[MainController::class,'dashboard'])->name('dashboard');
Route::get('/about',[MainController::class,'about'])->name('about');
Route::get('/contact',[MainController::class,'contact'])->name('contact');


Route::group(['middleware'=>['UserCheck']],function(){
    Route::get('/login',[MainController::class,'login'])->name('login'); 
    Route::get('/register',[MainController::class,'register'])->name('register');
    Route::get('/home',[MainController::class,'home'])->name('home');
    Route::get('/profile',[MainController::class,'profile'])->name('profile');
    Route::get('/gallery',[MainController::class,'gallery'])->name('gallery');
    Route::get('/scholarship',[MainController::class,'scholarship'])->name('scholarship');
    Route::get('/viewstudent',[Maincontroller::class,'viewstudent'])->name('viewstudent');
    Route::get('/studadmission',[Maincontroller::class,'studadmission'])->name('studadmission');
    Route::post('/addstud',[Maincontroller::class,'addstud'])->name('addstud');
    Route::get('/charity',[Maincontroller::class,'charity'])->name('charity');
    Route::post('/charity_save',[Maincontroller::class,'charity_save'])->name('charity_save');
    Route::get('/scholarship',[Maincontroller::class,'scholarship'])->name('scholarship');
    Route::post('/scholarship_save',[Maincontroller::class,'scholarship_save'])->name('scholarship_save');
    Route::get('/tutionfee',[Maincontroller::class,'tution'])->name('tution');
    Route::get('/events',[Maincontroller::class,'events'])->name('events');
    Route::get('/bus',[Maincontroller::class,'bus'])->name('bus');
    Route::get('/sponsor',[Maincontroller::class,'sponsor'])->name('sponsor');
    Route::post('/sponsor_save',[Maincontroller::class,'sponsor_save'])->name('sponsor_save');
    Route::get('/bus',[Maincontroller::class,'bus'])->name('bus');
    Route::post('/bus_save',[Maincontroller::class,'bus_save'])->name('bus_save');
    Route::get('/dashboard',[Maincontroller::class,'dashboard'])->name('dashboard');
    Route::get('/payment',[Maincontroller::class,'payment'])->name('payment');
    Route::post('/payment_save',[Maincontroller::class,'payment_save'])->name('payment_save');

});