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

</head>


<body id="page-top">

    <div class="container">

        <section class="Calender" id="openMarket">
            <h3 class="openMarket mb-1">Schedule Calender</h3>
            @include('schedule.index')
        </section>

        <section class="Calender" id="openMarket">
            <h3 class="openMarket mb-1">Schedule Add</h3>
            @include('schedule.add')
        </section>


    </div>

</body>

</html>
