@extends('adminlte::page')

@section('title', 'UMKM')

@section('content_header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0 text-dark">Produk UMKM</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Produk UMKM</a></li>
        </ol>
    </div>
</div>
@stop

@section('content')
@include('include.modal-confirmation-delete')

<div class="row">
    <div class="col-md-12">
        <div class="card card-info card-outline">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h3 class="card-title mt-1">
                        <i class="fa fa-shopping-bag"></i>
                        &nbsp; Produk UMKM
                    </h3>
                    <a href="{{ route('administrator.umkm-product.create') }}" class="btn btn-primary btn-flat btn-sm"><i class="fa fa-plus"></i>&nbsp;&nbsp;{{__('Buat').' '.__('Produk').' '.__('UMKM') }}</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered dt-responsive nowrap table-sm" width="100%" id="datatable_1"></table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('css')
    <!--<link rel="stylesheet" href="/css/admin_custom.css">-->
@stop

@section('plugins.Datatables', true)
@push('js')
    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var table = $('#datatable_1').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                language: {
                    emptyTable: "{{ __('No data available in table') }}",
                    info: "{{ __('Showing _START_ to _END_ of _TOTAL_ entries') }}",
                    infoEmpty: "{{ __('Showing 0 to 0 of 0 entries') }}",
                    infoFiltered: "({{ __('filtered from _MAX_ total entries') }})",
                    lengthMenu: "{{ __('Show _MENU_ entries') }}",
                    loadingRecords: "{{ __('Loading') }}...",
                    processing: "{{ __('Processing') }}...",
                    search: "{{ __('Search') }}",
                    zeroRecords: "{{ __('No matching records found') }}"
                },
                ajax: {
                    method: 'POST',
                    url: "{{ route('administrator.umkm-product.data') }}",
                    headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' }
                },
                columns: [
                    { title: "{{ __('Nama') }}", data: 'name', name: 'name', defaultContent: '-', class: 'text-center', orderable: false },
                    { title: "{{ __('UMKM') }}", data: 'umkm_name', name: 'umkm_name', defaultContent: '-', class: 'text-center',searchable:false, orderable: false },
                    { title: "{{ __('Action') }}", data: 'action', name: 'action', defaultContent: ' - ', class: 'text-center',searchable:false, orderable: false },
                ]
            });


        });


    </script>
@endpush
