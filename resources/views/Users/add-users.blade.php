@extends('layout')
@section('title')
    Dashboard Add-Users
@endsection
@section('main')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Add Users</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Add Users</li>
                            {{-- <li class="breadcrumb-item"><a href="{{ url('/parts/show-table') }}">Scrap Table</a></li> --}}
                            <li class="breadcrumb-item"> <a id="logout-link" href="#">logOut</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid d-flex w-75">
                <div class="w-100">
                    <div class="card card-blue">
                        <div class="card-header">
                            <h3 class="card-title"><i class="nav-icon fas fa-user-plus"></i>Add Users</h3>
                        </div>@include('inc.messages')
                        <form method="POST" action="{{ url('/dashboard/AddUsers') }}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Add Name</label>
                                    <input class="form-control" type="text" name="name">
                                </div>
                                <div class="form-group">
                                    <label>Add E-Mail</label>
                                    <input class="form-control" type="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" type="Password" name="password">
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input class="form-control" type="Password" name="password_confirmation">
                                </div>
                                <div class="form-group">
                                    <label for="my-select">Jop</label>
                                    <select id="my-select" class="form-control" name="role_id">
                                        <option>Select</option>
                                        <option value="1">SuperaAdmin</option>
                                        <option value="2">Admin</option>
                                        <option value="3">User</option>
                                    </select>
                                </div>
                                <button class="btn btn-outline-primary float-right" type="submit">submit</button>
                            </div>
                        </form>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
