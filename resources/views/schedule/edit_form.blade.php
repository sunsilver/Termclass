@extends('layouts.master')

@section('head')
@include('layouts.head')
@endsection

@section('content')

    <div class="content col-md-8">
        <form action="{{ route('tasks.edit', $task) }}" method="post">
        
            @csrf
            <!-- value는 폼 안에 있는 내용 -->
            Title : <input type="text" class="form-control" name="title" value="{{$task->title}}"> <br>
            @error('title')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror
            <!-- textarea는 value가 안먹힘 -->
            Content : <textarea name="content" class="form-control" value="{{old('content')}}" rows="10">{{$article->content}}</textarea> <br>
            @error('content')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror
            
            <button type="submit" class="btn btn-info">등록하기</button>
        </form>
    </div>

    @endsection
