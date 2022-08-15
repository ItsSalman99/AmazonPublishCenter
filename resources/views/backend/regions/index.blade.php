@extends('backend.layouts.layout')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Regions</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Regions</li>
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
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5>All Regions</h5>
                            </div>
                            <div>
                                <a href="{{ route('regions.create') }}" class="btn btn-sm btn-primary">
                                    <i class="bi bi-plus-square-fill"></i>
                                    Add new
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-dashed">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Date</th>
                                    <th></th>
                            </thead>
                            <tbody>
                                @forelse ($regions as $region)
                                    <tr>
                                        <th scope="row"> {{ $region->id }} </th>
                                        <td>{{ $region->name }}</td>
                                        <td>{{ date('F, j Y', strtotime($region->created_at)) }}</td>
                                        <td>
                                            <div>
                                                <a href="{{ route('regions.destroy', ['id'=> $region->id]) }}" class="btn btn-sm btn-danger">
                                                    <i class="bi bi-trash3-fill"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <div class="p-2">
                                            <h4>No Data Availaible!</h4>
                                        </div>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
