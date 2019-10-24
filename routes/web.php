<?php

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
});

Route::any('landingPage/',function(){
    return view('page1');
});

Route::get('login/', function(){
    return view('page2');
});

Route::get('forgotten/', function(){
    return view('page3');
});

Route::post('home/', 'SecondController@home');