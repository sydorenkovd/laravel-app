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
        $tasks = Task::where('id', '>', 29);
        return view('task.index')->with('tasks', $tasks);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $task = Task::find($id);
    return view('task.edit', ['task' => $task]);
    }

    public function update($id, Requests\ListFormRequest $request)
    {
        $task = Task::find($id);
        $task->update(array(
            'name' => $request->get('name'),
            'description' => $request->get('description')
        ));
        return \Redirect::route('task.edit', [$task->id])->with('message', 'Your task has been updated!');
    }
}
