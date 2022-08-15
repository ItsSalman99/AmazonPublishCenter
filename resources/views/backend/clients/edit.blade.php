@extends('backend.layouts.layout')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Edit {{ $client->name }}</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Edit Clients </li>
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
                        <h5>Edit {{ $client->name }}</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('clients.update', ['id'=>$client->id]) }}" method="POST" class="theme-form mega-form">
                            @csrf
                            <h6>{{ $client->name }} Information</h6>
                            <div class="mb-3">
                                <label class="col-form-label">Client Name</label>
                                <input class="form-control text-dark" name="name" type="text" value="{{ $client->name }}">
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Client Email Address</label>
                                <input class="form-control text-dark" type="email" name="email" placeholder="Enter email"
                                    value="{{ $client->email }}">
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Client Contact Number</label>
                                <input class="form-control text-dark" type="text" name="contact" placeholder="Enter contact number"
                                    value="{{ $client->contact }}">
                            </div>
                            <hr class="mt-4 mb-4">
                            <div class="mb-3">
                                <label class="col-form-label">Client Profession</label>
                                <input class="form-control text-dark" type="text" name="profession" placeholder="Company Name"
                                    value="{{ $client->profession }}">
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Client Region</label>
                                <select name="region_id" id="" class="form-control text-dark select">
                                    <option value="">--Select Region--</option>
                                    @foreach ($regions as $region)
                                        <option value="{{ $region->id }}" <?php if ($region->id == $client->region->id) {
                                            echo 'selected';
                                        } ?>>
                                            {{ $region->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-primary">Update</button>
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
