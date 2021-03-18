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

use App\Task;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/task', 'TaskController@index');

Route::post('/task', 'TaskController@post');

Route::delete('/task/{task}', function (Task $task) {
    $task->delete();

    return redirect('/task');
});