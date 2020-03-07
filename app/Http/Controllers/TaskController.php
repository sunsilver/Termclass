<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Schedule;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Schedule::all();
        // compact는 with
        return view('schedule.main', compact('tasks'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('schedule.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        // return $request->all();;
        // 테이블을 모델화 시킨 스케줄을 새로운 데이터를 추가해줄건데 = 크리에잇
        // input태그에서 적은 것이 리퀘스트로 담긴다
        Schedule::create($request->all());

        return view('schedule.create');
        //리다이렉트로 돌아간다
        // return redirect()->route('task');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return $id;
        // $tasks = Schedule::all();
        $task = Schedule::all()->where('id',$id)->first();

        // return $article;

        return view('schedule.view')->with('task', $task);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return $id;
        $task = Schedule::all()->where('id',$id)->first();
        return view('schedule.edit_form')->with('task',$task);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return $id;
        Schedule::where('id',$id)->delete();
        return redirect('schedule/main');
    }
}
