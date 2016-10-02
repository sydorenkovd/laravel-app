<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

use App\Http\Requests;

class TasksController extends Controller
{
    /**
     * @var Task $tasks
     *
     */
    public function index()
    {
        $tasks = Task::find(2);
        return view('task.index')->with('tasks', $tasks);
    }

}
