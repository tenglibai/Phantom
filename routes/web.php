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

Route::get('/welcome', function () {
    return view('welcome');
});

//Route::get('/', ['as' => 'task.index', 'uses' => 'TasksController@index']);
//Route::post('create', ['as' => 'task.create', 'uses' => 'TasksController@create']);

Route::resource('tasks','TasksController');
