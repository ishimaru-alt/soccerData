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

//Route::get('/index', function () {
//    return view('index/{id?}','dbTestController@selectUserData');
//  });

Route::get('index','dbTestController@selectUserData');

Route::get('index/{id?}','dbTestController@selectUserData');

Auth::routes();

Route::resource('/home', 'TeamController');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'dbTeamController@selectTeamData')->middleware('auth');