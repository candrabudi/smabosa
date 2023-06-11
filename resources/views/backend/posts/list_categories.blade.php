@extends('backend.template.app')
@section('title')
Kategori
@endsection
@section('style')
<link rel="stylesheet" href="{{ asset('backend/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
<link rel="stylesheet" href="{{ asset('backend/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
<link rel="stylesheet" href="{{ asset('backend/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}" />
<link rel="stylesheet" href="{{ asset('backend/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}" />
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-4">
            <div class="col-md">
                <div class="card">
                    <h5 class="card-header">Tambah Kategori</h5>
                    <div class="card-body">
                        <form class="needs-validation" method="POST" action="{{route('store-category-post')}}" novalidate>
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="bs-validation-name">Nama Kategori</label>
                                <input type="text" name="name" class="form-control" id="bs-validation-name" required />
                                <div class="invalid-feedback">Tolong Masukan Nama Kategori</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bs-validation-slug">Slug</label>
                                <input type="text" name="slug" class="form-control" id="bs-validation-slug" required />
                                <div class="invalid-feedback">Tolong Masukan Slug</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bs-validation-description">Deskripsi</label>
                                <textarea name="description" id="" cols="30" rows="4" class="form-control" id="bs-validation-description" required></textarea>
                                <div class="invalid-feedback">Tolong Masukan Deskripsi</div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header d-flex">
                    <h5 class="align-self-center m-0">Data Kategori</h5>
                </div>
                <div class="card-datatable text-nowrap">
                    <table class="datatables-ajax table" id="get-data">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Slug</th>
                                <th>Jumlah</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="{{ asset('backend/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
<script src="{{ asset('backend/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
<script src="{{ asset('backend/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
<script src="{{ asset('backend/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
<script src="{{ asset('backend/js/form-validation.js') }}"></script>
<script>
    $(function() {
        var table = $('#get-data').DataTable({
            processing: true,
            serverSide: true,
            scrollX: true,
            ajax: '{!! route('datatable-post-categories') !!}',
            columns: [{
                    data: 'no'
                },
                {
                    data: 'name'
                },
                {
                    data: 'slug'
                },
                {
                    data: 'description'
                },
                {
                    data: 'total'
                },
                {
                    data: 'id',
                    orderable: false,
                    render: function(id) {
                        return '<button class="my-1 btn btn-warning btn-sm edit-post"  style="display: inline-block;" data-id="' + id + '"><i class="ti ti-pencil me-1"></i></button><button class="my-1 btn btn-danger btn-sm edit-post" style="display: inline-block;margin-left: 5px" data-id="' + id + '"><i class="ti ti-trash me-1"></i></button>';
                    },
                }
            ],
        });
    });
</script>
@endsection