<?php

use Illuminate\http\Request;
use App\Models\Task;

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
    $tasks=Task::all();
    return view('tasks.index',[
        'tasks'=>$tasks,
        ]);
})->name('task.index');

/*create tasks route*/
Route::get('/task/create', function (){
    return view('tasks.create');
})->name('task.create');

/*stare of new task*/
Route::post('task', function (Request $request){
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);

    if ($validator->fails()) {
        return redirect(route('task.create'))
            ->withInput()
            ->withErrors($validator);
    }
    $task = new Task;
    $task->name = $request->name;
    $task->save();
    return redirect(route('task.index'));
})->name('task.store');
