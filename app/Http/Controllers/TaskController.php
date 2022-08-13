<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TaskController extends Controller
{

    public $tasklist = [
        1 => 'sleep',
        2 => 'work',
        3 => 'eat',
        4 => 'coding',
        5 => 'study',
    ];

    public function index()
    {

        $tasklist = [
            1 => 'sleep',
            2 => 'work',
            3 => 'eat',
            4 => 'coding',
            5 => 'study',
        ];

        if (request()->search) {
            return $tasklist[request()->search];
        }
        return $tasklist;
    }

    public function show($param)
    {
        $tasklist = [
            1 => 'sleep',
            2 => 'work',
            3 => 'eat',
            4 => 'coding',
            5 => 'study',
        ];
        return $tasklist[$param];
    }

    public function edit($param)
    {
        $tasklist = [
            1 => 'sleep',
            2 => 'work',
            3 => 'eat',
            4 => 'coding',
            5 => 'study',
        ];
        $tasklist[$param]=request()->task;
        return $tasklist;
    }

    public function delete($param)
    {
        $tasklist = [
            1 => 'sleep',
            2 => 'work',
            3 => 'eat',
            4 => 'coding',
            5 => 'study',
        ];
        unset($tasklist[$param]);
        return $tasklist;
    }

    public function store()
    {
        $tasklist = [
            1 => 'sleep',
            2 => 'work',
            3 => 'eat',
            4 => 'coding',
            5 => 'study',
        ];
        $tasklist[request()->label]=request()->task;
        return $tasklist;
    }



}
