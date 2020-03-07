@extends('layouts.master')

@section('head')
@include('layouts.head')
@endsection

@section('content')

<form action="{{ route('tasks.show', $task) }}" method="post">

<div class="container col-md-6">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-3">Title : {{$task->title}}</h4>
            <h6 class="card-subtitle text-muted mb-4">

                <i class="far fa-clock"></i>DATE : {{$task->date}}


            <p class="card-text">contetn : {{$task->content}}</p>
        </div>
        <div class="card-body">

        <form action="{{ route('tasks.edit', $task) }}" method="post" id="edit">
        <!-- @method('EDIT') -->
        @csrf
        <button type="submit" class="btn btn-outline-secondary" onclick="document.getElementById('edit').submit()">수정</button>
        </form>

        <form action="{{ route('tasks.destroy', $task) }}" method="post" id="delete">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-outline-secondary" onclick="document.getElementById('delete').submit()">삭제</button>
        </form>
        
        </div>
        <div class="card-body">
            <a href="{{ url('schedule.main')}}" class="btn btn-info" role="button">목록으로</a>
        </div>
    </div>
</div>

</form>

@endsection
