<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }
    public function create(){
        return view('tasks.create');
    }


public function store(Request $request)
{
    $request->validate([
        'title' => 'required|max:255',
        'description' => 'nullable',
    ]);

    Task::create($request->all());

    return redirect()->route('tasks.index');
}

public function update(Request $request, Task $task)
{
    $request->validate([
        'title' => 'required|max:255',
        'description' => 'nullable',
    ]);

    $task->update($request->all());

    return redirect()->route('tasks.index');
}

}
