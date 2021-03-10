<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('task.index', compact('tasks'));
    }

    public function post(Request $request)
    {
        $task = new Task();
        $task->name = $request->name;
        $task->save();
    
        return view('task.index');
    }

}
