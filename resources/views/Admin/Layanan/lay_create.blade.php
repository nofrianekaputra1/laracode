@extends('Admin.Layouts.admin')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="row  d-flex align-items-center">
                        <div class="col-sm-6">
                            <h1 class="m-0">Tambah Layanan / Jasa</h1>
                        </div>
                        <div class="col-sm-6 m-0">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                                <li class="breadcrumb-item ">Layanan</li>
                                <li class="breadcrumb-item active">Tambah Layanan</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('layanan.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Cover</label>
                            <input type="file" class="form-control" name="cover">
                            <x-error name="cover" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Layanan / Jasa</label>
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                            <x-error name="title" />
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">MKey</label>
                                    <textarea class="form-control" name="mk" rows="3">{{ old('mk') }}</textarea>
                                    <x-error name="mk" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">MDesc</label>
                                    <textarea class="form-control" name="md" rows="3">{{ old('md') }}</textarea>
                                    <x-error name="md" />
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Konten</label>
                            <textarea class="form-control" name="konten" id="summernote">{{ old('konten') }}</textarea>
                            <x-error name="konten" />
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-dark">
                                <span id="save">Save It</span>
                                <span id="loading" class="d-none">
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    Loading...
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('cs')
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
@endpush
@push('js')
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script>
        $(function() {
            $('#summernote').summernote({
                height: 350
            })
        })
    </script>
@endpush
