@extends('layouts.master')

@section('head')
@include('layouts.head')
<link rel="stylesheet" href="{{asset('css/create_form.css')}}" />
@endsection

@section('content')

    <div class="content col-md-8">
        <form action="{{ url('/update') }}/ {{ $article->id }}" method="post">
        
            @csrf
            <!-- value는 폼 안에 있는 내용 -->
            제목 : <input type="text" class="form-control" name="title" value="{{$article->title}}"> <br>
            @error('title')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror
            <!-- textarea는 value가 안먹힘 -->
            내용 : <textarea name="content" class="form-control" value="{{old('content')}}" rows="10">{{$article->content}}</textarea> <br>
            @error('content')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror
            
            <button type="submit" class="btn btn-info">등록하기</button>
        </form>
    </div>

    @endsection
