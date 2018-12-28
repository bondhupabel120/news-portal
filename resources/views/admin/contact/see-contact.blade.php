@extends('admin.master')

@section('title')
    Contact
@endsection

@section('body')
    <br>
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
            <div class="panel panel-default">
                <div class="panel-heading text-center" style="font: 18px 'Open Sans'">
                    Contact Message
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
{{--                    <h1 class="text-success text-center">{{ Session::get('message') }}</h1>--}}
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th class="bg-warning">SL No.</th>
                            <th class="bg-success">Name</th>
                            <th class="bg-warning">Email</th>
                            <th class="bg-success">Message</th>
                            <th class="bg-warning">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i = 1)
                        @foreach($contacts as $contact)
                            <tr class="odd gradeX">
                                <td class="bg-success">{{ $i++ }}</td>
                                <td class="bg-warning">{{ $contact->name }}</td>
                                <td class="bg-success">{{ $contact->email }}</td>
                                <td class="bg-warning">{{ $contact->message }}</td>
                                <td class="bg-success">
                                    <a href="" id="{{ $contact->id }}" class="text-danger delete-btn" onclick="
                                            event.preventDefault();
                                            var check = confirm('Are you sure to delete this??');
                                            if(check){
                                            document.getElementById('deleteContactForm'+'{{ $contact->id }}').submit();
                                            }
                                            ">Delete</a>

                                    <form id="deleteContactForm{{ $contact->id }}" action="{{ route('delete-contact') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $contact->id }}" name="id"/>
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