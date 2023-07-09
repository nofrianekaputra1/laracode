@extends('Admin.Layouts.admin')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="row  d-flex align-items-center">
                        <div class="col-sm-6">
                            <h1 class="m-0">Setting Tentangku</h1>
                        </div>
                        <div class="col-sm-6 m-0">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                                <li class="breadcrumb-item ">Tentangku</li>
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
                    <form action="{{ route('about.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Konten</label>
                            @empty($about)
                                <textarea class="form-control" name="konten" id="summernote">{{ old('konten') }}</textarea>
                            @else
                                <textarea class="form-control" name="konten" id="summernote">{{ old('konten') ?? $about->konten }}</textarea>
                                <input type="hidden" name="id" value="{{ $about->id }}">
                            @endempty
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
                height: 500
            })
        })
    </script>
@endpush
