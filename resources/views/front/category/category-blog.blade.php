@extends('front.master')

@section('title')
    {{ $categoryById->category_name }}
@endsection

@section('body')
        <div class="container">
            <div class="row">
                <!-- Editors Pick -->
                <div class="col-12 col-md-7 col-lg-12">

                    <div class="row">

                        <!-- Single Post -->
                        @foreach($blog_ones as $blog_one)
                            <div class="col-12 col-lg-3">
                                <div class="single-blog-post">
                                    <div class="post-thumb">
                                        <a href="{{ route('blog-details', ['id' => $blog_one->id, 'name' => $blog_one->blog_one_title ]) }}"><img class="img-fluid rounded" src="{{ asset($blog_one->blog_one_image) }}" alt="" style="height: 250px;width: 100%;"/></a>
                                    </div>
                                    <div class="post-meta">
                                        <div class="post-date fa fa-calendar-times-o"> {{ $blog_one->created_at->format('h:i:s a j F Y') }}</div>
                                    </div>
                                    <a style="font: bold 20px 'Open Sans'; color: #23272b" href="{{ route('blog-details', ['id' => $blog_one->id, 'name' => $blog_one->blog_one_title]) }}">{{ $blog_one->blog_one_title }}</a>
                                    <div class="post-data">
                                        <a href="{{ route('blog-details', ['id' => $blog_one->id, 'name' => $blog_one->blog_one_title ]) }}" class="post-title">
                                            <p>{{ $blog_one->blog_one_short_description }}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection