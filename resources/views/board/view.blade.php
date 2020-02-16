@extends('layouts.master')

@section('head')
@include('layouts.head')
<link rel="stylesheet" href="{{asset('css/view.css')}}" />
@endsection

@section('content')

<div class="container col-md-6">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-3">{{$article->title}}</h4>
            <h6 class="card-subtitle text-muted mb-4">
                <i class="far fa-user"></i> ID
                ·
                <i class="far fa-clock"></i> CREAT_DATE
                ·
                <i class="fas fa-align-justify"></i> HIT
            </h6>
            <p class="card-text">{{$article->content}}</p>
        </div>
        <div class="card-body">
        <button class="btn btn-outline-secondary" onclick="window.location='{{ url('board/edit_form')}}/{{$article->id }}'">수정</button>
        <button class="btn btn-outline-secondary" onclick="window.location='{{ url('board/delete')}}/{{$article->id }}'">삭제</button>
        </div>
        <div class="card-body">
            <a href="{{ url('board/list')}}" class="btn btn-info" role="button">목록으로</a>
        </div>
    </div>
</div>



@endsection
