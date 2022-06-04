@extends('admin.layouts.app')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Users</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Users</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                @if (session('success'))
                    <div class="alert alert-success" id="success-alert">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('errors'))
                    <div class="alert alert-danger" id="error-alert">
                        {{ $errors['message'] }}


                    </div>
                @endif
                <div class="row">

                    <!-- /.col-md-6 -->
                    <div class="col-lg-12">
                        <!-- /.card -->

                        <div class="card">
                            <div class="card-header border-0">
                                <h3 class="card-title">Create new user</h3>
                                <div class="card-tools">
                                    <a href="#" class="btn btn-sm btn-tool">
                                        <i class="fas fa-download"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-tool">
                                        <i class="fas fa-bars"></i>
                                    </a>
                                </div>
                            </div>
                            <form action="{{ route('store-user') }}" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    placeholder="name">
                                                @if (isset(session('errors')['errorBag']['name']))
                                                    @foreach ($errors['errorBag']['name'] as $error)
                                                        <p> {{ $error }}</p>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email address</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    placeholder="Enter email">
                                                @if (isset(session('errors')['errorBag']['email']))
                                                    @foreach ($errors['errorBag']['email'] as $error)
                                                        <p> {{ $error }}</p>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" id="password" name="password"
                                                    placeholder="Password">
                                                @if (isset(session('errors')['errorBag']['password']))
                                                    @foreach ($errors['errorBag']['password'] as $error)
                                                        <p> {{ $error }}</p>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="password_confirmation">Confirm Password</label>
                                                <input type="password" class="form-control" id="password_confirmation"
                                                    name="password_confirmation" placeholder="Confirm password">
                                                @if (isset(session('errors')['errorBag']['password_confirmation']))
                                                    @foreach ($errors['errorBag']['password_confirmation'] as $error)
                                                        <p> {{ $error }}</p>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="role">Role</label>
                                                <select class="form-control" name="role" id="role">
                                                    @foreach ($roles as $role)
                                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            {{-- <div class="form-group">
                                                <label for="image">Avatar</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="image"
                                                            name="image">
                                                        <label class="custom-file-label" for="image">Choose
                                                            file</label>
                                                        @if (isset(session('errors')['errorBag']['image']))
                                                            @foreach ($errors['errorBag']['image'] as $error)
                                                                <p> {{ $error }}</p>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">Upload</span>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            {{-- <div class="form-check">
                                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                              <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                          </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->

        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    @endsection
