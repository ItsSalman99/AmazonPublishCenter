@extends('backend.layouts.layout')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Users</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Users</li>
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
                                <h5>All Users (Admins)</h5>
                            </div>
                            <div class="d-flex gap-2 justify-content-between">
                                <div>
                                    <a href="{{ route('users.create') }}" class="btn btn-primary">
                                        <i class="bi bi-plus-square-fill"></i>
                                        Add new
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-dashed">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Client Email</th>
                                    <th scope="col">Last Login</th>
                                    <th scope="col">Created At</th>
                                    <th></th>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                    <tr>
                                        <th scope="row"> {{ $user->id }} </th>
                                        <td>
                                            {{ $user->name }}
                                            @if (Auth::user()->id == $user->id)
                                                <span class="bg-primary rounded-circle p-2">You</span>
                                            @endif
                                        </td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->last_login }}</td>
                                        <td >{{ date('F, j Y', strtotime($user->created_at)) }}</td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <a href="{{ route('clients.edit', ['id'=>$user->id]) }}" class="btn btn-sm btn-success">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="{{ route('clients.destroy', ['id'=>$user->id]) }}" class="btn btn-sm btn-danger">
                                                        <i class="bi bi-trash3-fill"></i>
                                                    </a>
                                                </div>
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
                <div class="my-4 p-2">
                    {{ $users->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
