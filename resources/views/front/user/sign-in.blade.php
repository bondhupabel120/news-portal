@extends('front.master')

@section('title')
    Login
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-2">

            </div>

            <div class="col-lg-8 pb-4">
                <p class="text-center text-primary" style="font: 20px 'Open Sans'">Please Login</p>
                <h3 class="text-danger text-center">{{ Session::get('message') }}</h3>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('visitor-sign-in') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Email Address</label>
                                <div class="col-md-9">
                                    <input type="text" name="email_address" class="form-control" placeholder="Email Address"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="text" name="password" class="form-control" placeholder="Password"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="btn" class="btn btn-success btn-block" value="Login">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-2">

            </div>
        </div>
    </div>
@endsection