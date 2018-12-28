@extends('admin.master')

@section('title')
    Manage International News
@endsection

@section('body')
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center" style="font: 18px 'Open Sans'">
                    International News List
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <h1 class="text-success text-center">{{ Session::get('message') }}</h1>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th class="bg-warning">SL No.</th>
                            <th class="bg-success">International News</th>
                            <th class="bg-success">Publication status</th>
                            <th class="bg-warning">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i = 1)
                        @foreach($internationals as $international)
                            <tr class="odd gradeX">
                                <td class="bg-success">{{ $i++ }}</td>
                                <td class="bg-warning">{{ $international->add_international_news }}</td>
                                <td class="bg-warning">{{ $international->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td class="bg-success">
                                    <a href="{{ route('edit-international-news', ['id'=>$international->id]) }}" class="text-success">Edit</a>

                                    <a href="" id="{{ $international->id }}" class="text-danger delete-btn" onclick="
                                            event.preventDefault();
                                            var check = confirm('Are you sure to delete this??');
                                            if(check){
                                            document.getElementById('deleteCategoryForm'+'{{ $international->id }}').submit();
                                            }
                                            ">Delete</a>

                                    <form id="deleteCategoryForm{{ $international->id }}" action="{{ route('delete-international-news') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $international->id }}" name="id"/>
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