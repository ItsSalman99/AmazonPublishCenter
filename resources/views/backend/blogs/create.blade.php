@extends('backend.layouts.layout')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Create Blog Post</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Blog Posts</li>
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
                                <h5>Create Blog Posts</h5>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="p-4">
                            @if ($errors->any())
                                <div class="bg-danger p-2">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>
                                                {{ $error }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="my-4">
                                    <label for="title">Blog Thumbnail (Recommended 770x382):</label>
                                    <input type="file" class="form-control" placeholder="Blog Title" name="image"
                                        id="">
                                </div>
                                <div class="my-4">
                                    <label for="title">Blog Title:</label>
                                    <input type="text" class="form-control" placeholder="Blog Title" name="title"
                                        id="">
                                </div>
                                <div class="my-4">
                                    <label for="title">Blog Summary:</label>
                                    <textarea class="form-control" placeholder="Blog Summary" name="summary"></textarea>
                                </div>
                                <div class="my-4">
                                    <label for="description">Write Blog:</label>
                                    <textarea class="form-control" id="body" placeholder="Enter the Description" name="body"></textarea>
                                </div>
                                <div class="my-4">
                                    <button class="btn btn-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                                            <path
                                                d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                            <path
                                                d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z" />
                                        </svg>
                                        <span class="ml-2">
                                            Publish
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection

@section('extra-js')
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#body'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection