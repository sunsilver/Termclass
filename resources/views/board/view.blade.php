@extends('layouts.master')

@section('head')
@include('layouts.head')
<link rel="stylesheet" href="{{asset('css/view.css')}}" />
<link rel="stylesheet" href="{{asset('css/calendar.css')}}" />
<link href="https://fonts.googleapis.com/css?family=Do+Hyeon|Jua&display=swap" rel="stylesheet">
@endsection

@section('content')

<div class="container col-md-6" style="">
    <div class="card" style="border-radius: 10px;">
        <div class="card-body">
            <div class="title" style="font-size:30px; color:gray; margin-botton:5%;">
                {{$article->title}}</h4>
            </div>

                <h6 class="card-subtitle text-muted mb-4" style="margin-top:5%; margin-left:3%;">
                    <i> ID {{$article->user_id}}</i>
                    ·
                    <i> CREAT_DATE {{$article->created_at}}</i>
                    ·
                    <i> HIT </i>
                </h6>
                <p class="" style="font-family: 'Do Hyeon', sans-serif; color:gray; font-size:30px; margin-left:3%;">{{$article->content}}</p>

        </div>
        <div class="card-body" style="margin-left:3%; margin-bottom:3%;">
            <button class="btn btn-outline-primary"
                onclick="window.location='{{ url('board/edit_form')}}/{{$article->id }}'">수정</button>
            <button class="btn btn-outline-primary"
                onclick="window.location='{{ url('board/delete')}}/{{$article->id }}'">삭제</button>
            <a href="{{ url('board/list')}}" class="btn winter-neva-gradient" role="button" style="margin-left:40%;">목록으로</a>
        </div>
    </div>
</div>



@endsection
