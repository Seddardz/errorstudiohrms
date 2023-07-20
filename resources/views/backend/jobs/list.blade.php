@extends('backend.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Jobs</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6" style="text-align: right;">
                        <a href="{{ url('admin/jobs/add') }}" class="btn btn-primary">Add jobs</a>
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
                                <h3 class="search-title">Search jobs</h3>
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
                                            <label>Job Title</label>
                                            <input type="text" name="job_title" value="{{Request()->job_title}}" class="form-control"
                                                placeholder="job title">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label>min salary</label>
                                            <input type="text" name="min_salary" value="{{Request()->min_salary}}" class="form-control"
                                                placeholder="min salary">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label>max salary</label>
                                            <input type="text" name="max_salary" value="{{Request()->max_salary}}" class="form-control"
                                                placeholder="max salary">
                                        </div>

                                        <div class="form-group col-md-2">
                                            <button class="btn btn-primary" type="submit"
                                                style="margin-top:30px">Search</button>
                                            <a href="{{ url('admin/jobs') }}" class="btn btn-success"
                                                style="margin-top: 30px">Reset</a>
                                        </div>

                                    </div>

                                </div>
                            </form>
                        </div>
                        @include('_message')
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Job List</h3>
                                <div class="card-body p-0">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>job title</th>
                                                <th>min salary</th>
                                                <th>max salary</th>
                                                <th>created at</th>
                                                <th>updated at</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>1</td>
                                                <td>job title</td>
                                                <td>100</td>
                                                <td>300</td>
                                                <td>12/12/2023</td>
                                                <td>31/01/2024</td>

                                                <td>
                                                    <a href="" class="btn-sm btn-info">View</a>
                                                    <a href="" class="btn-sm btn-primary">Edit</a>
                                                    <a href="" onclick="return confirm('Are you sure you want to delete?')" class="btn-sm btn-danger">Delete</a>
                                                </td>
                                            </tr>

                                                <tr>
                                                    <td colspan="100%">No results found</td>
                                                </tr>

                                        </tbody>
                                    </table>
                                    <div style="padding:10px; float:right;">

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
