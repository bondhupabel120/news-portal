@extends('front.master')

@section('title')
    Show Written
@endsection

@section('body')
    <div class="container">
        <div class="row pb-4">

            @foreach($others as $other)
            <div class="col-lg-4">
                <a href="{{ route('written-details',['id' => $other->id]) }}"><img class="img-fluid rounded" src="{{ asset($other->image) }}" alt="" style="height: 300px;width: 100%"/></a>
                <hr>
                <!-- Date/Time -->
                <p class="fa fa-calendar-times-o"> {{ $other->created_at->format('h:i:s a j F Y') }}</p>
                <br/>
                <a style="font: 22px 'Open Sans'" href="{{ route('written-details',['id' => $other->id]) }}">{{ $other->title }}</a>
                <br/>
                <a class="text-warning" style="font: 16px 'Open Sans'" href="{{ route('written-details',['id' => $other->id]) }}">Read more ->>></a>
                <br/>
                <a class="float-right text-success" style="font: 16px 'Open Sans'" href="{{ route('written-details',['id' => $other->id]) }}">Written By {!! $other->full_name !!}</a>
            </div>
            @endforeach

        </div>
    </div>
@endsection