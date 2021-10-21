@extends('layout')
@section('title')
    Dashboard All-Users
@endsection
@section('main')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">All Users</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">All Users</li>
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
            <div class="container-fluid d-flex">
                <div class="w-100">
                    <div class="card card-blue">
                        <div class="card-header">
                            <h3 class="card-title"><i class="nav-icon fas fa-user-plus"></i>All Users</h3>
                            <div class="card-tools">
                                <div class="card-tools">
                                    <a href="{{ url('dashboard/create/New-Users') }}" class="btn btn-sm btn-outline-secondary">
                                        Add New
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name </th>
                                        <th>E-Mail</th>
                                        <th>Role</th>
                                        <th>Verified</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->role->name }}</td>
                                            @if ($user->email_verified_at !== null)
                                                <td><span class="badge bg-success">Yes</span></td>
                                            @else
                                                <td><span class="badge bg-danger">No</span></td>
                                            @endif


                                            <td>
                                                <a href="{{ url("dashboard/delete/$user->id") }}"
                                                    class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                                @if ($user->role->name == 'user')
                                                    <a href="{{ url("dashboard/promote/$user->id") }}"
                                                        class="btn btn-sm btn-success">
                                                        </i><i class="fas fa-level-up-alt"></i>
                                                    </a>
                                                @else
                                                    <a href="{{ url("dashboard/demote/$user->id") }}"
                                                        class="btn btn-sm btn-danger">
                                                        </i><i class="fas fa-level-down-alt"></i>
                                                    </a>
                                                @endif


                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex my-3 justify-content-center ">
                                {{ $users->links() }}
                            </div>
                        </div>

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
