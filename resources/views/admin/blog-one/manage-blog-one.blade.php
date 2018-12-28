@extends('admin.master')

@section('title')
    Manage Blog One
@endsection

@section('body')
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center" style="font: 18px 'Open Sans'">
                    Blog One List
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <h1 class="text-success text-center">{{ Session::get('message') }}</h1>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th class="bg-warning">SL No.</th>
                            <th class="bg-success">Category Name</th>
                            <th class="bg-warning">Blog One Title</th>
                            <th class="bg-success">Blog One Image</th>
                            <th class="bg-warning">Publication status</th>
                            <th class="bg-success">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i = 1)
                        @foreach($blog_ones as $blog_one)
                            <tr class="odd gradeX">
                                <td class="bg-success">{{ $i++ }}</td>
                                <td class="bg-warning">{{ $blog_one->category_name }}</td>
                                <td class="bg-success">{{ $blog_one->blog_one_title }}</td>
                                <td class="bg-warning"><img src="{{ asset($blog_one->blog_one_image) }}" alt="" width="120" height="120"></td>
                                <td class="bg-success">{{ $blog_one->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td class="bg-warning">
                                    <a href="{{ route('edit-blog-one', ['id'=>$blog_one->id]) }}" class="text-success">Edit</a>

                                    <a href="" id="{{ $blog_one->id }}" class="text-danger delete-btn" onclick="
                                            event.preventDefault();
                                            var check = confirm('Are you sure to delete this??');
                                            if(check){
                                            document.getElementById('deleteBlogForm'+'{{ $blog_one->id }}').submit();
                                            }
                                            ">Delete</a>

                                    <form id="deleteBlogForm{{ $blog_one->id }}" action="{{ route('delete-blog-one') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $blog_one->id }}" name="id"/>
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