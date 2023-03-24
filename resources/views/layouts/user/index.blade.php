@extends('bizbook.page')

@section('content')
    <!-- Preloader -->

    <!-- START -->
    <section>
        <div class="str">
            <div class="hom-head" style=" background-image: url({{ asset('images/static/home.jpg') }});">
                <div class="hom-top">
                    <div class="container">
                        <div class="row">
                            <div class="hom-nav  db-open ">
                                <!--MOBILE MENU-->
                                <!--<div class="menu">
                                <i class="material-icons mopen">menu</i>
                            </div>-->
                                <a href="index.html" class="top-log">
                                    <img src="images/home/logo-b.png" width="40" height="49" class="">
                                </a>
                                <div class="menu">
                                    <h4>All Category</h4>
                                </div>
                                <div class="pop-menu">
                                    <div class="container">
                                        <div class="row"> <i class="material-icons clopme">close</i>
                                            <div class="pmenu-spri">
                                                <ul>
                                                    <li>
                                                        <a href="all-category.html" class="act">
                                                            <img src="images/icon/shop.png">All Services</a>
                                                    </li>
                                                    <li>
                                                        <a href="events.html">
                                                            <img src="images/icon/calendar.png">Events</a>
                                                    </li>
                                                    <li>
                                                        <a href="all-products.html">
                                                            <img src="images/icon/cart.png">Products</a>
                                                    </li>
                                                    <li>
                                                        <a href="coupons.html">
                                                            <img src="images/icon/coupons.png">Coupon & deals</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-posts.html">
                                                            <img src="images/icon/blog1.png">Blogs</a>
                                                    </li>
                                                    <li>
                                                        <a href="community.html">
                                                            <img src="images/icon/11.png">Community</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="pmenu-cat">
                                                <h4>All Categories</h4>
                                                <input type="text" id="pg-sear" placeholder="Search category">
                                                <ul id="pg-resu">
                                                    <li><a href="all-listing.html">Wedding halls - <span>03</span></a>
                                                    </li>
                                                    <li><a href="all-listing.html">Hotel & Food - <span>01</span></a>
                                                    </li>
                                                    <li><a href="all-listing.html">Pet shop - <span>12</span></a>
                                                    </li>
                                                    <li><a href="all-listing.html">Digital Products - <span>31</span></a>
                                                    </li>
                                                    <li><a href="all-listing.html">Spa and Facial - <span>10</span></a>
                                                    </li>
                                                    <li><a href="all-listing.html">Real Estate - <span>23</span></a>
                                                    </li>
                                                    <li><a href="all-listing.html">Sports - <span>05</span></a>
                                                    </li>
                                                    <li><a href="all-listing.html">Education - <span>02</span></a>
                                                    </li>
                                                    <li><a href="all-listing.html">Electricals - <span>05</span></a>
                                                    </li>
                                                    <li><a href="all-listing.html">Automobiles - <span>06</span></a>
                                                    </li>
                                                    <li><a href="all-listing.html">Transportation - <span>02</span></a>
                                                    </li>
                                                    <li><a href="all-listing.html">Hospitals - <span>08</span></a>
                                                    </li>
                                                    <li><a href="all-listing.html">Hotels And Resorts - <span>09</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="dir-home-nav-bot">
                                                <ul>
                                                    <li>A few reasons you’ll love Online Business Directory <span>Call us on: +01 6214 6548</span>
                                                    </li>
                                                    <li><a href="post-your-ads.html.html" class="waves-effect waves-light btn-large"><i class="material-icons">font_download</i> Advertise with us</a>
                                                    </li>
                                                    <li>
                                                        <a href="pricing-details.html.html" class="waves-effect waves-light btn-large"> <i class="material-icons">store</i> Add your business</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--END MOBILE MENU-->
                            </div>
                        </div>
                    </div>
                </div>
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
					<div class="home-tit" style="padding-top: 0;">
						<h2><span>Kegiatan</span> Desa</h2>
						<p>Membangun Desa Cinta Laksana Melalui Usaha Bersama</p>
					</div>
					<div class="land-pack">
						<ul>
							<li>
								<div class="land-pack-grid">
									<div class="land-pack-grid-img">
										<img src="images/services/21.jpg" alt="">
									</div>
									<div class="land-pack-grid-text">
										<h4>Pariwisata</h4>
									</div> <a href="all-listing.html" class="land-pack-grid-btn">View all listings</a>
								</div>
							</li>
							<li>
								<div class="land-pack-grid">
									<div class="land-pack-grid-img">
										<img src="images/services/30.jpg" alt="">
									</div>
									<div class="land-pack-grid-text">
										<h4>UMKM</h4>
									</div> <a href="all-listing.html" class="land-pack-grid-btn">View all listings</a>
								</div>
							</li>
							<li>
								<div class="land-pack-grid">
									<div class="land-pack-grid-img">
										<img src="images/services/1.jpg" alt="">
									</div>
									<div class="land-pack-grid-text">
                                        <h4>Produk UMKM</h4>
									</div> <a href="all-listing.html" class="land-pack-grid-btn">View all listings</a>
								</div>
							</li>
							<li>
								<div class="land-pack-grid">
									<div class="land-pack-grid-img">
										<img src="images/services/4.jpg" alt="">
									</div>
									<div class="land-pack-grid-text">
                                       <h4>Produk Masyarakat</h4>
									</div> <a href="all-listing.html" class="land-pack-grid-btn">View all listings</a>
								</div>
							</li>
							<li>
								<div class="land-pack-grid">
									<div class="land-pack-grid-img">
										<img src="images/services/8.jpg" alt="">
									</div>
									<div class="land-pack-grid-text">
                                         <h4>Event Masyarakat</h4>
									</div><a href="all-listing.html" class="land-pack-grid-btn">View all listings</a>
								</div>
							</li>
							<li>
								<div class="land-pack-grid">
									<div class="land-pack-grid-img">
										<img src="images/services/7.jpeg" alt="">
									</div>
									<div class="land-pack-grid-text">
                                        <h4>Kreatifitas Masyarakat</h4>
									</div> <a href="all-listing.html" class="land-pack-grid-btn">View all listings</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection
