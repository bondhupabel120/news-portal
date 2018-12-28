@extends('front.master')

@section('title')
    Home
@endsection

@section('body')
    <!-- ##### Featured Post Area Start ##### -->
    <div class="featured-post-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-8">
                    <div class="row">

                        <!-- Single Featured Post -->
                        @foreach($blog_one_ones as $blog_one_one)
                        <div class="col-12 col-lg-7">
                            <div class="single-blog-post featured-post">
                                <div class="post-thumb">
                                    <a href="{{ route('blog-details', ['id' => $blog_one_one->id, 'name' => $blog_one_one->blog_one_title ]) }}"><img class="img-fluid rounded" src="{{ asset($blog_one_one->blog_one_image) }}" alt="" style="height: 350px;width: 100%;"/></a>
                                </div>
                                <div class="post-meta">
                                    <div class="post-date fa fa-calendar-times-o" href="#"> {{ $blog_one_one->created_at->format('h:i:s a j F Y') }}</div>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-title">
                                        <a style="font: bold 25px 'Open Sans'; color: #23272b" href="{{ route('blog-details', ['id' => $blog_one_one->id, 'name' => $blog_one_one->blog_one_title]) }}">{{ $blog_one_one->blog_one_title }}</a>
                                    </a>
                                    <div class="post-meta pt-3">
                                        <a href="{{ route('blog-details', ['id' => $blog_one_one->id, 'name' => $blog_one_one->blog_one_title]) }}" class="post-title">
                                            <p>{{ $blog_one_one->blog_one_short_description }}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="col-12 col-lg-5">
                            <!-- Single Featured Post -->
                            @foreach($blog_one_twos as $blog_one_two)
                            <div class="single-blog-post featured-post-2">
                                <div class="post-thumb">
                                    <a href="{{ route('blog-details', ['id' => $blog_one_two->id, 'name' => $blog_one_two->blog_one_title ]) }}"><img class="img-fluid rounded" src="{{ asset($blog_one_two->blog_one_image) }}" alt="" style="height: 200px;width: 100%;"/></a>
                                </div>
                                <div class="post-meta">
                                    <div class="post-date fa fa-calendar-times-o" href="#"> {{ $blog_one_two->created_at->format('h:i:s a j F Y') }}</div>
                                </div>
                                <div class="post-data">
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <a style="font: bold 20px 'Open Sans'; color: #23272b" href="{{ route('blog-details', ['id' => $blog_one_two->id, 'name' => $blog_one_two->blog_one_title]) }}">{{ $blog_one_two->blog_one_title }}</a>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Featured Post -->
                    @foreach($blog_one_threes as $blog_one_three)
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <a href="{{ route('blog-details', ['id' => $blog_one_three->id, 'name' => $blog_one_three->blog_one_title ]) }}"><img class="img-fluid rounded" src="{{ asset($blog_one_three->blog_one_image) }}" alt="" style="height: 80px;width: 100%;"/></a>
                        </div>
                        <div class="post-data">
                            <div class="post-meta">
                                <a href="#" class="post-title">
                                    <a style="font: 20px 'Open Sans'; color: #23272b" href="{{ route('blog-details', ['id' => $blog_one_three->id, 'name' => $blog_one_three->blog_one_title]) }}">{{ $blog_one_three->blog_one_title }}</a>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Featured Post Area End ##### -->

    <!-- ##### Editorial Post Area Start ##### -->
    <div class="editors-pick-post-area section-padding-80-50">
        <div class="container">
            <div class="row">
                <!-- Editors Pick -->
                <div class="col-12 col-md-7 col-lg-9">
                    <div class="section-heading">
                        <h6>News</h6>
                    </div>

                    <div class="row">

                        <!-- Single Post -->
                        @foreach($blog_ones as $blog_one)
                        <div class="col-12 col-lg-4">
                            <div class="single-blog-post">
                                <div class="post-thumb">
                                    <a href="{{ route('blog-details', ['id' => $blog_one->id, 'name' => $blog_one->blog_one_title ]) }}"><img class="img-fluid rounded" src="{{ asset($blog_one->blog_one_image) }}" alt="" style="height: 250px;width: 100%;"/></a>
                                </div>
                                <div class="post-meta">
                                    <div class="post-date fa fa-calendar-times-o" href="#"> {{ $blog_one->created_at->format('h:i:s a j F Y') }}</div>
                                </div>
                                <hr/>
                                <a style="font: bold 20px 'Open Sans'; color: #23272b" href="{{ route('blog-details', ['id' => $blog_one->id, 'name' => $blog_one->blog_one_title]) }}">{{ $blog_one->blog_one_title }}</a>
                                <div class="post-data">
                                    <a href="{{ route('blog-details', ['id' => $blog_one->id, 'name' => $blog_one->blog_one_title]) }}" class="post-title">
                                        <p>{{ $blog_one->blog_one_short_description }}</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>

                <!-- World News -->
                <div class="col-12 col-md-5 col-lg-3">
                    <div class="section-heading">
                        <h6>News</h6>
                    </div>

                    {{--<!-- Single Post -->--}}
                    {{--@foreach($blog_twos as $blog_two)--}}
                    {{--<div class="single-blog-post style-2">--}}
                        {{--<div class="post-thumb">--}}
                            {{--<a href="{{ route('blog-details-two', ['id' => $blog_two->id, 'name' => $blog_two->blog_two_title ]) }}"><img class="img-fluid rounded" src="{{ asset($blog_two->blog_two_image) }}" alt="" style="height: 130px;width: 100%"></a>--}}
                        {{--</div>--}}
                        {{--<div class="post-meta">--}}
                            {{--<div class="post-date fa fa-calendar-times-o"><a href="#"> {{ $blog_two->created_at->format('h:i:s A j F Y') }}</a></div>--}}
                        {{--</div>--}}
                        {{--<a style="font: bold 15px 'Open Sans'; color: #23272b" href="{{ route('blog-details-two', ['id' => $blog_two->id, 'name' => $blog_two->blog_two_title]) }}">{{ $blog_two->blog_two_title }}</a>--}}
                        {{--<div class="post-data">--}}
                            {{--<a href="{{ route('blog-details-two', ['id' => $blog_two->id, 'name' => $blog_two->blog_two_title]) }}" class="post-title">--}}
                                {{--<p>{{ $blog_two->blog_two_short_description }}</p>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--@endforeach--}}

                <!-- Single Post -->
                    @foreach($blog_one_fours as $blog_one_four)
                    <div class="single-blog-post style-2">
                        <div class="post-thumb">
                            <a href="{{ route('blog-details', ['id' => $blog_one_four->id, 'name' => $blog_one_four->blog_one_title ]) }}"><img class="img-fluid rounded" src="{{ asset($blog_one_four->blog_one_image) }}" alt="" style="height: 130px;width: 100%"></a>
                        </div>
                        <div class="post-meta">
                            <div class="post-date fa fa-calendar-times-o"><a href="#"> {{ $blog_one_four->created_at->format('h:i:s A j F Y') }}</a></div>
                        </div>
                        <br>
                        <a style="font: bold 15px 'Open Sans'; color: #23272b" href="{{ route('blog-details', ['id' => $blog_one_four->id, 'name' => $blog_one_four->blog_one_title]) }}">{{ $blog_one_four->blog_one_title }}</a>
                    </div>
                        <hr/>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- ##### Editorial Post Area End ##### -->

    <!-- ##### Video Post Area Start ##### -->
    {{--<div class="video-post-area bg-img bg-overlay" style="background-image: url({{ asset('/') }}front/img/bg-img/bg1.jpg);">--}}
        {{--<div class="container">--}}
            {{--<div class="row justify-content-center">--}}
                {{--<!-- Single Video Post -->--}}
                {{--<div class="col-12 col-sm-6 col-md-4">--}}
                    {{--<div class="single-video-post">--}}
                        {{--<img src="{{ asset('/') }}front/img/bg-img/video1.jpg" alt="">--}}
                        {{--<!-- Video Button -->--}}
                        {{--<div class="videobtn">--}}
                            {{--<a href="https://www.youtube.com/watch?v=eCWZjiK1J5o" class="videoPlayer"><i class="fa fa-play" aria-hidden="true"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<!-- Single Video Post -->--}}
                {{--<div class="col-12 col-sm-6 col-md-4">--}}
                    {{--<div class="single-video-post">--}}
                        {{--<img src="{{ asset('/') }}front/img/bg-img/video2.jpg" alt="">--}}
                        {{--<!-- Video Button -->--}}
                        {{--<div class="videobtn">--}}
                            {{--<a href="https://www.youtube.com/watch?v=NrmMk1Myrxc" class="videoPlayer"><i class="fa fa-play" aria-hidden="true"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<!-- Single Video Post -->--}}
                {{--<div class="col-12 col-sm-6 col-md-4">--}}
                    {{--<div class="single-video-post">--}}
                        {{--<img src="{{ asset('/') }}front/img/bg-img/video3.jpg" alt="">--}}
                        {{--<!-- Video Button -->--}}
                        {{--<div class="videobtn">--}}
                            {{--<a href="https://www.youtube.com/watch?v=D3TOzNHsSok" class="videoPlayer"><i class="fa fa-play" aria-hidden="true"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!-- ##### Video Post Area End ##### -->

    <!-- ##### Popular News Area Start ##### -->
    <div class="popular-news-area section-padding-80-50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="section-heading">
                        <h6>Popular News</h6>
                    </div>

                    <div class="row">

                        <!-- Single Post -->
                        @foreach($popular_blogs as $popular_blog)
                        <div class="col-12 col-md-6">
                            <div class="single-blog-post style-3">
                                <div class="post-thumb">
                                    <a href="{{ route('blog-details', ['id' => $popular_blog->id, 'name' => $popular_blog->blog_one_title ]) }}"><img class="img-fluid rounded" src="{{ asset($popular_blog->blog_one_image) }}" alt="" style="height: 250px;width: 100%;"/></a>
                                </div>
                                <div class="post-meta">
                                    <div class="post-date fa fa-calendar-times-o" href="#"> {{ $popular_blog->created_at->format('h:i:s a j F Y') }}</div>
                                </div>
                                <hr/>
                                <a style="font: bold 20px 'Open Sans'; color: #23272b" href="{{ route('blog-details', ['id' => $popular_blog->id, 'name' => $popular_blog->blog_one_title]) }}">{{ $popular_blog->blog_one_title }}</a>
                                <div class="post-data">
                                    <a href="{{ route('blog-details', ['id' => $popular_blog->id, 'name' => $popular_blog->blog_one_title]) }}" class="post-title">
                                        <p>{{ $popular_blog->blog_one_short_description }}</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        {{--@foreach($popular_blog_twos as $popular_blog_two)--}}
                        {{--<div class="col-12 col-md-6">--}}
                            {{--<div class="single-blog-post style-3">--}}
                                {{--<div class="post-thumb">--}}
                                    {{--<a href="{{ route('blog-details-two', ['id' => $popular_blog_two->id, 'name' => $popular_blog_two->blog_one_title ]) }}"><img  src="{{ asset($popular_blog_two->blog_two_image) }}" alt="" style="height: 250px;width: 100%;"/></a>--}}
                                {{--</div>--}}
                                {{--<div class="post-meta">--}}
                                    {{--<div class="post-date fa fa-calendar-times-o" href="#"> {{ $popular_blog_two->created_at->format('h:i:s a j F Y') }}</div>--}}
                                {{--</div>--}}
                                {{--<a style="font: bold 20px 'Open Sans'; color: #23272b" href="{{ route('blog-details-two', ['id' => $popular_blog_two->id, 'name' => $popular_blog_two->blog_two_title]) }}">{{ $popular_blog_two->blog_two_title }}</a>--}}
                                {{--<div class="post-data">--}}
                                    {{--<a href="{{ route('blog-details', ['id' => $popular_blog_two->id, 'name' => $popular_blog_two->blog_two_title]) }}" class="post-title">--}}
                                        {{--<p>{{ $popular_blog_two->blog_two_short_description }}</p>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--@endforeach--}}

                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="section-heading text-center">
                        <h6 style="border-radius: 20px">Membership Form</h6>
                    </div>
                    <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
                    <div class="card bg-dark">
                        <div class="card-body">
                            <form action="{{ route('new-member') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input type="text" name="first_name" class="form-control" required placeholder="First Name"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input type="text" name="last_name" class="form-control" required placeholder="Last Name"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input type="text" name="father_name" class="form-control" required placeholder="Father Name"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input type="text" name="mother_name" class="form-control" placeholder="Mother Name"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input type="text" name="institute_name" class="form-control" required placeholder="Institute Name"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input type="text" name="class" class="form-control" required placeholder="Class"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input type="text" name="roll" class="form-control" placeholder="Roll"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input type="text" name="present_address" class="form-control" placeholder="Present Address"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input type="text" name="permanent_address" class="form-control" placeholder="Permanent Address"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input type="text" name="mobile" class="form-control" placeholder="Mobile Number"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input type="email" name="email" class="form-control" placeholder="Email Address"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input type="text" name="facebook" class="form-control" placeholder="Facebook"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input type="submit" name="btn" class="btn btn-success btn-block" value="Register">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Popular News Area End ##### -->

    <!-- ##### Footer Add Area Start ##### -->
    <div class="footer-add-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="footer-add">
                        <!-- Partner Section -->
                        <h2 class="text-center text-danger">Our Media Partner</h2>
                        <hr/>
                        <div style="margin-bottom: -40px">
                            <div class="row m-auto">

                                <div class="col-md-2 col-lg-2 col-xl-2" style="height: 180px">
                                    <div id="mySlider-3" class="carousel slide-fade" data-ride="carousel" data-interval="3000">
                                        <ol class="carousel-indicators"></ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="front/images/priyo.png"  alt="" class="img-responsive-two"/>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="front/images/admire.png"  alt="" class="img-responsive-two"/>

                                            </div>
                                            <div class="carousel-item">
                                                <img src="front/images/priyo.png"  alt="" class="img-responsive-two"/>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="front/images/dbc.png"  alt="" class="img-responsive-two"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2 col-lg-2 col-xl-2" style="height: 180px">
                                    <div id="mySlider-3" class="carousel slide-fade" data-ride="carousel" data-interval="3000">
                                        <ol class="carousel-indicators"></ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="front/images/royel.png"  alt="" class="img-responsive-two"/>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="front/images/ger.png"  alt="" class="img-responsive-two"/>

                                            </div>
                                            <div class="carousel-item">
                                                <img src="front/images/bitm.png"  alt="" class="img-responsive-two"/>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="front/images/es.png"  alt="" class="img-responsive-two"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2 col-lg-2 col-xl-2" style="height: 180px">
                                    <div id="mySlider-3" class="carousel slide-fade" data-ride="carousel" data-interval="5000">
                                        <ol class="carousel-indicators"></ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="front/images/bdcapital.png"  alt="" class="img-responsive-two"/>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="front/images/miyako.jpg"  alt="" class="img-responsive-two"/>

                                            </div>
                                            <div class="carousel-item">
                                                <img src="front/images/design.png"  alt="" class="img-responsive-two"/>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="front/images/sta.png"  alt="" class="img-responsive-two"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2 col-lg-2 col-xl-2" style="height: 180px">
                                    <div id="mySlider-3" class="carousel slide-fade" data-ride="carousel" data-interval="3000">
                                        <ol class="carousel-indicators"></ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="front/images/pepsico.png"  alt="" class="img-responsive-two"/>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="front/images/ger.png"  alt="" class="img-responsive-two"/>

                                            </div>
                                            <div class="carousel-item">
                                                <img src="front/images/glo.png"  alt="" class="img-responsive-two"/>
                                            </div>
                                            {{--<div class="carousel-item">--}}
                                                {{--<img src="front/images/iom.jpg"  alt="" class="img-responsive-two"/>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2 col-lg-2 col-xl-2" style="height: 180px">
                                    <div id="mySlider-3" class="carousel slide-fade" data-ride="carousel" data-interval="3000">
                                        <ol class="carousel-indicators"></ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="front/images/pepsico.png"  alt="" class="img-responsive-two"/>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="front/images/deko.png"  alt="" class="img-responsive-two"/>

                                            </div>
                                            <div class="carousel-item">
                                                <img src="front/images/admire.png"  alt="" class="img-responsive-two"/>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="front/images/deko.png"  alt="" class="img-responsive-two"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2 col-lg-2 col-xl-2" style="height: 180px">
                                    <div id="mySlider-3" class="carousel slide-fade" data-ride="carousel" data-interval="3000">
                                        <ol class="carousel-indicators"></ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="front/images/bdcapital.png"  alt="" class="img-responsive-two"/>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="front/images/mybd.png"  alt="" class="img-responsive-two"/>

                                            </div>
                                            <div class="carousel-item">
                                                <img src="front/images/tour.png"  alt="" class="img-responsive-two"/>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="front/images/creative.png"  alt="" class="img-responsive-two"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Footer Add Area End ##### -->
@endsection