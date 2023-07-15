@extends('backend.layouts.app')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Employees</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Add</a></li>
              <li class="breadcrumb-item active">Employees</li>
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
                        <h3 class="card-title">Add Employees</h3>
                    </div>
                    <form class="form-horizontal" method="post" accept="" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">First name <span
                                        style="color:red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" required
                                        placeholder="Enter first name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Last name <span
                                        style="color:red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="last_name" class="form-control" required
                                        placeholder="Enter last name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email <span
                                        style="color:red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" required
                                        placeholder="Enter email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Phone number <span
                                        style="color:red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="phone_number" class="form-control" required
                                        placeholder="Enter phone number">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Hire date <span
                                        style="color:red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="date" name="hire_date" class="form-control" required
                                        placeholder="Enter hire date">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Job title <span
                                        style="color:red;">*</span></label>
                                <div class="col-sm-10">
                                <select class="form-control" name="job_id" required>
                                    <option value="">select jovb title</option>
                                    <option value="1">Infirmier</option>
                                    <option value="2">aide soignant</option>
                                </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Salary <span
                                        style="color:red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="salary" class="form-control" required
                                        placeholder="Enter salary">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Comission Pct <span
                                        style="color:red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="comission_pct" class="form-control" required
                                        placeholder="Enter commission pcty">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Manager name <span
                                        style="color:red;">*</span></label>
                                <div class="col-sm-10">
                                <select class="form-control" name="manager_id" required>
                                    <option value="">select manager name</option>
                                    <option value="1">Miloud</option>
                                    <option value="2">Himi</option>
                                </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Department name <span
                                        style="color:red;">*</span></label>
                                <div class="col-sm-10">
                                <select class="form-control" name="department_id" required>
                                    <option value="">select Department name</option>
                                    <option value="1">CH</option>
                                    <option value="2">UMC</option>
                                </select>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
<a href="{{url('admin/employees')}}" class="btn btn-default">Back</a>
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