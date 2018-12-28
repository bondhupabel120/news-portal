@extends('admin.master')

@section('title')
    Edit Breaking News
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <br/>
            <div class="well">

                <h1 class="text-success text-center">{{ Session::get('message') }}</h1>

                <form action="{{ route('update-breaking-news') }}" method="POST" class="form-horizontal">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-3">Add Breaking News</label>
                        <div class="col-md-9">
                            <input type="text" name="add_breaking_news" value="{{ $breaking->add_breaking_news }}" class="form-control" placeholder="Breaking News"/>
                            <input type="hidden" name="id" value="{{ $breaking->id }}" class="form-control" />
                            {{--<span class="text-danger">{{ $errors->has('category_name') ? $errors->first('category_name') : ' ' }}</span>--}}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Publication status</label>
                        <div class="col-md-9 radio">
                            <label><input type="radio" {{ $breaking->publication_status == 1 ? 'checked' : ' ' }} name="publication_status" value="1"/> Published</label>
                            <label><input type="radio" {{ $breaking->publication_status == 0 ? 'checked' : ' ' }} name="publication_status" value="0"/> Unpublished</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Update News" />
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection