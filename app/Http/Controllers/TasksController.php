<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTaskRequest;
use App\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    const UNDONE = 0;
    const DONE = 1;

    public function index()
    {
        $tasks = Task::orderBy('id', 'DESC')->get();
        $data = compact('tasks');
        return view("tasks.index", $data);
    }

     public function store(CreateTaskRequest $request)
    {
        $input = $request->all();
        $input['done'] = $this::UNDONE;
        Task::create($input);
        return redirect('/tasks');
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.edit', compact('task'));
    }

    public function update(CreateTaskRequest $request, $id)
    {
        $task = Task::findOrfail($id);
        $task->update($request->all());
        return redirect('/tasks');
    }
}
