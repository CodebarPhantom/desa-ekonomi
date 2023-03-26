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
	<section class=" blog-head">
		<div class="container">
			<div class="blog-head-inn">
				<h1>Event Masyarakat</h1>
				<p>List Event Masyarakat</p>
			</div>
		</div>
	</section>
	<!--END-->
	<!-- START -->
	<section class=" blog-body">
		<div class="container">
			<div class="us-ppg-com us-ppg-blog">
				<ul id="intseres">
					@foreach ($datas as $data)
                        <li>
                            <div class="pro-eve-box">
                                <div>
                                    <img src="{{ $data->url_image?? asset('images/static/empty.png')}}" alt="">
                                </div>
                                <div>
                                    <p>{{ $data->created_at->translatedFormat('D, d M Y') }}</p>
                                    <h2>{{ $data->name }}</h2>
                                </div> <a href="{{ route('user.masyarakat-event.detail',$data->id) }}" class="fclick">&nbsp;</a>
                            </div>
                        </li>
                    @endforeach

				</ul>
			</div>
		</div>
	</section>
	<!--END-->
@endsection
