@extends('Admin.Layouts.admin')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="row  d-flex align-items-center">
                        <div class="col-sm-6">
                            <h1 class="m-0">Produk</h1>
                        </div>
                        <div class="col-sm-6 m-0">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Produk</li>
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
                <a href="{{ route('produk.create') }}" class="btn btn-dark">Tambah Produk</a>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Produk</h3>
                    <div class="card-tools">
                        {!! $produks->appends(['sort' => 'department'])->links() !!}
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Cover</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produks as $produk)
                                <tr>
                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle"><img src="{{ $produk->take_image }}" style="max-height: 50px">
                                    </td>
                                    <td class="align-middle">{{ $produk->title }}</td>
                                    <td class="align-middle">{{ $produk->slug }}</td>
                                    <td class="align-middle">
                                        <input data-id="{{ $produk->id }}" class="toggle-class" type="checkbox"
                                            data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                            data-on="Publish" data-off="Draft" {{ $produk->status ? 'checked' : '' }}>
                                    </td>
                                    <td class="align-middle">
                                        <div class="d-flex justify-content-start">
                                            <a href="{{ route('produk.edit', $produk->id) }}"
                                                class="btn btn-outline-dark btn-sm"><i class="fas fa-edit"></i></a>
                                            <form action="{{ route('produk.destroy', $produk->id) }}" method="post">
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
@push('cs')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endpush
@push('js')
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(function() {
            $('.toggle-class').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var produk_id = $(this).data('id');
                var url = "{{ route('cs') }}";
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: url,
                    data: {
                        'status': status,
                        'produk_id': produk_id
                    },
                    success: function(data) {
                        Swal.fire({
                            title: 'Successfully',
                            text: 'Status Has Ben Changed !',
                            icon: 'success',
                        })
                    }
                });
            })
        })
    </script>
@endpush
