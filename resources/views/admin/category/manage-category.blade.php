@extends('admin.master')

@section('title')
    Manage Category
@endsection

@section('body')
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center" style="font: 18px 'Open Sans'">
                    Category List
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <h1 class="text-success text-center">{{ Session::get('message') }}</h1>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th class="bg-warning">SL No.</th>
                            <th class="bg-success">Category Name</th>
                            <th class="bg-warning">Category Description</th>
                            <th class="bg-success">Publication status</th>
                            <th class="bg-warning">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i = 1)
                        @foreach($categories as $category)
                            <tr class="odd gradeX">
                                <td class="bg-success">{{ $i++ }}</td>
                                <td class="bg-warning">{{ $category->category_name }}</td>
                                <td class="bg-success">{{ $category->category_description }}</td>
                                <td class="bg-warning">{{ $category->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td class="bg-success">
                                    <a href="{{ route('edit-category', ['id'=>$category->id]) }}" class="text-success">Edit</a>

                                    <a href="" id="{{ $category->id }}" class="text-danger delete-btn" onclick="
                                       event.preventDefault();
                                       var check = confirm('Are you sure to delete this??');
                                    if(check){
                                    document.getElementById('deleteCategoryForm'+'{{ $category->id }}').submit();
                                    }
                                    ">Delete</a>

                                    <form id="deleteCategoryForm{{ $category->id }}" action="{{ route('delete-category') }}" method="POST">
                                       @csrf
                                        <input type="hidden" value="{{ $category->id }}" name="id"/>
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