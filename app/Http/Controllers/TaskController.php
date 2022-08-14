<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TaskController extends Controller
{
    //get data using Query Builder
    public function index(Request $request)
    {
        if (request()->search) {
            $tasklist = DB::table('task')
            ->where('task', 'LIKE',"%$request->search%")
            ->get();
            return $tasklist;
        }
        $tasklist = DB::table('task')->get();
        return $tasklist;
    }

    //get data by id
    public function show($id)
    {
        $tasklist = DB::table('task')->where('id',$id)->first();
        return $tasklist;
    }

    public function edit(Request $request, $id)
    {
        $tasklist = DB::table('task')->where('id',$id)->update([
            'task' => $request->task,
            'updated_at' => now(),
        ]);
        return response()->json('Update Success', 200);;
    }

    public function destroy($id)
    {
        DB::table('task')->where('id',$id)->delete();
        return response()->json('Delete Success', 200);;
    }

    //save to db
    public function store(Request $request)
    {

        DB::table('task')->insert([
            'task'=>$request->task,
            'created_at'=> now(),
        ]);
        return response()->json("Insert data Success", 200);
    }


}
