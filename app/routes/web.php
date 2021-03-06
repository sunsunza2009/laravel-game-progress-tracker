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
	if(Auth::check()){
		return redirect('/home');
	} else {
		return view('welcome');
	}
});



Auth::routes();

//Route for user
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index');
    Route::get('/detail/{id}', 'DetailController@show');
    Route::resource('detail','DetailController');
});

Route::group(['prefix' => 'api'], function(){
	Route::get('/fav', 'FavController@index');
    Route::get('/fav/{id}/add', 'FavController@store');
    Route::get('/fav/{id}/del', 'FavController@destroy');
	Route::get('/game', 'GameApiController@game');
	Route::get('/search/{txt}', 'GameApiController@search');
});



//Route for admin
Route::group(['prefix' => 'admin'], function(){
    Route::group(['middleware' => ['admin']], function(){        
        Route::resource('chapters','ChapterController');
        Route::resource('game','GameController');
        Route::get('search', 'GameController@search');
        Route::get('chapters/{id}', 'ChapterController@index');
    });
});
