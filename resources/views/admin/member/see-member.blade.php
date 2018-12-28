@extends('admin.master')

@section('title')
    Membership
@endsection

@section('body')
    <br>
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
            <div class="panel panel-default">
                <div class="panel-heading text-center" style="font: 18px 'Open Sans'">
                    All Membership
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    {{--                    <h1 class="text-success text-center">{{ Session::get('message') }}</h1>--}}
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th class="bg-warning">SL No.</th>
                            <th class="bg-success">Name</th>
                            <th class="bg-warning">Father Name</th>
                            <th class="bg-success">Mother Name</th>
                            <th class="bg-warning">Institute Name</th>
                            <th class="bg-success">Class</th>
                            <th class="bg-warning">Roll</th>
                            <th class="bg-success">Present Address</th>
                            <th class="bg-warning">Permanent Address</th>
                            <th class="bg-success">Mobile</th>
                            <th class="bg-warning">Email</th>
                            <th class="bg-success">Facebook</th>
                            <th class="bg-warning">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i = 1)
                        @foreach($memberships as $membership)
                            <tr class="odd gradeX">
                                <td class="bg-success">{{ $i++ }}</td>
                                <td class="bg-warning">{{ $membership->first_name.' '.$membership->last_name }}</td>
                                <td class="bg-success">{{ $membership->father_name }}</td>
                                <td class="bg-warning">{{ $membership->mother_name }}</td>
                                <td class="bg-success">{{ $membership->institute_name }}</td>
                                <td class="bg-warning">{{ $membership->class }}</td>
                                <td class="bg-success">{{ $membership->roll }}</td>
                                <td class="bg-warning">{{ $membership->present_address }}</td>
                                <td class="bg-success">{{ $membership->permanent_address }}</td>
                                <td class="bg-warning">{{ $membership->mobile }}</td>
                                <td class="bg-success">{{ $membership->email }}</td>
                                <td class="bg-warning">{{ $membership->facebook }}</td>
                                <td class="bg-warning">
                                    <a href="" id="{{ $membership->id }}" class="text-danger delete-btn" onclick="
                                            event.preventDefault();
                                            var check = confirm('Are you sure to delete this??');
                                            if(check){
                                            document.getElementById('deleteMemberForm'+'{{ $membership->id }}').submit();
                                            }
                                            ">Delete</a>

                                    <form id="deleteMemberForm{{ $membership->id }}" action="{{ route('delete-member') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $membership->id }}" name="id"/>
                                    </form>
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