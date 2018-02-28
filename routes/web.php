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

Route::get('/', 'IndexController@index');

Route::post('/addProject', 'ProjectController@store');

Route::post('/updateProject', 'ProjectController@update');

//Route::get('/projectStore', 'ProjectController@store');

Route::get('/managerStore', 'ManagerController@store');

Route::get('/addProject', 'ManagerController@addProject');

Route::get('/showProject', 'ProjectController@show');

Route::get('/showManager', 'ManagerController@show');

