@extends('admin.master')

@section('title')
    Manage Breaking News
@endsection

@section('body')
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center" style="font: 18px 'Open Sans'">
                    Breaking News List
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <h1 class="text-success text-center">{{ Session::get('message') }}</h1>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th class="bg-warning">SL No.</th>
                            <th class="bg-success">Breaking News</th>
                            <th class="bg-success">Publication status</th>
                            <th class="bg-warning">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i = 1)
                        @foreach($breakings as $breaking)
                            <tr class="odd gradeX">
                                <td class="bg-success">{{ $i++ }}</td>
                                <td class="bg-warning">{{ $breaking->add_breaking_news }}</td>
                                <td class="bg-warning">{{ $breaking->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td class="bg-success">
                                    <a href="{{ route('edit-breaking-news', ['id'=>$breaking->id]) }}" class="text-success">Edit</a>

                                    <a href="" id="{{ $breaking->id }}" class="text-danger delete-btn" onclick="
                                            event.preventDefault();
                                            var check = confirm('Are you sure to delete this??');
                                            if(check){
                                            document.getElementById('deleteCategoryForm'+'{{ $breaking->id }}').submit();
                                            }
                                            ">Delete</a>

                                    <form id="deleteCategoryForm{{ $breaking->id }}" action="{{ route('delete-breaking-news') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $breaking->id }}" name="id"/>
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