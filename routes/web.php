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

Route::get('/', 'IndexController@index')->name('manager');

Route::post('/addManager', 'ManagerController@store');

Route::post('/updateManager', 'ManagerController@update');

Route::get('/manager-list', 'ManagerController@show')->name('managerList');

Route::post('/getProjects', 'ManagerController@findProjectsById');

Route::get('/project','ProjectController@index')->name('project');

Route::post('/addProject', 'ProjectController@store');

Route::post('/updateProject', 'ProjectController@update');

Route::get('/project-list', 'ProjectController@show')->name('projectList');

Route::post('/getManagers', 'ProjectController@findManagersById');


