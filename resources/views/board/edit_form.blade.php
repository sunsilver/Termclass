<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<body>

    <div class="content">
        <form action="{{ url('/update') }}/ {{ $article->id }}" method="post">
        
            @csrf
            <!-- value는 폼 안에 있는 내용 -->
            제목 : <input type="text" name="title" value="{{$article->title}}"> <br>
            @error('title')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror
            <!-- textarea는 value가 안먹힘 -->
            내용 : <textarea name="content" value="{{old('content')}}">{{$article->content}}</textarea> <br>
            @error('content')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror
            
            <input type="submit" value="저장">
        </form>
    </div>

</body>

</html>
