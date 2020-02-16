@extends('layouts.master')

@section('head')
@include('layouts.head')
<link rel="stylesheet" href="{{asset('css/create_form.css')}}" />
@endsection

@section('content')

    <div class="content col-md-8">
        <form action="{{ url('/store') }}" method="post">
            @csrf

            제목 : <input type="text" class="form-control" name="title" value="{{old('title')}}"> <br>
            @error('title')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror

            내용 : <textarea class="form-control"name="content" value="{{old('content')}}" rows="10"></textarea> <br>
            @error('content')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror
            
        <button type="submit" class="btn btn-info">등록하기</button>
        <button type="button" class="btn btn-secondary">목록으로</button>
        </form>
    </div>

@endsection
