@extends('Admin.Layouts.admin')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="row  d-flex align-items-center">
                        <div class="col-sm-6">
                            <h1 class="m-0">Category</h1>
                        </div>
                        <div class="col-sm-6 m-0">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Category</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            @empty($category)
                                <form action="{{ route('category.store') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="" class="form-label">Title</label>
                                        <input type="text" class="form-control" name="title">
                                        <x-error name="title" />
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-dark">
                                            <span id="save">Save It</span>
                                            <span id="loading" class="d-none">
                                                <span class="spinner-border spinner-border-sm" role="status"
                                                    aria-hidden="true"></span>
                                                Loading...
                                            </span>
                                        </button>
                                    </div>
                                </form>
                            @else
                                <form action="{{ route('category.update', $category->id) }}" method="post">
                                    @csrf
                                    @method('patch')
                                    <div class="mb-3">
                                        <label for="" class="form-label">Title</label>
                                        <input type="text" class="form-control" name="title"
                                            value="{{ old('title') ?? $category->title }}">
                                        <x-error name="title" />
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-dark">
                                            <span id="save">Updated</span>
                                            <span id="loading" class="d-none">
                                                <span class="spinner-border spinner-border-sm" role="status"
                                                    aria-hidden="true"></span>
                                                Loading...
                                            </span>
                                        </button>
                                        <a href="{{ route('category.index') }}" class="btn btn-outline-dark">Back</a>
                                    </div>
                                </form>
                            @endempty
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Category</h3>
                            {{-- <div class="card-tools">
                            <ul class="pagination pagination-sm float-right">
                                <li class="page-item"><a class="page-link" href="#">«</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">»</a></li>
                            </ul>
                        </div> --}}
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table  data-table">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Title</th>
                                        <th>Slug</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $category->title }}</td>
                                            <td>{{ $category->slug }}</td>
                                            <td>
                                                <div class="d-flex justify-content-start">
                                                    <a href="{{ route('category.edit', $category->id) }}"
                                                        class="btn btn-outline-dark btn-sm"><i class="fas fa-edit"></i></a>
                                                    <form action="{{ route('category.destroy', $category->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-dark btn-sm ml-2">
                                                            <span id="save">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </span>
                                                            <span id="loading" class="d-none">
                                                                <span class="spinner-border spinner-border-sm"
                                                                    role="status" aria-hidden="true"></span>
                                                            </span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
