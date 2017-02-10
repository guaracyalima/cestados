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




Route::group(['prefix' => 'admin', 'middleware' => 'auth.checkrole' ,'as' => 'admin.'], function (){
    Route::get('states', ['as' => 'states.index', 'uses' =>'StatesController@index']);
    Route::post('states/ajaxAdd', ['as' => 'states.ajaxAdd', 'uses' =>'StatesController@ajaxAdd']);
    Route::get('states/edit/{id}', ['as' => 'states.edit', 'uses' =>'StatesController@edit']);
    Route::post('states/update/{id}', ['as' => 'states.update', 'uses' =>'StatesController@update']);
    Route::get('states/destroy/{id}', ['as' => 'states.destroy', 'uses' =>'StatesController@destroy']);
    Route::post('states/store', ['as' => 'states.store', 'uses' =>'StatesController@store']);

    Route::get('users', ['as' => 'users.index', 'uses' =>'UsersController@index']);
    Route::get('users/edit/{id}', ['as' => 'users.edit', 'uses' =>'UsersController@edit']);
    Route::get('users/destroy/{id}', ['as' => 'users.destroy', 'uses' =>'UsersController@destroy']);
    Route::post('users/update/{id}', ['as' => 'users.update', 'uses' =>'UsersController@update']);


});


Route::get('customer', ['as' => 'customer.index', 'uses' =>'CustomerController@index']);