@extends('backend.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Job History</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Add</a></li>
                            <li class="breadcrumb-item active">job History</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Add Jobs</h3>
                            </div>
                            <form class="form-horizontal" method="post" action="{{ url('admin/job_history/add') }}"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="card-body">

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Employee name <span
                                                style="color:red;">*</span></label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="employee_id">
                                                <option value="">Employees</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Start date <span
                                                style="color:red;">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="date" value="{{ old('start_date') }}" name="start_date"
                                                class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">End date <span
                                                style="color:red;">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="date" value="{{ old('end_date') }}" name="end_date"
                                                class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Job name (Job ID) <span
                                                style="color:red;">*</span></label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="job_id">
                                                <option value="">Select Job Name</option>
                                                @foreach ($getJobs as $value_job )
                                                <option value="{{$value_job->id}}">{{$value_job->job_title}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Department Name (Department ID) <span
                                                style="color:red;">*</span></label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="department_id">
                                                <option value="">Employees</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <a href="{{ url('admin/jobs') }}" class="btn btn-default">Back</a>
                                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
@endsection
