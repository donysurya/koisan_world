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
    return view('landing_page.home');
});

Route::get('/faq', function () {
    return view('landing_page.about');
});

Route::get('/store', function () {
    return view('landing_page.store');
});

Route::get('/collections', function () {
    return view('landing_page.collections');
});

Route::get('/rewards', function () {
    return view('landing_page.rewards');
});
