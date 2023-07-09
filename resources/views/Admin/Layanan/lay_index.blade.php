@extends('Admin.Layouts.admin')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="row  d-flex align-items-center">
                        <div class="col-sm-6">
                            <h1 class="m-0">Layanan / Jasa</h1>
                        </div>
                        <div class="col-sm-6 m-0">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Layanan</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="mb-3">
                <a href="{{ route('layanan.create') }}" class="btn btn-dark">Tambah Layanan / Jasa</a>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Layanan</h3>
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
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Cover</th>
                                <th>Nama Layanan / Jasa</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($layanans as $layanan)
                                <tr>
                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle"><img src="{{ $layanan->take_image }}" style="max-height: 50px">
                                    </td>
                                    <td class="align-middle">{{ $layanan->title }}</td>
                                    <td class="align-middle">{{ $layanan->slug }}</td>
                                    <td class="align-middle">
                                        <div class="d-flex justify-content-start">
                                            <a href="{{ route('layanan.edit', $layanan->id) }}"
                                                class="btn btn-outline-dark btn-sm"><i class="fas fa-edit"></i></a>
                                            <form action="{{ route('layanan.destroy', $layanan->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-dark btn-sm ml-2">
                                                    <span id="save">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </span>
                                                    <span id="loading" class="d-none">
                                                        <span class="spinner-border spinner-border-sm" role="status"
                                                            aria-hidden="true"></span>
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
@endsection
