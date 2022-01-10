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
//        Route::get('/adminHome', function () {
//            return view('Admin_home', ['cats' => ""]);
//        });
//        Route::get('/home', function () {
//            return view('User_home', ['cats' => ""]);
//        });
        Route::get('/home', 'CategoryController@getAll');
        Route::get('/adminHome', 'CategoryController@getAllAdimin');

        Route::get('/getArtAdmin', 'CategoryController@getArtAdmin')->name('getArtAdmin');
        Route::get('/getGeoAdmin', 'CategoryController@getGeoAdmin')->name('getGeoAdmin');
        Route::get('/getRelAdmin', 'CategoryController@getRelAdmin')->name('getRelAdmin');
        Route::get('/getScienceAdmin', 'CategoryController@getScienceAdmin')->name('getScienceAdmin');
        Route::get('/getHistAdmin', 'CategoryController@getHistoryAdmin')->name('getHistAdmin');


        Route::get('/promote', function () {
            return view('Promote');
        });
        Route::post('/promoteUser', 'ManagerController@promote_user')->name('promoteUser');

        Route::get('/getArt', 'CategoryController@getArt')->name('getArt');
        Route::get('/getGeo', 'CategoryController@getGeo')->name('getGeo');
        Route::get('/getRel', 'CategoryController@getRel')->name('getRel');
        Route::get('/getScience', 'CategoryController@getScience')->name('getScience');
        Route::get('/getHist', 'CategoryController@getHistory')->name('getHist');


        Route::get('/settings', 'EditUserInfoController@showSetting');

        Route::post('/editData', 'EditUserInfoController@edit')->name('edit');

        Route::get('/pay', function () {
            return view('Payment');
        });
        Route::get('/cart', function () {
            return view('Cart');
        });
        Route::get('/editB', function () {
            return view('Edit_book');
        });
        Route::get('/addB', function () {
            return view('Add_book');
        });

        Route::post('/addBook', 'BookController@addBook')->name('addBook');

        Route::get('/con', function () {
            return view('Confirm');
        });
        Route::get('/addP', function () {
            return view('Add_publisher');
        });

        Route::get('/stat', function () {
            return view('Statistics');
        });
    });

    Route::post('/deleteOrder', 'BookOrderController@confirmOrder')->name('deleteOrder');

    Route::post('/con', 'BookOrderController@confirmOrderPage')->name('confirmOrderPage');


});



