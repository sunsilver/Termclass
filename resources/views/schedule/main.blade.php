<!DOCTYPE html>
<html lang="en">

<head>
    @include('schedule.mdb')

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('css/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('css/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset('css/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="asset{{('js/resume.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/calendar.css')}}">

    <link href="{{asset('css/resume.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/blog.css')}}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Pacifico|Rubik+Mono+One&display=swap" rel="stylesheet">

</head>


<body style="padding:0;">

    <div class="container" style="">

        <section class="Calender">
        <div class="title" style="">Schedule Calender</div>
            @include('schedule.index')
        </section>

    </div>

</body>

</html>
