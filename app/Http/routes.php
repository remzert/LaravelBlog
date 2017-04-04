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


Route::get('page/test', 'TestController@index');

Route::resource('link', 'LinksController', ['only' => ['create', 'store']]);
Route::get('r/{link}',['as' => 'Link.show', 'uses' => 'LinksController@show'])->where('link','[0-9]+');

//Route::get('links/create','LinksController@create');
//Route::post('links/create','LinksController@store');



Route::get('/', function () {
    return view('welcome');
});
