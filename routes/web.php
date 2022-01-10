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
    return view('Home');
});
Route::get('/adminHome', function () {
    return view('Admin_home');
});
Route::get('/userHome', function () {
    return view('User_home');
});
Route::get('/login', function () {
    return view('Login');
});
Route::get('/signup', function () {
    return view('Signup');
});
Route::get('/promote', function () {
    return view('Promote');
});
Route::get('/settings', function () {
    return view('Settings');
});
Route::get('/pay', function () {
    return view('Payment');
});
