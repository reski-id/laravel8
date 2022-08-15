<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use Illuminate\Support\Facades\DB;


class TaskController extends Controller
{
    //get data using Eloquent
    public function index(Request $request)
    {
        if (request()->search) {
            $tasklist = Task::where('task', 'LIKE',"%$request->search%")->paginate(3);
            return $tasklist;
        }
        $tasklist = Task::select("*")->orderByDesc("id")->paginate(3);
        return view('task.index', [
            'data' => $tasklist
        ]);
    }
    //get data by id
    public function show($id)
    {
        $tasklist = Task::find($id);
        return $tasklist;
    }

    //save to db
    public function store(TaskRequest $request)
    {
        Task::create([
            'task'=>$request->task,
        ]);
    return redirect('/task');
    }

    public function edit(TaskRequest $request, $id)
    {
        $tasklist = Task::find($id);

        $tasklist->update([
            'task' => $request->task,
        ]);
        return redirect('task');
    }

    public function destroy($id)
    {
        $tasklist = Task::find($id);

        $tasklist->delete();

        return redirect('task');
    }


    //form
    public function create_task()
    {
        return view('task.create');
    }

    public function edit_task($id)
    {
        $tasklist = Task::find($id);
        return view('task.edit', compact('tasklist'));
    }
}
