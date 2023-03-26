<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>
        @yield('title', config('adminlte.title', 'AdminLTE 3'))
    </title>
    {{-- Base Meta Tags --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#76cef1" />
	<meta name="description" content="Nikmati keindahan alam dan budaya Desa Ekonomi Cinta Laksana di Wisata Ekonomi Cinta Laksana">


    <link rel="shortcut icon" href="{{ asset('images/fav.ico')  }}" type="image/x-icon">
	<!--== GOOGLE FONTS ==-->
	<link href="https://fonts.googleapis.com/css?family=Oswald:700|Source+Sans+Pro:300,400,600,700&display=swap" rel="stylesheet">
	<!--== WEB ICON FONTS ==-->
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">

	<link rel="preload" as="font" href="{{ asset('font/icon.woff2') }}" type="font/woff2" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>

<body>
    @yield('body')

    <div class="mt-4">

    </div>
	<!-- START -->
	<section>
		<div class="cr">
			<div class="container">
				<div class="row">
					<p>Copyright © {{ date('Y') }} <a href="#">Desa Cintalaksana</a>.
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- END -->

    <script src="{{ asset('js/bizbook/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bizbook/popper.min.js') }}"></script>
    <script src="{{ asset('js/bizbook/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bizbook/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/bizbook/custom.js') }}"></script>
    <script src="{{ asset('js/bizbook/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/bizbook/custom_validation.js') }}"></script>




	<script>
		$(window).scroll(function () {
		        var scroll = $(window).scrollTop();
		        if (scroll >= 250) {
		            $(".hom-top").addClass("dmact");
		        }
		        else {
		            $(".hom-top").removeClass("dmact");
		        }
		    });
	</script>
</body>
</html>
