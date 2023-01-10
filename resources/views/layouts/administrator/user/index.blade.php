@extends('adminlte::page')

@section('title', 'User')

@section('content_header')
    <h1>User</h1>
@stop

@section('content')
    <div class="card-body">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-striped table-bordered dt-responsive nowrap table-sm" width="100%" id="datatable_1"></table>
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
                    url: "{{ route('administrator.user.data') }}",
                    headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' }
                },
                columns: [
                    { title: "{{ __('Username') }}", data: 'name', name: 'name', defaultContent: '-', class: 'text-center' },
                    { title: "{{ __('Email') }}", data: 'email', name: 'email', defaultContent: '-', class: 'text-center' },
                    { title: "{{ __('Status') }}", data: 'type', name: 'type', defaultContent: '-', class: 'text-center',searchable:false, orderable: false },
                    { title: "{{ __('Action') }}", data: 'action', name: 'action', defaultContent: ' - ', class: 'text-center',searchable:false, orderable: false },
                ]
            });


        });
    </script>
@endpush
