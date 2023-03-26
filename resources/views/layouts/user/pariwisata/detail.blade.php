@extends('bizbook.page')

@section('content')
@php
    use Carbon\Carbon;
@endphp
    <!-- Preloader -->

    <!-- START -->
    <section>
        <div class="str">
            <div>
                @include('bizbook.header')
            </div>
        </div>
    </section>
    <!-- END -->

    <!-- START -->
	<section class="  eve-deta-pg">
		<div class="container">
			<div class="eve-deta-pg-main">
				<div class="lhs">
					<div class="img">
						<img src="{{ $data->url_image ?? asset('images/static/empty.png') }}" alt="">
					</div>
					<div class="head"> {{ $data->category }}</span>
						<h1>{{ $data->name }}</h1>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--END-->
	<!-- START -->
	<section class=" eve-deta-body blog-deta-body">
		<div class="container">
			<div class="eve-deta-body-main">
				<div class="lhs">
                    {!! $data->description !!}
                </div>
			</div>
		</div>
	</section>
	<!--END-->
@endsection
