<?php

use Illuminate\Database\Eloquent\Model;
namespace App\Http\Controllers;
use App\Schedule;

class IndexController extends Controller
{
    public function task_index()
    {
        $tasks = Schedule::all();
        return view('schedule.index')->with('tasks',$tasks);
        // 'tasks'는 프론트에서 써줄 이름
    }
}