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

/*all tasks route*/
Route::get('/task', function (){
    return view('tasks.index');
})->name('task.index');

/*create tasks route*/
Route::get('/task/create', function (){
    return view('tasks.create');
})->name('task.create');
