<?php

namespace App\Http\Controllers;

use App\Photos;
use App\Task;
use App\User;
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
        $tasks = Task::all();
        return view('task.index')->with('tasks', $tasks);
    }

}
