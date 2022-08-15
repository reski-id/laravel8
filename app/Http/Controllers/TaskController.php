<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
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
        $tasklist = Task::paginate(3);
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
    public function store(Request $request)
    {
        Task::create([
            'task'=>$request->task,
        ]);
        return response()->json("Insert data Success", 200);
    }

    public function edit(Request $request, $id)
    {
        $tasklist = Task::find($id);

        $tasklist->update([
            'task' => $request->task,
        ]);
        return $tasklist;
    }

    public function destroy($id)
    {
        $tasklist = Task::find($id);

        $tasklist->delete();

        return response()->json('Delete Success', 200);
    }


    //form
    public function create_task()
    {
        return view('task.create');
    }

    public function edit_task($id)
    {
        return view('task.edit');
    }
}
