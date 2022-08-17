@extends('backend.layouts.layout')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Create New Admin<h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Add new admin</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div>
                <div class="card">
                    <div class="card-header">
                        <h5>Add new admin</h5>
                        <p>Please fill out all details correctly</p>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="bg-danger mb-2 p-2">
                                <div class="text-whie">
                                    <small>
                                        Whoops! Something went wrong.
                                    </small>
                                </div>

                                <ul class="text-white">
                                    @foreach ($errors->all() as $error)
                                        <li>
                                            <small>
                                                {{ $error }}
                                            </small>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('users.store') }}" method="POST" class="theme-form mega-form">
                            @csrf
                            <div class="mb-3">
                                <label class="col-form-label">Name</label>
                                <input class="form-control text-dark" name="name" type="text" placeholder="Name">
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Email</label>
                                <input class="form-control text-dark" name="email" type="email" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Password</label>
                                <input class="form-control text-dark" name="password" type="password"
                                    placeholder="Password">
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Confirm Password</label>
                                <input class="form-control text-dark" name="password_confirmation" type="password"
                                    placeholder="Repeat Password">
                            </div>
                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </form>
                        <hr class="mt-4 mb-4">
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
