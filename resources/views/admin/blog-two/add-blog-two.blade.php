@extends('admin.master')

@section('title')
    Add Blog-Two
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <br/>
            <div class="well">

                <h1 class="text-success text-center">{{ Session::get('message') }}</h1>

                <form action="{{ route('new-blog-two') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-3">Category Name</label>
                        <div class="col-md-9">
                            <select name="category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Blog-Two Title</label>
                        <div class="col-md-9">
                            <input type="text" name="blog_two_title" class="form-control"/>
                            <span class="text-danger">{{ $errors->has('blog_two_title') ? $errors->first('blog_two_title') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Blog Two Short Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="blog_two_short_description"></textarea>
                            <span class="text-danger">{{ $errors->has('blog_two_short_description') ? $errors->first('blog_two_short_description') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Blog Two Long Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="editor" name="blog_two_long_description"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Blog-Two Image</label>
                        <div class="col-md-9">
                            <input type="file" name="blog_two_image" accept="iamge/*"/>
                            <span class="text-danger">{{ $errors->has('blog_two_image') ? $errors->first('blog_two_image') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Publication status</label>
                        <div class="col-md-9 radio">
                            <label><input type="radio" name="publication_status" value="1"/> Published</label>
                            <label><input type="radio" name="publication_status" value="0"/> Unpublished</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Category Info" />
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection