<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('/') }}front/img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('/') }}front/style.css">
    <link rel="stylesheet" href="{{ asset('/') }}front/css/style.css">
    {{--For contact page--}}

</head>

<body>
<!-- ##### Header Area Start ##### -->
<header class="header-area pb-5">

    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="top-header-content d-flex align-items-center justify-content-between">
                        <!-- Logo -->
                        <div class="">
                            <a href="{{ route('/') }}"><img src="{{ asset('/') }}front/img/core-img/a.png" alt="" style="height: 100px;width: 120px"></a>
{{--                            <a href="{{ route('/') }}"><span class="logo-font-one">Future <span class="logo-font-two">Diganta</span></span><p class="logo-font-three">The Real Time News</p></a>--}}
                        </div>

                        <!-- Login Search Area -->
                        <div class="login-search-area d-flex align-items-center">
                            <!-- Login -->
                            <div class="login d-flex">

                                @if(Session::get('visitorId'))

                                        <li class="dropdown-item nav-item">
                                            @php( $image = Session::get('visitorImage'))
                                            @if($image)
                                                <a href=""><img src="{{ asset(Session::get('visitorImage')) }}" class="img-rounded" style="max-height: 55px;max-width: 50px;border-radius: 50%"></a>
                                            @else
                                                <a href=""><img src="{{ asset('/') }}front/default.png" class="img-rounded" style="max-height: 55px;max-width: 50px;border-radius: 50%"></a>
                                            @endif
                                        <a href="" class="dropdown-toggle nav-link" data-toggle="dropdown">{{ Session::get('visitorName') }}</a>

                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="#" class="dropdown-item text-black-50 nav-link" onclick="
                                            event.preventDefault();
                                            document.getElementById('visitorLogoutForm').submit();
                                            ">Logout</a></li>
                                        </ul>
                                        <form id="visitorLogoutForm" action="{{ route('visitor-logout') }}" method="POST">
                                            @csrf
                                        </form>

                                    </li>
                                @else
                                    <a href="{{ route('visitor-login') }}">Login</a>
                                    <a href="{{ route('sign-up') }}">Sign Up</a>
                                @endif
                            </div>
                            <!-- Search Form -->
                            <div class="search-form">

                                    <input type="hidden" id="token" value="{{ csrf_token() }}">
                                    <input type="text" onkeyup="searchAjax()" id="search_input" class="form-control" placeholder="Search">
                                    {{--<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>--}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="newspaper-main-menu" id="stickyMenu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="newspaperNav">

                    <!-- Logo -->
                    <div class="logo">
                        <a href="{{ route('/') }}"><img src="{{ asset('/') }}front/img/core-img/logo.png" alt=""></a>
                    </div>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="{{ route('/') }}">Home</a></li>
                                @foreach($categories as $category)
                                    <li class=""><a href="{{ route('category-blog', ['id' => $category->id, 'name' => $category->category_name]) }}">{{ $category->category_name }}</a></li>
                                @endforeach
                                <li><a href="#">Others</a>
                                    <ul class="dropdown">
                                        {{--<li><a href="#">Pictures</a></li>--}}
                                        <li><a href="{{ route('user-written') }}">Send Your Written</a></li>
                                        <li><a href="{{ route('show-written') }}">See Your Written</a></li>
                                        {{--<li><a href="about.html">About Us</a></li>--}}
                                        {{--<li><a href="contact.html">Contact</a></li>--}}
                                        {{--<li><a href="#">Dropdown</a>--}}
                                            {{--<ul class="dropdown">--}}
                                                {{--<li><a href="index.html">Home</a></li>--}}
                                                {{--<li><a href="catagories-post.html">Catagories</a></li>--}}
                                                {{--<li><a href="single-post.html">Single Articles</a></li>--}}
                                                {{--<li><a href="about.html">About Us</a></li>--}}
                                                {{--<li><a href="contact.html">Contact</a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                    </ul>
                                </li>
                                {{--<li><a href="#">Mega Menu</a>--}}
                                    {{--<div class="megamenu">--}}
                                        {{--<ul class="single-mega cn-col-4">--}}
                                            {{--<li class="title">Catagories</li>--}}
                                            {{--<li><a href="index.html">Home</a></li>--}}
                                            {{--<li><a href="catagories-post.html">Catagories</a></li>--}}
                                            {{--<li><a href="single-post.html">Single Articles</a></li>--}}
                                            {{--<li><a href="about.html">About Us</a></li>--}}
                                            {{--<li><a href="contact.html">Contact</a></li>--}}
                                        {{--</ul>--}}
                                        {{--<ul class="single-mega cn-col-4">--}}
                                            {{--<li class="title">Catagories</li>--}}
                                            {{--<li><a href="index.html">Home</a></li>--}}
                                            {{--<li><a href="catagories-post.html">Catagories</a></li>--}}
                                            {{--<li><a href="single-post.html">Single Articles</a></li>--}}
                                            {{--<li><a href="about.html">About Us</a></li>--}}
                                            {{--<li><a href="contact.html">Contact</a></li>--}}
                                        {{--</ul>--}}
                                        {{--<ul class="single-mega cn-col-4">--}}
                                            {{--<li class="title">Catagories</li>--}}
                                            {{--<li><a href="index.html">Home</a></li>--}}
                                            {{--<li><a href="catagories-post.html">Catagories</a></li>--}}
                                            {{--<li><a href="single-post.html">Single Articles</a></li>--}}
                                            {{--<li><a href="about.html">About Us</a></li>--}}
                                            {{--<li><a href="contact.html">Contact</a></li>--}}
                                        {{--</ul>--}}
                                        {{--<div class="single-mega cn-col-4">--}}
                                            {{--<!-- Single Featured Post -->--}}
                                            {{--<div class="single-blog-post small-featured-post d-flex">--}}
                                                {{--<div class="post-thumb">--}}
                                                    {{--<a href="#"><img src="{{ asset('/') }}front/img/bg-img/23.jpg" alt=""></a>--}}
                                                {{--</div>--}}
                                                {{--<div class="post-data">--}}
                                                    {{--<a href="#" class="post-catagory">Travel</a>--}}
                                                    {{--<div class="post-meta">--}}
                                                        {{--<a href="#" class="post-title">--}}
                                                            {{--<h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>--}}
                                                        {{--</a>--}}
                                                        {{--<p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<!-- Single Featured Post -->--}}
                                            {{--<div class="single-blog-post small-featured-post d-flex">--}}
                                                {{--<div class="post-thumb">--}}
                                                    {{--<a href="#"><img src="{{ asset('/') }}front/img/bg-img/24.jpg" alt=""></a>--}}
                                                {{--</div>--}}
                                                {{--<div class="post-data">--}}
                                                    {{--<a href="#" class="post-catagory">Politics</a>--}}
                                                    {{--<div class="post-meta">--}}
                                                        {{--<a href="#" class="post-title">--}}
                                                            {{--<h6>Augue semper congue sit amet ac sapien. Fusce consequat.</h6>--}}
                                                        {{--</a>--}}
                                                        {{--<p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li><a href="#">Politics</a></li>--}}
                                {{--<li><a href="#">Breaking News</a></li>--}}
                                {{--<li><a href="#">Business</a></li>--}}
                                {{--<li><a href="#">Technology</a></li>--}}
                                {{--<li><a href="#">Health</a></li>--}}
                                {{--<li><a href="#">Travel</a></li>--}}
                                {{--<li><a href="#">Sports</a></li>--}}
                                <li><a href="{{ route('user-contact') }}">Contact</a></li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->

<!-- ##### Hero Area Start ##### -->
{{--<div class="hero-area">--}}
    {{--<div class="container">--}}
        {{--<div class="row align-items-center">--}}
            {{--<div class="col-12 col-lg-8">--}}
                {{--<!-- Breaking News Widget -->--}}
                {{--<div class="breaking-news-area d-flex align-items-center">--}}
                    {{--<div class="news-title">--}}
                        {{--<p>Breaking News</p>--}}
                    {{--</div>--}}
                    {{--<div id="breakingNewsTicker" class="ticker">--}}
                        {{--<ul>--}}
                            {{--@foreach($breakings as $breaking)--}}
                            {{--<li><a href="#">{{ $breaking->add_breaking_news }}</a></li>--}}
                            {{--@endforeach--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<!-- Breaking News Widget -->--}}
                {{--<div class="breaking-news-area d-flex align-items-center mt-15">--}}
                    {{--<div class="news-title title2">--}}
                        {{--<p>International</p>--}}
                    {{--</div>--}}
                    {{--<div id="internationalTicker" class="ticker">--}}
                        {{--<ul>--}}
                            {{--@foreach($internationals as $international)--}}
                            {{--<li><a href="#">{{ $international->add_international_news }}</a></li>--}}
                            {{--@endforeach--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<!-- Hero Add -->--}}
            {{--<div class="col-12 col-lg-4">--}}
                {{--<div class="hero-add">--}}
                    {{--<a href="#"><img src="{{ asset('/') }}front/img/bg-img/hero-add.gif" alt=""></a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<!-- ##### Hero Area End ##### -->




<div id="mainBody">
    @yield('body')
</div>



<div id="searchBody" style="display: none;">
    @include('front.search-view')
</div>








<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">

    <!-- Main Footer Area -->
    <div class="main-footer-area">
        <div class="container">
            <div class="row">

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="footer-widget-area mt-80">
                        <!-- Footer Logo -->
                        <div class="logo">
                            {{--<a href="{{ route('/') }}"><img src="{{ asset('/') }}front/img/core-img/logo.png" alt=""></a>--}}
                            <a href="{{ route('/') }}"><span class="logo-font-one">Future <span class="logo-font-two">Diganta</span></span><p class="text-white">The Real Time News</p></a>
                        </div>
                        <!-- List -->
                        <ul class="list">
                            <li><a href="">bondhupabel@gmail.com</a></li>
                            <li><a href="">+8801621355849</a></li>
                            <li><a >107, Katasur, Mohammadpur, Dhaka-1207</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="footer-widget-area mt-80">
                        <!-- Title -->
                        <h4 class="widget-title">Categories</h4>
                        <!-- List -->
                        @foreach($category_categories as $category_category)
                            <li class=""><a href="{{ route('category-blog', ['id' => $category_category->id, 'name' => $category_category->category_name]) }}">{{ $category_category->category_name }}</a></li>
                        @endforeach
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="footer-widget-area mt-80">
                        <!-- Title -->
                        <h4 class="widget-title">Social</h4>
                        <!-- List -->
                        <ul class="list">
                            <li><a href="https://www.facebook.com/" class="fa fa-facebook-square fa-2x">/futurediganta</a></li>
                            <li><a href="https://twitter.com/" class="fa fa-twitter-square fa-2x">/futurediganta</a></li>
                            <li><a href="https://bd.linkedin.com/" class="fa fa-google-plus-square fa-2x">/futurediganta</a></li>
                            <li><a href="https://www.google.com/" class="fa fa-linkedin fa-2x">/futurediganta</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <br>

    <!-- Bottom Footer Area -->
    <div class="bottom-footer-area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Copywrite -->
                    <p class="text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by <a href="https://www.facebook.com/md.pabel.961" target="_blank"> <i class="fa fa-heart-o text-danger" aria-hidden="true"></i><span class="text-success"> Bondhu</span></a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area Start ##### -->

<!-- ##### All Javascript Files ##### -->
<!-- jQuery-2.2.4 js -->
<script src="{{ asset('/') }}front/js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="{{ asset('/') }}front/js/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="{{ asset('/') }}front/js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="{{ asset('/') }}front/js/plugins/plugins.js"></script>
<!-- Active js -->
<script src="{{ asset('/') }}front/js/active.js"></script>
<script src="{{ asset('/') }}front/js/script.js"></script>

{{--For contact page--}}

<script src="{{ asset('/') }}front/js/jquery/jquery-2.2.4.min.js"></script>


<script>


    function searchAjax() {


        var search_value = $("#search_input").val();
        var token = $("#token").val();


        if(search_value) {
            $("#mainBody").hide();
            $("#searchBody").show();
        }  else {
            $("#mainBody").show();
            $("#searchBody").hide();
        }


        $.ajax({
            type: "post",
            data: { search : search_value, _token: token},
            url: "{{ route("search-ajax") }}",
            dataType: 'html',
            success: function (s) {
                if(s) {
                    $("#searchResult").html(s);
                }

            }
        });
    }





</script>

</body>

</html>