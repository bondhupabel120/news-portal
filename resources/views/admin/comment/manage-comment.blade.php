@extends('admin.master')

@section('title')
    Manage Comment
@endsection

@section('body')
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center" style="font: 18px 'Open Sans'">
                    Comment List
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <h1 class="text-success text-center">{{ Session::get('message') }}</h1>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th class="bg-warning">SL No.</th>
                            <th class="bg-success">Blog One Title</th>
                            <th class="bg-warning">Visitor Name</th>
                            <th class="bg-success">Comment</th>
                            <th class="bg-warning">Publication status</th>
                            <th class="bg-success">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i = 1)
                        @foreach($comments as $comment)
                            <tr class="odd gradeX">
                                <td class="bg-success">{{ $i++ }}</td>
                                <td class="bg-warning">{{ $comment->blog_one_title }}</td>
                                <td class="bg-success">{{ $comment->first_name.' '.$comment->last_name }}</td>
                                <td class="bg-warning">{{ $comment->comment }}</td>
                                <td class="bg-success">{{ $comment->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td class="bg-warning">
                                    @if($comment->publication_status == 1)
                                        <a href="{{ route('unpublished-comment',['id' => $comment->id]) }}">Unpublished</a>
                                        @else
                                        <a href="{{ route('published-comment',['id' => $comment->id]) }}">Published</a>
                                        @endif
                                        <a href="" id="{{ $comment->id }}" class="text-danger delete-btn" onclick="
                                                event.preventDefault();
                                                var check = confirm('Are you sure to delete this??');
                                                if(check){
                                                document.getElementById('deleteCommentForm'+'{{ $comment->id }}').submit();
                                                }
                                                ">Delete</a>

                                        <form id="deleteCommentForm{{ $comment->id }}" action="{{ route('delete-comment') }}" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{ $comment->id }}" name="id"/>
                                        </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection