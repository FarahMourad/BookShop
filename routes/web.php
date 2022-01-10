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
Route::group(['middleware' => 'prevent'],function() {
    Auth::routes();
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/adminHome', function () {
            return view('Admin_home');
        });
        Route::get('/home', function () {
            return view('User_home');
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
    });
});

Route::get('/editB', function () {
    return view('Edit_book');
});
Route::get('/addB', function () {
    return view('Add_book');
});

