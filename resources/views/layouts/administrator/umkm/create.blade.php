@extends('adminlte::page')

@section('title', 'UMKM')

@section('content_header')


<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0 text-dark">{{ $title }}</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Master UMKM</a></li>
            <li class="breadcrumb-item"><a href="#">{{ $title }}</a></li>
        </ol>
    </div>
</div>
@stop

@section('content')
<div class="row">
    <form role="form" action="{{ route('administrator.umkm.store') }}" method="POST" class="col-md-12" enctype="multipart/form-data">
        @csrf
        @include("layouts.administrator.umkm.fields")
    </form>
</div>
@stop

@section('css')
    <!--<link rel="stylesheet" href="/css/admin_custom.css">-->
@stop

@push('js')
<script type="text/javascript">

    $('.custom-file input').change(function (e) {
        if (e.target.files.length) {
            $(this).next('.custom-file-label').html(e.target.files[0].name);
        }
    });

</script>

@endpush
