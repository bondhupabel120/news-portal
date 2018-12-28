@extends('front.master')

@section('title')
    Sign Up
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-2">

            </div>

            <div class="col-lg-8 pb-4">
                <p class="text-center text-primary" style="font: 20px 'Open Sans'">Please Register</p>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('new-sign-up') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">First Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="first_name" class="form-control" placeholder="First Name"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Last Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="last_name" class="form-control" placeholder="Last Name"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Email Address</label>
                                <div class="col-md-9">
                                    <input type="text" name="email_address" class="form-control" placeholder="Email Address" onblur="emailCheck(this.value);"/>
                                    <span id="res" class="text-success"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="text" name="password" class="form-control" placeholder="Password"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Phone Number</label>
                                <div class="col-md-9">
                                    <input type="text" name="phone_number" class="form-control" placeholder="Phone Number"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Image</label>
                                <div class="col-md-9">
                                    <input type="file" name="image" class="form-control" accept="image/*"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="btn" id="resBtn" class="btn btn-success btn-block" value="Register">
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