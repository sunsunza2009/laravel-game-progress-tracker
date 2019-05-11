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



Auth::routes();

//Route for user
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index');
});

//Route for admin
Route::group(['prefix' => 'admin'], function(){
    Route::group(['middleware' => ['admin']], function(){        
		Route::get('/dashboard', function () {
			return view('admin/dashboard');
		});
        Route::resource('chapters','ChapterController');
        Route::resource('game','GameController');
        Route::get('search', 'GameController@search');
        Route::get('chapters/{id}', 'ChapterController@index');
    });
});
