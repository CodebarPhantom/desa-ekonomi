@extends('bizbook.page')

@section('content')
    <!-- Preloader -->

    <!-- START -->
    <section>
        <div class="str">
            <div class="hom-head" style=" background-image: url({{ asset('images/static/kartar.png') }});">
                @include('bizbook.header')
                <div class="container">
                    <div class="row">
                        <div class="ban-tit">
                            <h1><b>Desa Ekonomi Cinta Laksana</b> <br/> Nikmati keindahan alam dan budaya Desa Ekonomi Cinta Laksana di Wisata Ekonomi Cinta Laksana, <br/> tempat di mana Anda dapat memperoleh pengalaman yang tak terlupakan dan mendukung pengembangan ekonomi desa yang berkelanjutan</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->

    <section>
		<div class="str">
			<div class="container">
				<div class="row">
					<!--<div class="home-tit">
                    <h2><span>Top Services</span> Cras nulla nulla, pulvinar sit amet nunc at, lacinia viverra lectus. Fusce imperdiet ullamcorper metus eu fringilla.</h2>
                </div>-->
					<div class="home-tit" style="padding-top: 15px;">
						<h2><span>Kegiatan</span> Desa</h2>
						<p>Membangun Desa Cinta Laksana Melalui Usaha Bersama</p>
					</div>
					<div class="land-pack">
						<ul>
							<li>
								<div class="land-pack-grid">
									<div class="land-pack-grid-img">
										<img src="{{ asset('images/static/pariwisata.jpg') }}" alt="">
									</div>
									<div class="land-pack-grid-text">
										<h4>Pariwisata</h4>
									</div> <a href="{{ route('user.pariwisata.index') }}" class="land-pack-grid-btn">View all listings</a>
								</div>
							</li>
							<li>
								<div class="land-pack-grid">
									<div class="land-pack-grid-img">
										<img src="{{ asset('images/static/umkm.jpg') }}" alt="">
									</div>
									<div class="land-pack-grid-text">
										<h4>UMKM</h4>
									</div> <a href="{{ route('user.umkm.index') }}" class="land-pack-grid-btn">View all listings</a>
								</div>
							</li>
							<li>
								<div class="land-pack-grid">
									<div class="land-pack-grid-img">
										<img src="{{ asset('images/static/produk-umkm.jpg') }}" alt="">
									</div>
									<div class="land-pack-grid-text">
                                        <h4>Produk UMKM</h4>
									</div> <a href="{{ route('user.umkm-product.index') }}" class="land-pack-grid-btn">View all listings</a>
								</div>
							</li>
							<li>
								<div class="land-pack-grid">
									<div class="land-pack-grid-img">
										<img src="{{ asset('images/static/produk-masyarakat.jpg') }}" alt="">
									</div>
									<div class="land-pack-grid-text">
                                       <h4>Produk Masyarakat</h4>
									</div> <a href="{{ route('user.masyarakat-product.index') }}" class="land-pack-grid-btn">View all listings</a>
								</div>
							</li>
							<li>
								<div class="land-pack-grid">
									<div class="land-pack-grid-img">
										<img src="{{ asset('images/static/event-masyarakat.jpg') }}" alt="">
									</div>
									<div class="land-pack-grid-text">
                                         <h4>Event Masyarakat</h4>
									</div><a href="{{ route('user.masyarakat-event.index') }}" class="land-pack-grid-btn">View all listings</a>
								</div>
							</li>
							<li>
								<div class="land-pack-grid">
									<div class="land-pack-grid-img">
										<img src="{{ asset('images/static/kreatifitas-masyarakat.jpg') }}" alt="">
									</div>
									<div class="land-pack-grid-text">
                                        <h4>Kreatifitas Masyarakat</h4>
									</div> <a href="{{ route('user.masyarakat-creativity.index') }}" class="land-pack-grid-btn">View all listings</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection
