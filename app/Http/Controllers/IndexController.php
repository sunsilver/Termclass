<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{

public function about(){
        $tasks = Task::all();
        return view('about')->with('tasks',$tasks);
    }

    public function task_index()
    {
        $tasks = Schedule::all();
        return view('schedule/main')->with('tasks',$tasks);
    }
}