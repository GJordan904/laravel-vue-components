<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('started', function () {
	return view('started');
});
Route::group(['prefix' => 'components'], function () {
	Route::get('datatable', ['uses' => 'ComponentsController@datatables_index', 'as' => 'datatable_index']);
	Route::get('tabs', ['uses' => 'ComponentsController@tabs_index', 'as' => 'tabs_index']);
});
Route::group(['prefix' => 'users'], function() {
	Route::get('all', ['uses' => 'UserController@users_all', 'as' => 'all_users']);
	Route::get('some', ['uses' => 'UserController@users_some', 'as' => 'some_users']);
});