@extends('backend.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Job History</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6" style="text-align: right;">
                        <a href="{{ url('admin/job_history/add') }}" class="btn btn-primary">Add job History</a>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <section class="col-md-12">
                        @include('_message')
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Jobs History List</h3>
                            </div>
                            <div class="card-body p-0">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>employee_Id</th>
                                            <th>start date</th>
                                            <th>end date</th>
                                            <th>job id</th>
                                            <th>department id</th>
                                            <th>created at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($getRecord as $value)
                                            <tr>
                                                <td>{{ $value->id }}</td>
                                                <td>{{ $value->employee_id }}</td>
                                                <td>{{ date('d-m-Y',strtotime($value->start_date)) }}</td>
                                                <td>{{ date('d-m-Y',strtotime($value->end_date)) }}</td>
                                                <td>{{ $value->job_id }}</td>
                                                <td>{{ $value->department_id }}</td>
                                                <td>{{ date('d-m-Y H:m',strtotime($value->created_at)) }}</td>
                                                <td>
                                                    <a href="" class="btn-sm btn-info">View</a>
                                                    <a href="" class="btn-sm btn-primary">Edit</a>
                                                    <a href=""
                                                        onclick="return confirm('Are you sure you want to delete?')"
                                                        class="btn-sm btn-danger">Delete</a>
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
                    </section>

                </div>
            </div>
        </section>
    </div>
@endsection
