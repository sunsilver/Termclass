@extends('layouts.master')

@section('head')
<link rel="stylesheet" href="{{asset('css/list.css')}}" />
<link rel="stylesheet" href="{{asset('css/board.css')}}" />
@include('layouts.head')
@endsection



@section('content')

    <div class="content">
        <table class ="table table-bordered">
            <tr>
                <th>Title</th>
                <th>Content
            <tr>
                @foreach($articles as $article)
            <tr>
                <td><a href="{{ url('board/view') }}/{{ $article->id }}">{{$article->title}}</a></td>
                <td>{{$article->content}}</td>
            </tr>

            @endforeach
        </table>
<div class="button">
        <button type="button" class="btn btn-secondary" onclick="window.location='{{url('board/create_form')}}'">글쓰기</button>
</div>
    </div>
</body>

<div id="background-wrap" >
    <div class="bubble x1"></div>
    <div class="bubble x2"></div>
    <div class="bubble x3"></div>
    <div class="bubble x4"></div>
    <div class="bubble x5"></div>
    <div class="bubble x6"></div>
    <div class="bubble x7"></div>
    <div class="bubble x8"></div>
    <div class="bubble x9"></div>
    <div class="bubble x10"></div>
</div>

@endsection