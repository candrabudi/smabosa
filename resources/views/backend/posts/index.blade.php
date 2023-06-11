@extends('backend.template.app')
@section('title')
Artikel
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
        <div class="card">
            <div class="card-header d-flex">
                <h5 class="align-self-center m-0">Data Postingan</h5>
                <a href="{{ route('create-post') }}" class="btn btn-primary ms-auto"><i class="fa fa-plus"></i> &NonBreakingSpace;Tambah Post</a>
            </div>
            <div class="card-datatable text-nowrap">
                <table class="datatables-ajax table" id="get-data">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Thumbnail</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="{{ asset('backend/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
<script src="{{ asset('backend/vendor/libs/moment/moment.js')}}"></script>
<script src="{{ asset('backend/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{ asset('backend/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{ asset('backend/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{ asset('backend/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
<script src="{{ asset('backend/js/main.js')}}"></script>
<script src="{{ asset('backend/js/tables-datatables-basic.js')}}"></script>

<script>
    $(function() {
        var table = $('#get-data').DataTable({
            processing: true,
            serverSide: true,
            scrollX: true,
            ajax: '{!! route('datatable-posts') !!}',
            columns: [{
                    data: 'no'
                },
                {
                    data: 'title'
                },
                {
                    data: 'content'
                },
                {
                    data: 'thumbnail'
                },
                {
                    data: 'id',
                    orderable: false,
                    render: function(id) {
                        return '<div class="dropdown"><button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button><div class="dropdown-menu"><a class="dropdown-item detail-data" href="javascript:void(0);" data-id="' + id + '"><i class="ti ti-list me-1"></i> Detail</a>@if(!empty($menuAccessDelete))<a class="dropdown-item delete-post" href="javascript:void(0);" data-id="' + id + '"><i class="ti ti-trash me-1"></i> Delete</a>@endif</div></div>';
                    },
                }
            ],
        });
    });
</script>
@endsection