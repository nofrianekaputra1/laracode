@extends('Admin.Layouts.admin')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="row  d-flex align-items-center">
                        <div class="col-sm-6">
                            <h1 class="m-0">Tambah Produk</h1>
                        </div>
                        <div class="col-sm-6 m-0">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                                <li class="breadcrumb-item ">Produk</li>
                                <li class="breadcrumb-item active">Tambah Produk</li>
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
                    <form action="{{ route('produk.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Cover</label>
                            <input type="file" class="form-control" name="cover">
                            <x-error name="cover" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select class="select2" multiple="multiple" data-placeholder="Select a Category"
                                style="width: 100%;" name="categories[]">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                            <x-error name="title" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                            <x-error name="title" />
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Price</label>
                                    <input type="text" class="form-control uang" name="price"
                                        value="{{ old('price') }}">
                                    <x-error name="price" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Discount (0-100%)</label>
                                    <input type="number" class="form-control" name="discount"
                                        value="{{ old('discount') }}">
                                    <x-error name="discount" />
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Files</label>
                            <input type="file" class="form-control" name="links" value="{{ old('links') }}">
                            <x-error name="links" />
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
                            <textarea class="form-control" name="desc" id="summernote">{{ old('desc') }}</textarea>
                            <x-error name="desc" />
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
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endpush
@push('js')
    <script src="{{ asset('jquery.mask.js') }}"></script>
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
    <script>
        $(function() {
            $('#summernote').summernote({
                height: 350
            });
            $('.uang').mask('000.000.000', {
                reverse: true
            });
            $('.select2').select2({
                theme: 'bootstrap4'
            });
        })
    </script>
@endpush
