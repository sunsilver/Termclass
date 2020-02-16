@extends('layouts.master')

@section('head')
@include('layouts.head')

<link rel="stylesheet" href="{{asset('css/style.css')}}" />

@endsection

@section('header')
<body class="home blog">
        <div class="doc-loader"></div>
        <div class="content-1170 header-holder center-relative">

            <div class="header-menu">
                <div class="toggle-holder relative">
                    <div id="toggle">
                        <div class="one"></div>
                        <div class="two"></div>
                        <div class="three"></div>
                    </div>
                </div>

                <nav id="header-main-menu" class="big-menu">
                    <ul class="main-menu sm sm-clean">
                        <li><a href="index.html" class="current">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="about2.html">About 2</a></li>
                        <li><a href="about3.html">About 3</a></li>
                        <li><a href="contact.html">Contact</a>
                            <ul class="sub-menu">
                                <li><a href="contact2.html">Contact + Map</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>


        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.smartmenus.min.js"></script>
        <script type="text/javascript" src="js/queryloader2.min.js"></script>
        <script type="text/javascript" src="js/jquery.carouFredSel-6.0.0-packed.js"></script>
        <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
        <script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>

    </body>
@endsection
