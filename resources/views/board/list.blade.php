@extends('layouts.master')

@section('head')
<link rel="stylesheet" href="{{asset('css/list.css')}}" />
<!-- <link rel="stylesheet" href="{{asset('css/board.css')}}" /> -->
<link rel="stylesheet" href="{{asset('css/theme.css')}}" />
<link rel="stylesheet" href="{{asset('css/calendar.css')}}" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.13/css/mdb.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Pacifico|Rubik+Mono+One&display=swap"
    rel="stylesheet">

@include('layouts.head')
@include('schedule.mdb')
@endsection



@section('content')


<div class="content">
    <div class="title">Diary</div>
    <div class="table-responsive table--no-card m-b-40" style="margin-top:4%;">
        <table class="table table-borderless table-striped table-earning">
            <thread>
                <tr style="background-color: #0f62a7;">
                    <th style="color:white">Title</th>
                    <th style="color:white">Content</th>
                    <th style="color:white">Date</th>
                </tr>
                @foreach($articles as $article)
                <tr>
                    <td><a href="{{ url('board/view') }}/{{ $article->id }}">{{$article->title}}</a></td>
                    <td>{{$article->content}}</td>
                    <td>{{$article->created_at}}</td>
                </tr>

                @endforeach
                </tread>
        </table>
    </div>
    <div class="bt">
    <button type="button" class="btn juicy-peach-gradient"
            onclick="window.location='{{url('board/create_form')}}'">글쓰기</button>
    </div>
    
</div>
<div class="photo" style="margin-top:-20%;">
        <img src="{{URL::asset('/image/people.png')}}" style="height:200x;" />
    </div>

@endsection
