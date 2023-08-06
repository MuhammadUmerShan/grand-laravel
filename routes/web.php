<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactscontroller;

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

Route::get('/contact',function(){
    return view('web.contact-us');
});


Route::get('/side',function(){
    return view('web.side-bar');
});


Route::get('/about',function(){
    return view('web.about');
});


Route::get('/index',function(){
    return view('web.index');
});

Route::get('/std', [ contactscontroller::class , 'index1']);


Route::get('/about1', [ contactscontroller::class , 'about1']);


Route::get('/contact1', [ contactscontroller::class , 'contact1']);


Route::get('/side1', [ contactscontroller::class , 'side1']);
