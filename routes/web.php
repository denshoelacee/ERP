<?php

use App\Http\Controllers\admin;
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

Route::get('/home', function () {
    return view('pages/landing-page');
})->name('home');

Route::get('/services', function () {
    return view('pages/services-page'); 
})->name('services');


Route::get('/contact', function () {
    return view('pages/contact-page');
})->name('contact');


Route::get('/login', function () { 
    return view('pages/login-page');    
})->name('login'); 


Route::get('/register', function () { 
    return view('pages/register-page');    
})->name('register'); 

Route::get('/dashboard', function(){
    return view('pages/admin-pages/dashboard');
})->name('dashboard'); 

Route::get('/inventory', function(){
    return view('pages/admin-pages/inventory');
})->name('inventory'); 


