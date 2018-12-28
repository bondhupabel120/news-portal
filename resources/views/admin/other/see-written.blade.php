@extends('admin.master')

@section('title')
    Written
@endsection

@section('body')
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center" style="font: 18px 'Open Sans'">
                    User Written
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    {{--                    <h1 class="text-success text-center">{{ Session::get('message') }}</h1>--}}
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th class="bg-warning text-center">SL No.</th>
                            <th class="bg-success text-center">Name</th>
                            <th class="bg-warning text-center">Address</th>
                            <th class="bg-success text-center">Subject</th>
                            <th class="bg-warning text-center">Title</th>
                            <th class="bg-success text-center">Image</th>
                            <th class="bg-warning text-center">Description</th>
                            <th class="bg-success text-center">Publication status</th>
                            <th class="bg-warning text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i = 1)
                        @foreach($others as $other)
                            <tr class="odd gradeX">
                                <td class="bg-success">{{ $i++ }}</td>
                                <td class="bg-warning">{{ $other->full_name }}</td>
                                <td class="bg-success">{{ $other->address }}</td>
                                <td class="bg-warning">{{ $other->subject }}</td>
                                <td class="bg-success">{{ $other->title }}</td>
                                <td class="bg-warning"><img class="img-fluid rounded" src="{{ $other->image }}" alt="" height="150" width="120"></td>
                                <td class="bg-success">{{ $other->description }}</td>
                                <td class="bg-warning">{{ $other->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td class="bg-success">
                                    @if($other->publication_status == 1)
                                        <a href="{{ route('unpublished-written',['id' => $other->id]) }}">Unpublished</a>
                                    @else
                                        <a href="{{ route('published-written',['id' => $other->id]) }}">Published</a>
                                    @endif

                                        {{--<a href="" id="{{ $other->id }}" class="text-danger delete-btn" onclick="--}}
                                                {{--event.preventDefault();--}}
                                                {{--var check = confirm('Are you sure to delete this??');--}}
                                                {{--if(check){--}}
                                                {{--document.getElementById('deleteWrittenForm'+'{{ $other->id }}').submit();--}}
                                                {{--}--}}
                                                {{--">Delete</a>--}}

                                        {{--<form id="deleteWrittenForm{{ $other->id }}" action="{{ route('delete-written') }}" method="POST">--}}
                                            {{--@csrf--}}
                                            {{--<input type="hidden" value="{{ $other->id }}" name="id"/>--}}
                                        {{--</form>--}}
                                </td>
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