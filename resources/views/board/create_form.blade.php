<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<body>

    <div class="content">
        <form action="{{ url('/store') }}" method="post">
            @csrf

            제목 : <input type="text" name="title" value="{{old('title')}}"> <br>
            @error('title')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror

            내용 : <textarea name="content" value="{{old('content')}}"></textarea> <br>
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
