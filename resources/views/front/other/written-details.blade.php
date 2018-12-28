@extends('front.master')

@section('title')
    Written Details
@endsection

@section('body')
    <div class="container">
        <div class="row pb-4">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <a href=""><img class="img-fluid rounded" src="{{ asset($other->image) }}" alt="" style="height: 350px;width: 100%"/></a>
                <hr>
                <!-- Date/Time -->
                <p class="fa fa-calendar-times-o"> {{ $other->created_at->format('h:i:s a j F Y') }}</p>
                <br/>
                <a style="font: 22px 'Open Sans'" href="">{{ $other->title }}</a>
                <p class="lead pt-3">{!! $other->description !!}</p>
                <a class="float-right text-success" style="font: 16px 'Open Sans'" href="">Written By {!! $other->full_name !!}</a>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
@endsection