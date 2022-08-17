@extends('backend.layouts.layout')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Add new region<h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Add new region </li>
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
                        <h5>Add new region</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('regions.store') }}" method="POST" class="theme-form mega-form">
                            @csrf
                            <div class="mb-3">
                                <label class="col-form-label">Region Name</label>
                                <input class="form-control text-dark" name="name" type="text" placeholder="Region Name">
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
