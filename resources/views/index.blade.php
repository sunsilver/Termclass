@extends('layouts.master')

@section('head')
@include('layouts.head')
<link href="https://fonts.googleapis.com/css?family=Poppins:900" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{asset('css/templatemo-softy-pinko.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">
@endsection

@section('content')


<!-- ***** Home Parallax Start ***** -->
<section class="mini" id="work-process" style="height:100%;">
    <div class="mini-content" style="height:100%;">
        <div class="container" style="height:100%;">
            <div class="row">
                <div class="offset-lg-3 col-lg-6">
                    <div class="info">
                        <h3 style="color:navy; font-weight:bolder;">WORK PLACE</h3>

                    </div>
                </div>
            </div>

            <!-- ***** Mini Box Start ***** -->
            <div class="row">
                <div class="col-6" style="margin-left:1%; margin-top:6%;">
                    <a href="{{ url('board/list') }}" class="mini-box" style="background-color:#0f62a7;">
                        <i><img src="{{asset('image/diary.png')}}" style="height:40px;" alt=""></i>
                        <strong style="color:white;">Blog</strong>
                    </a>
                </div>
                <div class="col-6" style="margin-left:1%; margin-top:6%;">
                    <a href="{{ url('schedule.main') }}" class="mini-box" style="background-color:#0f62a7;">
                        <i><img src="{{asset('image/event.png')}}" style="height:40px;" alt=""></i>
                        <strong style="color:white;">Schedule</strong>
                    </a>
                </div>

            </div>
            <!-- ***** Mini Box End ***** -->
        </div>
    </div>
    <h3 class="features-title" style="align-items: center;
display: flex;
justify-content: center; color:#0f62a7;">A dream written down with a date becomes a goal.<br>
    A goal broken down becomes a plan.<br>
    A plan backed by action makes your dream come true.

    – Greg S. Reid</h5>
</section>


</div>

<!-- ***** Home Parallax End ***** -->


@endsection

@section('footer')

<!-- Bootstrap -->
<script src="{{asset('js/popper.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- Plugins -->
<script src="{{asset('js/scrollreveal.min.js')}}"></script>
<script src="{{asset('js/waypoints.min.js')}}"></script>
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/imgfix.min.js')}}"></script>


@endsection
