<?php

namespace App\Http\Controllers;

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

    public function create(Request $request)
    {
        $input = $request->all();
        $input['done'] = $this::UNDONE;
        Task::create($input);
        return redirect('/');
    }
}
