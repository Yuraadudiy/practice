<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MainController@index');
Route::get('/task-1', 'TasksController@task1')->name('task.1');
Route::post('/task-1', 'TasksController@task1Store')->name('task.1.store');
Route::get('/task-1-get-info', 'TasksController@task1GetInfoFromFiles')->name('task.1.getInfo');

Route::get('/task-2', 'TasksController@task2')->name('task.2');
Route::post('/task-2', 'TasksController@task2Store')->name('task.2.store');
Route::get('/task-3', 'TasksController@task3')->name('task.3');
