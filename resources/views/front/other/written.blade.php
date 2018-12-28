@extends('front.master')

@section('title')
    Written
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-lg-8 pb-4">
                <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
                <p class="text-center text-primary" style="font: 20px 'Open Sans'">Write Your Written</p>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('new-user-written') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="full_name" class="form-control" placeholder="Full Name"/>
                                    <input type="hidden" name="id" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Address</label>
                                <div class="col-md-9">
                                    <textarea type="text" name="address" class="form-control" placeholder="Address"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Subject</label>
                                <div class="col-md-9">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Title</label>
                                <div class="col-md-9">
                                    <input type="text" name="title" class="form-control" placeholder="Title"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Image</label>
                                <div class="col-md-9">
                                    <input type="file" name="image" class="form-control" accept="image/*"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Description</label>
                                <div class="col-md-9">
                                    <textarea type="text" name="description" class="form-control" placeholder="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3"></label>
                                <div class="col-md-9 radio">
                                    <label><input type="hidden" name="publication_status" value="1"/></label>
                                    <label><input type="hidden" name="publication_status" value="0"/></label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="btn" id="resBtn" class="btn btn-success btn-block" value="Send">
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