@extends('backend.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Employees</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6" style="text-align: right;">
                        <a href="{{ url('admin/employees/add') }}" class="btn btn-primary">Add Employees</a>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <section class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="search-title">Search Employee</h3>
                            </div>
                            <form method="GET" action="">
                                <div class="card-body">
                                    <div class="row">

                                        <div class="form-group col-md-1">
                                            <label>ID</label>
                                            <input type="text" name="id" class="form-control" value="{{Request()->id}}"
                                                placeholder="Id">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label>First Name</label>
                                            <input type="text" name="name" value="{{Request()->name}}" class="form-control"
                                                placeholder="First name">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label>Last Name</label>
                                            <input type="text" name="last_name" value="{{Request()->last_name}}" class="form-control"
                                                placeholder="Last name">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label>Email</label>
                                            <input type="email" name="email" value="{{Request()->email}}" class="form-control"
                                                placeholder="email">
                                        </div>

                                        <div class="form-group col-md-2">
                                            <button class="btn btn-primary" type="submit"
                                                style="margin-top:30px">Search</button>
                                            <a href="{{ url('admin/employees') }}" class="btn btn-success"
                                                style="margin-top: 30px">Reset</a>
                                        </div>

                                    </div>

                                </div>
                            </form>
                        </div>
                        @include('_message')
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Employee List</h3>
                                <div class="card-body p-0">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>First name</th>
                                                <th>Last name</th>
                                                <th>Email</th>
                                                <th>Is Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($getRecord as $value)
                                            <tr>
                                                <td>{{$value->id}}</td>
                                                <td>{{$value->name}}</td>
                                                <td>{{$value->last_name}}</td>
                                                <td>{{$value->email}}</td>
                                                <td>{{!empty($value->is_role)?'HR':'Employees'}}</td>

                                                <td>
                                                    <a href="{{url('admin/employees/view/'.$value->id)}}" class="btn-sm btn-info">View</a>
                                                    <a href="{{url('admin/employees/edit/'.$value->id)}}" class="btn-sm btn-primary">Edit</a>
                                                    <a href="{{url('admin/employees/delete/'.$value->id)}}" onclick="return confirm('Are you sure you want to delete?')" class="btn-sm btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="100%">No results found</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    <div style="padding:10px; float:right;">
                                        {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
@endsection
