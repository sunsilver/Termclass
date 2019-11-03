<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //게시글 리스트 
        $articles =  DB::table('articles')->get();

        return view('board.list')->with('articles', $articles);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //이거는 블레이드 파일. 경로가 아님
        return view('board.creatform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*로그인 한 사용자의 요청인가?
        > 아니면 로그인 페이지로 리다이렉트
        if(Auth::check()) {

        }
        로그인 한 사용자라면
        validation check
        유효성 검사에서 통과하지 못했다면 다시 입력폼으로 리다이렉트

        데이터베이스에 게시글 정보를 삽입
        */
        
        $validateData['user_id'] = 1;
        
        // $validateData = $request->validate(['title'=>'required','content'=>'required','user_id']);
        
        DB::table('articles')->insert(['title'=>$request->title,'content'=>$request->content, 'user_id'=>1]);
        // 하나하나 적어줄 필요 없이 validateDate로 쓸 수 있다
        // DB::table('articles')->insert($validateData);

        // return 'ㅇㅇㅇ';

        //리다이렉트를 쓰려면 라우트에서 설정한 이름 사용
        return redirect(route('list'));
        // insert 나 delete update 했을 경우 view로 연결할 때는 redirect
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = DB::table('articles')->where('id',$id)->first();

        // return $article;

        return view('board.view')->with('article', $article);
    }  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = DB::table('articles')->where('id',$id)->first();
        return view('board.edit_form')->with('article',$article);
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
        DB::table('articles')->where('id',$id)->update(['title'=> $request->title, 'content'=> $request->content]);
        return redirect('board/view/' .$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('articles')->where('id',$id)->delete();
        return redirect('board/list');
    }
}
