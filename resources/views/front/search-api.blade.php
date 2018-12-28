<!-- Single Featured Post -->
@foreach($searches as $blog_one_one)
    <div class="col-12 col-lg-3">
        <div class="single-blog-post">
            <div class="post-thumb">
                <a href="{{ route('blog-details', ['id' => $blog_one_one->id, 'name' => $blog_one_one->blog_one_title ]) }}"><img class="img-fluid rounded" src="{{ asset($blog_one_one->blog_one_image) }}" alt="" style="height: 350px;width: 100%;"/></a>
            </div>
            <div class="post-meta">
                <div class="post-date fa fa-calendar-times-o" href="#"> {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $blog_one_one->created_at)->format('d-M-y') }}</div>
            </div>
            <div class="post-data">
                <a href="#" class="post-title">
                    <a style="font: bold 25px 'Open Sans'; color: #23272b" href="{{ route('blog-details', ['id' => $blog_one_one->id, 'name' => $blog_one_one->blog_one_title]) }}">{{ $blog_one_one->blog_one_title }}</a>
                </a>

            </div>
        </div>
    </div>
@endforeach


