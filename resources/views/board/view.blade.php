<!DOCTYPE html>
<html>
<body>

<h1>{{$article->title}}</h1>

<p>{{$article->content}}</p>
<button onclick="window.location='{{ url('board/edit_form')}}/{{$article->id }}'">수정</button>
<button onclick="window.location='{{ url('board/delete')}}/{{$article->id }}'">삭제</button>

</body>
</html>