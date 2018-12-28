{{--@extends('front.master')--}}

{{--@section('title')--}}
    {{--News--}}
{{--@endsection--}}

{{--@section('body')--}}
    {{--<!-- Page Content -->--}}
    {{--<div class="container">--}}

        {{--<!-- Page Heading/Breadcrumbs -->--}}

        {{--<div class="row col-md-12">--}}
            {{--<h2 class="mt-4 mb-3 col-md-8">{{ $blog_two->blog_two_title }}</h2>--}}

            {{--<!-- Post Content Column -->--}}
            {{--<div class="col-lg-8">--}}

                {{--<!-- Preview Image -->--}}
                {{--<img class="img-fluid rounded" src="{{ asset($blog_two->blog_two_image) }}" alt="" style="height: 350px;"/>--}}

                {{--<hr>--}}

                {{--<!-- Date/Time -->--}}
                {{--<p class="fa fa-calendar-times-o"> {{ $blog_two->created_at->format('h:i:s a j F Y') }}</p>--}}

                {{--<hr>--}}

                {{--<!-- Post Content -->--}}
                {{--<p class="lead">{!! $blog_two->blog_two_long_description !!}</p>--}}

                {{--<!-- Comments Form -->--}}
                {{--@if($visitorId = Session::get('visitorId'))--}}
                    {{--<div class="card my-4">--}}
                        {{--<h5 class="card-header">Leave a Comment:</h5>--}}
                        {{--<div class="card-body">--}}
                            {{--<form action="{{ route('new-comment-two') }}" method="POST">--}}
                                {{--@csrf--}}
                                {{--<div class="form-group">--}}
                                    {{--<input type="hidden" name="visitor_id" value="{{ $visitorId }}"/>--}}
                                    {{--<input type="hidden" name="blog_id" value="{{ $blog_two->id }}"/>--}}
                                    {{--<textarea class="form-control" name="comment" rows="3"></textarea>--}}
                                {{--</div>--}}
                                {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--@else--}}
                    {{--<div class="card my-4">--}}
                        {{--<div class="card-body">--}}
                            {{--<div class="card-title comment-one">If you want comment then please <a href="{{ route('visitor-login') }}" class="text-primary comment-one">Login</a> or <a href="{{ route('sign-up') }}" class="text-primary comment-one">Registration</a></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--@endif--}}
            {{--<!-- Single Comment -->--}}
                {{--@if(Session::get('visitorImage'))--}}
                    {{--@foreach($comments as $comment)--}}
                        {{--<div class="media mb-4">--}}
                            {{--<img class="d-flex mr-3 rounded-circle" src="{{ asset(Session::get('visitorImage')) }}" alt="" style="max-height: 55px;max-width: 50px;border-radius: 50%">--}}
                            {{--<div class="media-body">--}}
                                {{--<h5 class="mt-0 text-dark">{{ $comment->first_name.' '.$comment->last_name }}</h5>--}}
                                {{--<p>{{ $comment->comment }}</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                {{--@endforeach--}}
            {{--@endif--}}

            {{--<!-- Comment with nested comments -->--}}

            {{--</div>--}}

            {{--<!-- Sidebar Widgets Column -->--}}
            {{--<div class="col-md-4">--}}

                {{--<div class="row">--}}
                    {{--<div class="col-md-3">--}}

                    {{--</div>--}}
                    {{--<div class="col-md-9">--}}
                        {{--@foreach($blog_twos_extras as $blog_twos_extra)--}}
                        {{--<div class="single-blog-post style-2">--}}
                        {{--<div class="post-thumb">--}}
                        {{--<a href="#"><img class="img-fluid rounded" src="{{ asset($blog_twos_extra->blog_two_image) }}" alt="" style="height: 130px;width: 100%"></a>--}}
                        {{--</div>--}}
                        {{--<br>--}}
                        {{--<div class="post-meta">--}}
                        {{--<div class="post-date fa fa-calendar-times-o"><a href="#"> {{ $blog_twos_extra->created_at->format('h:i:s a j F Y') }}</a></div>--}}
                        {{--</div>--}}
                        {{--<a style="font: bold 15px 'Open Sans'; color: #23272b">{{ $blog_twos_extra->blog_two_title }}</a>--}}
                        {{--<div class="post-data">--}}
                        {{--<a href="#" class="post-title">--}}
                        {{--<p>{{ $blog_twos_extra->blog_two_short_description }}</p>--}}
                        {{--</a>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--@endforeach--}}
                        {{--@foreach($blog_twos_extras as $blog_twos_extra)--}}
                            {{--<div class="single-blog-post small-featured-post d-flex">--}}
                                {{--<div class="post-thumb">--}}
                                    {{--<a href="{{ route('blog-details-two', ['id' => $blog_twos_extra->id, 'name' => $blog_twos_extra->blog_two_title ]) }}"><img class="img-fluid rounded" src="{{ asset($blog_twos_extra->blog_two_image) }}" alt="" style="height: 80px; width: 100%"></a>--}}
                                {{--</div>--}}
                                {{--<div class="post-data">--}}
                                    {{--<div class="post-meta">--}}
                                        {{--<a style="font: bold 15px 'Open Sans'; color: #23272b" href="{{ route('blog-details-two', ['id' => $blog_twos_extra->id, 'name' => $blog_twos_extra->blog_two_title ]) }}">{{ $blog_twos_extra->blog_two_title }}</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--@endforeach--}}
                        {{--<br>--}}
                    {{--</div>--}}


                {{--</div>--}}


                {{--<!-- Side Widget -->--}}
                {{--<div class="card my-4">--}}
                {{--<h5 class="card-header">Side Widget</h5>--}}
                {{--<div class="card-body">--}}
                {{--You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!--}}
                {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}

        {{--</div>--}}
        {{--<!-- /.row -->--}}

    {{--</div>--}}
    {{--<!-- /.container -->--}}
{{--@endsection--}}