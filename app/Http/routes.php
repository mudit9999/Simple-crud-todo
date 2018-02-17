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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//use Illuminate\Routing\Route;

Route::auth();
//
Route::get('/home', 'HomeController@index');


Route::get('/', 'TasksController@index');

//Auth::routes();

Route::get('/add','TasksController@add');
Route::post('/task  ','TasksController@create');

Route::get('/task/{task}','TasksController@edit');
Route::post('task/{task}','TasksController@update');
Route::post('tasks/{task}','TasksController@destory');