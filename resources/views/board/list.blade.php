<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


</head>

<body>

    <div class="content">
        <table>
            <tr>
                <th>Title</th>
                <th>Content
                <th>
            <tr>
                @foreach($articles as $article)
            <tr>
                <td><a href="{{ url('board/view') }}/{{ $article->id }}">{{$article->title}}</a></td>
                <td>{{$article->content}}</td>
            </tr>

            @endforeach
        </table>
        <button onclick="window.location='{{url('board/create_form')}}'">글쓰기</button>
    </div>
    </div>
</body>

</html>
