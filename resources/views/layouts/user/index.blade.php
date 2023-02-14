<!doctype html>
<html lang="en">

<head>
	<title>BizBook Directory Template by Rn53Themes.net</title>
	<!--== META TAGS ==-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="theme-color" content="#76cef1" />
	<meta property="og:image" content="images/home/logo-b.png" />
	<meta name="description" content="Kick start your online directory with BizBook Directory Template. Its comes with ultimate features like listings, events, blog, community. Try Bizbook directory now!">
	<meta name="keyword" content="bizbook directory, bizbook directory template, business directory template, php directory template, functional php template, php listing template, php dirctory database, local listing php template">
	<!--== FAV ICON(BROWSER TAB ICON) ==-->
	<link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
	<!--== GOOGLE FONTS ==-->
	<link href="https://fonts.googleapis.com/css?family=Oswald:700|Source+Sans+Pro:300,400,600,700&display=swap" rel="stylesheet">
	<!--== WEB ICON FONTS ==-->
    <link rel="stylesheet" href="{{ asset('css/bizbook/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bizbook/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bizbook/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bizbook/fonts.css') }}">

	<link rel="preload" as="font" href="{{ asset('font/icon.woff2') }}" type="font/woff2" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--== CSS FILES ==-->

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	<!-- Preloader -->
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>
	<!-- START -->
	<section>
		<div class="str">
			<div class="hom-head" style=" background-image: url(images/promo.jpg);">
				<div class="hom-top">
					<div class="container">
						<div class="row">
							<div class="hom-nav  db-open ">
								<!--MOBILE MENU-->
								<!--<div class="menu">
                                <i class="material-icons mopen">menu</i>
                            </div>-->
								<a href="index.html" class="top-log">
									<img src="images/home/logo-b.png" alt="" class="ic-logo">
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
								<div class="top-ser">
									<form name="filter_form" id="filter_form" class="filter_form">
										<ul>
											<li class="sr-sea">
												<!--                                            <input type="text"  id="-->
												<!--" class="autocomplete"-->
												<!--                                                   placeholder="-->
												<!--">-->
												<input type="text" autocomplete="off" id="top-select-search" placeholder="Search for services and business...">
												<ul id="tser-res1" class="tser-res tser-res2">
													<li>
														<div>
															<h4>The Royal Spa Center For Womens</h4>
															<span>No:2, 4th Avenue, Newyork, USA, Near to Airport</span>
															<a href="all-listing.html"></a>
														</div>
													</li>
													<li>
														<div>
															<h4>Real estate</h4>
															<span>Chennai, India</span>
															<a href="all-listing.html"></a>
														</div>
													</li>
													<li>
														<div>
															<h4>Education</h4>
															<span>Schools, university, colleges, online classes, tution centers, distance education..</span>
															<a href="all-listing.html"></a>
														</div>
													</li>
													<li>
														<div>
															<h4>Hotel and resort booking</h4>
															<span>hotel booking online, hotel reservation, holiday room booking</span>
															<a href="all-listing.html"></a>
														</div>
													</li>
													<li>
														<div>
															<h4>Import and export</h4>
															<span>Import and export to other countrys with low cost</span>
															<a href="all-listing.html"></a>
														</div>
													</li>
													<li>
														<div>
															<h4>Properties in Illunois</h4>
															<span>Villas, Plots, House rent and buy</span>
															<a href="all-listing.html"></a>
														</div>
													</li>
													<li>
														<div>
															<h4>Schools in Adyar</h4>
															<span>schools, adyar, education, </span>
															<a href="all-listing.html"></a>
														</div>
													</li>
													<li>
														<div>
															<h4>Laptop services near you</h4>
															<span>laptop services, computer services</span>
															<a href="all-listing.html"></a>
														</div>
													</li>
													<li>
														<div>
															<h4>Hospital and medical services near you</h4>
															<span>Hospital and medical services near you</span>
															<a href="all-listing.html"></a>
														</div>
													</li>
												</ul>
											</li>
											<li class="sbtn">
												<button type="button" class="btn btn-success" id="top_filter_submit"><i class="material-icons">&nbsp;</i>
												</button>
											</li>
										</ul>
									</form>
								</div>
								<div class="al">
									<div class="head-pro">
										<img src="images/user/62736rn53themes.png" alt=""> <b>Profile by</b>
										<br>
										<h4>Rn53 Themes</h4>
										<a href="dashboard.html" class="fclick"></a>
									</div>
									<div class="db-menu">
										<ul>
											<li>
												<a href="dashboard.html" class="db-lact">
													<img src="images/icon/dbl1.png" alt="" />My Dashboard</a>
											</li>
											<li>
												<a href="db-all-listing.html">
													<img src="images/icon/dbl7.png" alt="" />All Listings</a>
											</li>
											<li>
												<a href="add-listing-start.html" class="tz-lma">
													<img src="images/icon/dbl3.png" alt="" />Add New Listing</a>
											</li>
											<li>
												<a href="db-enquiry.html">
													<img src="images/icon/dbl14.png" alt="" />Lead enquiry</a>
											</li>
											<li>
												<a href="db-events.html">
													<img src="images/icon/dbl4.png" alt="" />Events</a>
											</li>
											<li>
												<a href="db-blog-posts.html">
													<img src="images/icon/dbl10.png" alt="" />Blog posts</a>
											</li>
											<li>
												<a href="db-review.html">
													<img src="images/icon/dbl13.png" alt="" />Reviews</a>
											</li>
											<li>
												<a href="db-my-profile.html">
													<img src="images/icon/dbl6.png" alt="" />My Profile</a>
											</li>
											<li>
												<a href="#">
													<img src="images/icon/dbl12.png" alt="" />Log Out</a>
											</li>
										</ul>
									</div>
								</div>
								<!--MOBILE MENU-->
								<div class="mob-menu">
									<div class="mob-me-ic"><i class="material-icons">menu</i>
									</div>
									<div class="mob-me-all">
										<div class="mob-me-clo"><i class="material-icons">close</i>
										</div>
										<div class="mv-pro ud-lhs-s1">
											<img src="images/user/62736rn53themes.png" alt="">
											<h4>Rn53 Themes</h4>
											<b>Join on 26, Mar 2021</b>
										</div>
										<div class="mv-pro-menu ud-lhs-s2">
											<ul>
												<li>
													<a href="dashboard.html" class="">
														<img src="images/icon/dbl1.png" alt="" />My Dashboard</a>
												</li>
												<li>
													<a href="db-all-listing.html" class="">
														<img src="images/icon/shop.png" alt="" />All Listings</a>
												</li>
												<li>
													<a href="add-listing-start.html">
														<img src="images/icon/dbl3.png" alt="" />Add New Listing</a>
												</li>
												<li>
													<a href="db-enquiry.html" class="">
														<img src="images/icon/tick.png" alt="" />Lead enquiry</a>
												</li>
												<li>
													<a href="db-products.html" class="">
														<img src="images/icon/cart.png" alt="" />All Products</a>
												</li>
												<li>
													<a href="db-events.html" class="">
														<img src="images/icon/calendar.png" alt="" />Events</a>
												</li>
												<li>
													<a href="db-blog-posts.html" class="">
														<img src="images/icon/blog1.png" alt="" />Blog posts</a>
												</li>
												<li>
													<a href="db-coupons.html" class="">
														<img src="images/icon/coupons.png" alt="" />Coupons</a>
												</li>
												<li>
													<a href="db-promote.html" class="">
														<img src="images/icon/promotion.png" alt="" />Promotions</a>
												</li>
												<li>
													<a href="db-seo.html" class="">
														<img src="images/icon/seo.png" alt="" />SEO</a>
												</li>
												<li>
													<a href="db-review.html" class="">
														<img src="images/icon/dbl13.png" alt="" />Reviews</a>
												</li>
												<li>
													<a href="db-message.html" class="">
														<img src="images/icon/dbl14.png" alt="" />Messages</a>
												</li>
												<li>
													<a href="db-my-profile.html" class="">
														<img src="images/icon/dbl6.png" alt="" />My Profile</a>
												</li>
												<li>
													<a href="db-like-listings.html" class="">
														<img src="images/icon/dbl15.png" alt="" />Liked Listings</a>
												</li>
												<li>
													<a href="db-followings.html" class="">
														<img src="images/icon/dbl18.png" alt="" />Followings</a>
												</li>
												<li>
													<a href="db-post-ads.html" class="">
														<img src="images/icon/dbl11.png" alt="" />Ad Summary</a>
												</li>
												<li>
													<a href="db-payment.html" class="">
														<img src="images/icon/dbl9.png" alt="">Payment & plan</a>
												</li>
												<li>
													<a href="db-invoice-all.html" class="">
														<img src="images/icon/dbl16.png" alt="" />Payment invoice</a>
												</li>
												<li>
													<a href="db-notifications.html" class="">
														<img src="images/icon/dbl19.png" alt="" />Notifications</a>
												</li>
												<li>
													<a href="how-to.html" class="" target="_blank">
														<img src="images/icon/dbl17.png" alt="" />How to's</a>
												</li>
												<li>
													<a href="db-setting.html" class="">
														<img src="images/icon/dbl210.png" alt="" />Setting</a>
												</li>
												<li>
													<a href="#">
														<img src="images/icon/dbl12.png" alt="" />Log Out</a>
												</li>
											</ul>
										</div>
										<div class="mv-cate">
											<h4>All Categories</h4>
											<ul>
												<li> <a href="all-listing.html">Wedding halls</a>
												</li>
												<li> <a href="all-listing.html">Hotel & Food</a>
												</li>
												<li> <a href="all-listing.html">Pet shop</a>
												</li>
												<li> <a href="all-listing.html">Digital Products</a>
												</li>
												<li> <a href="all-listing.html">Spa and Facial</a>
												</li>
												<li> <a href="all-listing.html">Real Estate</a>
												</li>
												<li> <a href="all-listing.html">Sports</a>
												</li>
												<li> <a href="all-listing.html">Education</a>
												</li>
												<li> <a href="all-listing.html">Electricals</a>
												</li>
												<li> <a href="all-listing.html">Automobiles</a>
												</li>
												<li> <a href="all-listing.html">Transportation</a>
												</li>
												<li> <a href="all-listing.html">Hospitals</a>
												</li>
												<li> <a href="all-listing.html">Hotels And Resorts</a>
												</li>
											</ul>
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
							<h1><b>Connect with the right<br>Service Experts</b> Restaurants, cafe's, and bars in New york                                                            </h1>
						</div>
						<div class="ban-search">
							<form name="filter_form" id="filter_form" class="filter_form">
								<ul>
									<li class="sr-cit">
										<input type="text" id="select-city" name="select-city" class="autocomplete" placeholder="City">
									</li>
									<li class="sr-sea">
										<!--<input type="text" id="select-search" class="autocomplete"
                                               placeholder="">-->
										<input type="text" autocomplete="off" id="select-search" placeholder="Search for services and business..." class="search-field">
										<ul id="tser-res" class="tser-res tser-res1">
											<li>
												<div>
													<h4>The Royal Spa Center For Womens</h4>
													<span>No:2, 4th Avenue, Newyork, USA, Near to Airport</span>
													<a href="all-listing.html"></a>
												</div>
											</li>
											<li>
												<div>
													<h4>Real estate</h4>
													<span>Chennai, India</span>
													<a href="all-listing.html"></a>
												</div>
											</li>
											<li>
												<div>
													<h4>Education</h4>
													<span>Schools, university, colleges, online classes, tution centers, distance education..</span>
													<a href="all-listing.html"></a>
												</div>
											</li>
											<li>
												<div>
													<h4>Hotel and resort booking</h4>
													<span>hotel booking online, hotel reservation, holiday room booking</span>
													<a href="all-listing.html"></a>
												</div>
											</li>
											<li>
												<div>
													<h4>Import and export</h4>
													<span>Import and export to other countrys with low cost</span>
													<a href="all-listing.html"></a>
												</div>
											</li>
											<li>
												<div>
													<h4>Properties in Illunois</h4>
													<span>Villas, Plots, House rent and buy</span>
													<a href="all-listing.html"></a>
												</div>
											</li>
											<li>
												<div>
													<h4>Schools in Adyar</h4>
													<span>schools, adyar, education, </span>
													<a href="all-listing.html"></a>
												</div>
											</li>
											<li>
												<div>
													<h4>Laptop services near you</h4>
													<span>laptop services, computer services</span>
													<a href="all-listing.html"></a>
												</div>
											</li>
											<li>
												<div>
													<h4>Hospital and medical services near you</h4>
													<span>Hospital and medical services near you</span>
													<a href="all-listing.html"></a>
												</div>
											</li>
										</ul>
									</li>
									<li class="sr-btn">
										<input type="submit" id="filter_submit" name="filter_submit" value="Search" class="filter_submit">
									</li>
								</ul>
							</form>
						</div>
						<div class="ban-ql">
							<ul>
								<li>
									<div>
										<img src="images/icon/1.png" alt="">
										<h4>24 Million Business</h4>
										<p>Choose from a collection of handpicked luxury villas & apartments</p> <a href="#">Explore Now</a>
									</div>
								</li>
								<li>
									<div>
										<img src="images/icon/2.png" alt="">
										<h4>1,200 Services Offered</h4>
										<p>Choose from a collection of handpicked luxury villas & apartments</p> <a href="#">Explore Now</a>
									</div>
								</li>
								<li>
									<div>
										<img src="images/icon/3.png" alt="">
										<h4>05 Million Visitors</h4>
										<p>Choose from a collection of handpicked luxury villas & apartments</p> <a href="#">Explore Now</a>
									</div>
								</li>
								<li>
									<div>
										<img src="images/icon/4.png" alt="">
										<h4>2k+ Premium Users</h4>
										<p>Choose from a collection of handpicked luxury villas & apartments</p> <a href="#">Explore Now</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END -->
	<style>
		.hom-top {
		            transition: all 0.5s ease;
		            background: none;
		            box-shadow: none;
		        }

		        .top-ser {
		            display: none;
		        }

		        .dmact .top-ser {
		            display: block;
		        }

		        .caro-home {
		            margin-top: 90px;
		            float: left;
		            width: 100%;
		        }

		        .carousel-item:before {
		            background: none;
		        }
	</style>
	<!-- START -->
	<section>
		<div class="str">
			<div class="container">
				<div class="row">
					<!--<div class="home-tit">
                    <h2><span>Top Services</span> Cras nulla nulla, pulvinar sit amet nunc at, lacinia viverra lectus. Fusce imperdiet ullamcorper metus eu fringilla.</h2>
                </div>-->
					<div class="home-tit">
						<h2><span>Popular Services</span> near you</h2>
						<p>lacinia viverra lectus. Fusce imperdiet ullamcorper metus eu fringilla.</p>
					</div>
					<div class="land-pack">
						<ul>
							<li>
								<div class="land-pack-grid">
									<div class="land-pack-grid-img">
										<img src="images/services/21.jpg" alt="">
									</div>
									<div class="land-pack-grid-text">
										<h4>Spa and Facial <span class="dir-ho-cat">Show All (1020)</span></h4>
									</div> <a href="all-listing.html" class="land-pack-grid-btn">View all listings</a>
								</div>
							</li>
							<li>
								<div class="land-pack-grid">
									<div class="land-pack-grid-img">
										<img src="images/services/30.jpg" alt="">
									</div>
									<div class="land-pack-grid-text">
										<h4>Hospitals <span class="dir-ho-cat">Show All (2010)</span></h4>
									</div> <a href="all-listing.html" class="land-pack-grid-btn">View all listings</a>
								</div>
							</li>
							<li>
								<div class="land-pack-grid">
									<div class="land-pack-grid-img">
										<img src="images/services/1.jpg" alt="">
									</div>
									<div class="land-pack-grid-text">
                                        <h4>Transportation<span class="dir-ho-cat">Show All (970)</span></h4>
									</div> <a href="all-listing.html" class="land-pack-grid-btn">View all listings</a>
								</div>
							</li>
							<li>
								<div class="land-pack-grid">
									<div class="land-pack-grid-img">
										<img src="images/services/4.jpg" alt="">
									</div>
									<div class="land-pack-grid-text">
                                       <h4>Automobiles<span class="dir-ho-cat">Show All (658)</span></h4>
									</div> <a href="all-listing.html" class="land-pack-grid-btn">View all listings</a>
								</div>
							</li>
							<li>
								<div class="land-pack-grid">
									<div class="land-pack-grid-img">
										<img src="images/services/8.jpg" alt="">
									</div>
									<div class="land-pack-grid-text">
                                         <h4>Electricals<span class="dir-ho-cat">Show All (926)</span></h4>
									</div><a href="all-listing.html" class="land-pack-grid-btn">View all listings</a>
								</div>
							</li>
							<li>
								<div class="land-pack-grid">
									<div class="land-pack-grid-img">
										<img src="images/services/7.jpeg" alt="">
									</div>
									<div class="land-pack-grid-text">
                                        <h4>Education<span class="dir-ho-cat">Show All (1400)</span></h4>
									</div> <a href="all-listing.html" class="land-pack-grid-btn">View all listings</a>
								</div>
							</li>
							<li>
								<div class="land-pack-grid">
									<div class="land-pack-grid-img">
										<img src="images/services/17.jpeg" alt="">
									</div>
									<div class="land-pack-grid-text">
                                        <h4>Pet & Animals<span class="dir-ho-cat">Show All (1360)</span></h4>
									</div> <a href="all-listing.html" class="land-pack-grid-btn">View all listings</a>
								</div>
							</li>
							<li>
								<div class="land-pack-grid">
									<div class="land-pack-grid-img">
										<img src="images/services/29.jpeg" alt="">
									</div>
									<div class="land-pack-grid-text">
                                        <h4>Real Estate<span class="dir-ho-cat">Show All (1960)</span></h4>
									</div><a href="all-listing.html" class="land-pack-grid-btn">View all listings</a>
								</div>
							</li>
						</ul> <a href="all-category.html" class="more">View all services</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END -->
	<!-- START -->
	<section>
		<div class="str">
			<div class="container">
				<div class="row">
					<div class="home-tit">
						<h2><span>Explore City</span> Category                        </h2>
						<p>lacinia viverra lectus. Fusce imperdiet ullamcorper metus eu fringilla.</p>
					</div>
					<div class="home-city">
						<ul>
							<li>
								<div class="hcity">
									<div>
										<img src="https://bizbookdirectorytemplate.com/images/services/95787pexels-asad-photo-maldives-1450363.jpg" alt="">
									</div>
									<div>
										<img src="images/services/1.jpg" alt="">
										<h4>Hotels And Resorts</h4>
										<div class="list-rat-all"> <b>3.0</b>
											<label class="rat"> <i class="material-icons">star</i>
												<i class="material-icons">star</i>
												<i class="material-icons">star</i>
												<i class="material-icons ratstar">star</i>
												<i class="material-icons ratstar">star</i>
											</label> <span>2 Reviews</span>
										</div>
										<p>09 Listings</p>
									</div> <a href="all-listing.html" class="fclick">&nbsp;</a>
								</div>
							</li>
							<li>
								<div class="hcity">
									<div>
										<img src="images/services/9.png" alt="">
									</div>
									<div>
                                        <img src="{{ asset('images/services/20356s7.jpeg') }}" alt="">
										<h4>Automobiles</h4>
										<div class="list-rat-all"> <b>3.0</b>
											<label class="rat"> <i class="material-icons">star</i>
												<i class="material-icons">star</i>
												<i class="material-icons">star</i>
												<i class="material-icons ratstar">star</i>
												<i class="material-icons ratstar">star</i>
											</label> <span>2 Reviews</span>
										</div>
										<p>06 Listings</p>
									</div><a href="all-listing.html" class="fclick">&nbsp;</a>
								</div>
							</li>
							<li>
								<div class="hcity">
									<div>
										<img src="images/services/19.jpg" alt="">
									</div>
									<div>
                                        <img src="images/services/20356s7.jpeg" alt="">
										<h4>Wedding halls</h4>
										<div class="list-rat-all"> <b>5.0</b>
											<label class="rat"> <i class="material-icons">star</i>
												<i class="material-icons">star</i>
												<i class="material-icons">star</i>
												<i class="material-icons">star</i>
												<i class="material-icons">star</i>
											</label> <span>1 Reviews</span>
										</div>
										<p>03 Listings</p>
									</div> <a href="all-listing.html" class="fclick">&nbsp;</a>
								</div>
							</li>
							<li>
								<div class="hcity">
									<div>
										<img src="images/services/8.jpg" alt="">
									</div>
									<div>
										<img src="images/services/445234.jpg" alt="">
										<h4>Digital products</h4>
										<div class="list-rat-all"> <b>3.3</b>
											<label class="rat"> <i class="material-icons">star</i>
												<i class="material-icons">star</i>
												<i class="material-icons">star</i>
												<i class="material-icons">star</i>
												<i class="material-icons ratstar">star</i>
											</label> <span>3 Reviews</span>
										</div>
										<p>23 Listings</p>
									</div> <a href="all-listing.html" class="fclick">&nbsp;</a>
								</div>
							</li>
                            <li>
								<div class="hcity">
									<div>
										<img src="images/services/2.jpeg" alt="">
									</div>
									<div>
										<img src="images/services/20356s7.jpeg" alt="">
										<h4>Real Estate</h4>
										<div class="list-rat-all"> <b>3.3</b>
											<label class="rat"> <i class="material-icons">star</i>
												<i class="material-icons">star</i>
												<i class="material-icons">star</i>
												<i class="material-icons">star</i>
												<i class="material-icons ratstar">star</i>
											</label> <span>3 Reviews</span>
										</div>
										<p>23 Listings</p>
									</div> <a href="all-listing.html" class="fclick">&nbsp;</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END -->
	<!-- START -->
	<section>
		<div class="hom-mpop-ser">
			<div class="container">
				<div class="hom-mpop-main">
					<div class="home-tit">
						<h2>
                            <span>Featured Services</span> in your city                        </h2>
						<p>lacinia viverra lectus. Fusce imperdiet ullamcorper metus eu fringilla.</p>
					</div>
					<div class="col-md-6">
						<div>
							<!--POPULAR LISTINGS-->
							<div class="hom-mpop">
								<!--POPULAR LISTINGS IMAGE-->
								<div class="col-md-3">
									<img src="images/listings/1.jpg" alt="" />
								</div>
								<!--POPULAR LISTINGS: CONTENT-->
								<div class="col-md-9">
									<h3>Titan Wedding Hall</h3>
									<h4>Wedding halls</h4>
									<p>Titan wedding happ, North street, No 2, Newyork, USA</p> <span class="rat-sh">5.0</span>
								</div> <a href="listing-details.html">&nbsp;</a>
							</div>
							<!--POPULAR LISTINGS-->
							<div class="hom-mpop">
								<!--POPULAR LISTINGS IMAGE-->
								<div class="col-md-3">
									<img src="images/listings/2.jpg" alt="" />
								</div>
								<!--POPULAR LISTINGS: CONTENT-->
								<div class="col-md-9">
									<h3>Gill Automobiles and Services</h3>
									<h4>Automobiles</h4>
									<p>Titan wedding happ, North street, No 2, Newyork, USA</p>
								</div>
							</div>
							<!--POPULAR LISTINGS-->
							<div class="hom-mpop">
								<!--POPULAR LISTINGS IMAGE-->
								<div class="col-md-3">
									<img src="images/listings/3.jpeg" alt="" />
								</div>
								<!--POPULAR LISTINGS: CONTENT-->
								<div class="col-md-9">
									<h3>Rolexo Villas in California</h3>
									<h4>Real Estate</h4>
									<p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</p> <span class="rat-sh">5.0</span>
								</div><a href="listing-details.html">&nbsp;</a>
							</div>
							<!--POPULAR LISTINGS-->
							<div class="hom-mpop">
								<!--POPULAR LISTINGS IMAGE-->
								<div class="col-md-3">
									<img src="images/listings/4.jpg" alt="" />
								</div>
								<!--POPULAR LISTINGS: CONTENT-->
								<div class="col-md-9">
									<h3>The Spa at Mandarin Oriental</h3>
									<h4>Hospitals</h4>
									<p>No:2, 4th Avenue, Newyork, USA, Near to Airport</p> <span class="rat-sh">4.0</span>
								</div><a href="listing-details.html">&nbsp;</a>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div>
							<!--POPULAR LISTINGS-->
							<div class="hom-mpop">
								<!--POPULAR LISTINGS IMAGE-->
								<div class="col-md-3">
									<img src="images/listings/5.jpeg" alt="" />
								</div>
								<!--POPULAR LISTINGS: CONTENT-->
								<div class="col-md-9">
									<h3>IPM Business Software</h3>
									<h4>Digital Products</h4>
									<p>No:2, 4th Avenue, Newyork, USA, Near to Airport</p>
								</div><a href="listing-details.html">&nbsp;</a>
							</div>
							<!--POPULAR LISTINGS-->
							<div class="hom-mpop">
								<!--POPULAR LISTINGS IMAGE-->
								<div class="col-md-3">
									<img src="images/listings/6.jpg" alt="" />
								</div>
								<!--POPULAR LISTINGS: CONTENT-->
								<div class="col-md-9">
									<h3>Rachel Taj Hotels</h3>
									<h4>Hotels And Resorts</h4>
									<p>No:2, 4th Avenue, Newyork, USA, Near to Airport</p> <span class="rat-sh">3.0</span>
								</div><a href="listing-details.html">&nbsp;</a>
							</div>
							<!--POPULAR LISTINGS-->
							<div class="hom-mpop">
								<!--POPULAR LISTINGS IMAGE-->
								<div class="col-md-3">
									<img src="images/listings/7.jpg" alt="" />
								</div>
								<!--POPULAR LISTINGS: CONTENT-->
								<div class="col-md-9">
									<h3>Joseph Multispeciality Hospital</h3>
									<h4>Hospitals</h4>
									<p>No:2, 4th Avenue, Newyork, USA, Near to Airport</p>
								</div> <a href="listing-details.html">&nbsp;</a>
							</div>
							<!--POPULAR LISTINGS-->
							<div class="hom-mpop">
								<!--POPULAR LISTINGS IMAGE-->
								<div class="col-md-3">
									<img src="images/listings/8.jpeg" alt="" />
								</div>
								<!--POPULAR LISTINGS: CONTENT-->
								<div class="col-md-9">
									<h3>Green Healthcare Hospital</h3>
									<h4>Hospitals</h4>
									<p>No:2, 4th Avenue, Newyork, USA, Near to Airport</p> <span class="rat-sh">3.0</span>
								</div> <a href="listing-details.html">&nbsp;</a>
							</div>
						</div>
					</div>
				</div>
				<div class="hlead-coll">
					<div class="col-md-6">
						<div class="hom-cre-acc-left">
							<h3>What service do you need?                                <span>BizBook Directory</span>
                            </h3>
							<p>Tell us more about your requirements so that we can connect you to the right service provider.</p>
							<ul>
								<li>
									<img src="images/icon/blog.png" alt="">
									<div>
										<h5>Tell us more about your requirements</h5>
										<p>HI Imagine you have made your presence online through a local online directory, but your competitors have..</p>
									</div>
								</li>
								<li>
									<img src="images/icon/shield.png" alt="">
									<div>
										<h5>We connect with right service provider</h5>
										<p>Advertising your business to area specific has many advantages. For local businessmen, it is an opportunity..</p>
									</div>
								</li>
								<li>
									<img src="images/icon/general.png" alt="">
									<div>
										<h5>Happy with our service</h5>
										<p>Your local business too needs brand management and image making. As you know the local market..</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="hom-col-req">
							<div class="log-bor">&nbsp;</div> <span class="udb-inst">Fill the form</span>
							<h4>What you looking for?</h4>
							<div id="home_enq_success" class="log" style="display: none;">
								<p>Your Enquiry Is Submitted Successfully!!!</p>
							</div>
							<div id="home_enq_fail" class="log" style="display: none;">
								<p>Something Went Wrong!!!</p>
							</div>
							<div id="home_enq_same" class="log" style="display: none;">
								<p>You cannot make enquiry on your own listing</p>
							</div>
							<form name="home_enquiry_form" id="home_enquiry_form" method="post" enctype="multipart/form-data">
								<input type="hidden" class="form-control" name="listing_id" value="0" placeholder="" required>
								<input type="hidden" class="form-control" name="listing_user_id" value="0" placeholder="" required>
								<input type="hidden" class="form-control" name="enquiry_sender_id" value="" placeholder="" required>
								<input type="hidden" class="form-control" name="enquiry_source" value="Website" placeholder="" required>
								<div class="form-group">
									<input type="text" name="enquiry_name" value="" required="required" class="form-control" placeholder="Enter name*">
								</div>
								<div class="form-group">
									<input type="email" class="form-control" placeholder="Enter email*" required="required" value="" name="enquiry_email" pattern="^[\w]{1,}[\w.+-]{0,}@[\w-]{2,}([.][a-zA-Z]{2,}|[.][\w-]{2,}[.][a-zA-Z]{2,})$" title="Invalid email address">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" value="" name="enquiry_mobile" placeholder="Enter mobile number *" pattern="[7-9]{1}[0-9]{9}" title="Phone number starting with 7-9 and remaing 9 digit with 0-9" required="">
								</div>
								<div class="form-group">
									<select name="enquiry_category" id="enquiry_category" class="form-control">
										<option value="">Select Category</option>
										<option value="19">Wedding halls</option>
										<option value="18">Hotel & Food</option>
										<option value="17">Pet shop</option>
										<option value="16">Digital Products</option>
										<option value="15">Spa and Facial</option>
										<option value="10">Real Estate</option>
										<option value="8">Sports</option>
										<option value="7">Education</option>
										<option value="6">Electricals</option>
										<option value="5">Automobiles</option>
										<option value="3">Transportation</option>
										<option value="2">Hospitals</option>
										<option value="1">Hotels And Resorts</option>
									</select>
								</div>
								<div class="form-group">
									<textarea class="form-control" rows="3" name="enquiry_message" placeholder="Enter your query or message"></textarea>
								</div>
								<input type="hidden" id="source">
								<button type="submit" id="home_enquiry_submit" name="home_enquiry_submit" class="btn btn-primary">Submit Requirements</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END -->
	<!-- START -->
	<section>
		<div class="str str-full">
			<div class="container">
				<div class="row">
					<div class="home-tit">
						<h2>
                            <span>Top Service Provider</span> in city                        </h2>
						<p>lacinia viverra lectus. Fusce imperdiet ullamcorper metus eu fringilla.</p>
					</div>
					<div class="ho-popu-bod">
						<!--Top Branding Hotels-->
						<div class="col-md-4">
							<div class="hot-page2-hom-pre-head">
								<h4>Top Branding                                        <span>Real Estate</span></h4>
							</div>
							<div class="hot-page2-hom-pre">
								<ul>
									<!--LISTINGS-->
									<li>
										<div class="hot-page2-hom-pre-1">
											<img src="images/services/1.jpg" alt="">
										</div>
										<div class="hot-page2-hom-pre-2">
											<h5>Royal Real Estates</h5>
											<span>No:2, 4th Avenue,  Newyork, USA, Near to Airport</span>
										</div>
										<a href="listing-details.html" class="fclick"></a>
									</li>
									<!--LISTINGS-->
									<!--LISTINGS-->
									<li>
										<div class="hot-page2-hom-pre-1">
											<img src="images/services/2.jpeg" alt="">
										</div>
										<div class="hot-page2-hom-pre-2">
											<h5>Smith Luxury Villas</h5>
											<span>No:2, 4th Avenue,  Newyork, USA, Near to Airport</span>
										</div>
										<div class="hot-page2-hom-pre-3"> <span>2.0</span>
										</div>
										<a href="listing-details.html" class="fclick"></a>
									</li>
									<!--LISTINGS-->
									<!--LISTINGS-->
									<li>
										<div class="hot-page2-hom-pre-1">
											<img src="images/services/3.jpg" alt="">
										</div>
										<div class="hot-page2-hom-pre-2">
											<h5>Appers Premium Independent Houses</h5>
											<span>No:2, 4th Avenue,  Newyork, USA, Near to Airport</span>
										</div>
										<div class="hot-page2-hom-pre-3"> <span>3.3</span>
										</div>
										<a href="listing-details.html" class="fclick"></a>
									</li>
									<!--LISTINGS-->
									<!--LISTINGS-->
									<li>
										<div class="hot-page2-hom-pre-1">
											<img src="images/services/4.jpg" alt="">
										</div>
										<div class="hot-page2-hom-pre-2">
											<h5>Asian Real Estate</h5>
											<span>No:2, 4th Avenue,  Newyork, USA, Near to Airport</span>
										</div>
										<a href="listing-details.html" class="fclick"></a>
									</li>
									<!--LISTINGS-->
									<!--LISTINGS-->
									<li>
										<div class="hot-page2-hom-pre-1">
											<img src="images/services/5.jpeg" alt="">
										</div>
										<div class="hot-page2-hom-pre-2">
											<h5>jj</h5>
											<span>No:2, 4th Avenue,  Newyork, USA, Near to Airport</span>
										</div>
										<a href="listing-details.html" class="fclick"></a>
									</li>
									<!--LISTINGS-->
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="hot-page2-hom-pre-head">
								<h4>Top Branding                                        <span>Digital Products</span></h4>
							</div>
							<div class="hot-page2-hom-pre">
								<ul>
									<!--LISTINGS-->
									<li>
										<div class="hot-page2-hom-pre-1">
											<img src="images/services/6.jpeg" alt="">
										</div>
										<div class="hot-page2-hom-pre-2">
											<h5>BizBookBusiness Directory Template</h5>
											<span>No:2, 4th Avenue,  Newyork, USA, Near to Airport</span>
										</div>
										<a href="listing-details.html" class="fclick"></a>
									</li>
									<!--LISTINGS-->
									<!--LISTINGS-->
									<li>
										<div class="hot-page2-hom-pre-1">
											<img src="images/services/7.jpeg" alt="">
										</div>
										<div class="hot-page2-hom-pre-2">
											<h5>Sony Music</h5>
											<span>No:2, 4th Avenue,  Newyork, USA, Near to Airport</span>
										</div>
										<a href="listing-details.html" class="fclick"></a>
									</li>
									<!--LISTINGS-->
									<!--LISTINGS-->
									<li>
										<div class="hot-page2-hom-pre-1">
											<img src="images/services/8.jpg" alt="">
										</div>
										<div class="hot-page2-hom-pre-2">
											<h5>IPM Business Software</h5>
											<span>No:2, 4th Avenue,  Newyork, USA, Near to Airport</span>
										</div>
								        <a href="listing-details.html" class="fclick"></a>
									</li>
									<!--LISTINGS-->
									<!--LISTINGS-->
									<li>
										<div class="hot-page2-hom-pre-1">
											<img src="images/services/9.png" alt="">
										</div>
										<div class="hot-page2-hom-pre-2">
											<h5>Tour and Travel html Template</h5>
											<span>No:2, 4th Avenue,  Newyork, USA, Near to Airport</span>
										</div>
										<div class="hot-page2-hom-pre-3"> <span>3.7</span>
										</div>
										<a href="listing-details.html" class="fclick"></a>
									</li>
									<!--LISTINGS-->
									<!--LISTINGS-->
									<li>
										<div class="hot-page2-hom-pre-1">
											<img src="images/services/10.jpg" alt="">
										</div>
										<div class="hot-page2-hom-pre-2">
											<h5>Smart Digital Products</h5>
											<span>No:2, 4th Avenue,  Newyork, USA, Near to Airport</span>
										</div>
										<div class="hot-page2-hom-pre-3"> <span>3.2</span>
										</div>
										<a href="listing-details.html" class="fclick"></a>
									</li>
									<!--LISTINGS-->
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="hot-page2-hom-pre-head">
								<h4>Top Branding                                        <span>Hospitals</span></h4>
							</div>
							<div class="hot-page2-hom-pre">
								<ul>
									<!--LISTINGS-->
									<li>
										<div class="hot-page2-hom-pre-1">
											<img src="images/services/11.jpg" alt="">
										</div>
										<div class="hot-page2-hom-pre-2">
											<h5>William Chil care Hospital</h5>
											<span>No:2, 4th Avenue,  Newyork, USA, Near to Airport</span>
										</div>
										<a href="listing-details.html" class="fclick"></a>
									</li>
									<!--LISTINGS-->
									<!--LISTINGS-->
									<li>
										<div class="hot-page2-hom-pre-1">
											<img src="images/services/12.jpeg" alt="">
										</div>
										<div class="hot-page2-hom-pre-2">
											<h5>Urban Community Hospital</h5>
											<span>No:2, 4th Avenue,  Newyork, USA, Near to Airport</span>
										</div>
										<div class="hot-page2-hom-pre-3"> <span>4.0</span>
										</div>
										<a href="listing-details.html" class="fclick"></a>
									</li>
									<!--LISTINGS-->
									<!--LISTINGS-->
									<li>
										<div class="hot-page2-hom-pre-1">
											<img src="images/services/13.jpg" alt="">
										</div>
										<div class="hot-page2-hom-pre-2">
											<h5>Joseph Multispeciality Hospital</h5>
											<span>No:2, 4th Avenue,  Newyork, USA, Near to Airport</span>
										</div>
										<a href="listing-details.html" class="fclick"></a>
									</li>
									<!--LISTINGS-->
									<!--LISTINGS-->
									<li>
										<div class="hot-page2-hom-pre-1">
											<img src="images/services/14.jpg" alt="">
										</div>
										<div class="hot-page2-hom-pre-2">
											<h5>Apolloo Hospitals UAE</h5>
											<span>No:2, 4th Avenue,  Newyork, USA, Near to Airport</span>
										</div>
										<div class="hot-page2-hom-pre-3"> <span>4.0</span>
										</div>
										<a href="listing-details.html" class="fclick"></a>
									</li>
									<!--LISTINGS-->
									<!--LISTINGS-->
									<li>
										<div class="hot-page2-hom-pre-1">
											<img src="images/services/16.jpg" alt="">
										</div>
										<div class="hot-page2-hom-pre-2">
											<h5>Green Healthcare Hospital</h5>
											<span>No:2, 4th Avenue,  Newyork, USA, Near to Airport</span>
										</div>
										<div class="hot-page2-hom-pre-3"> <span>3.0</span>
										</div>
										<a href="listing-details.html" class="fclick"></a>
									</li>
									<!--LISTINGS-->
								</ul>
							</div>
						</div>
						<!--End Top Branding Hotels-->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END -->
	<section>
		<div id="demo" class="carousel slide cate-sli caro-home" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="images/slider/1.jpg" alt="Los Angeles">
					<a href="https://bizbookdirectorytemplate.com/demo.html" target="_blank"></a>
				</div>
				<div class="carousel-item ">
					<img src="images/slider/2.jpg" alt="Los Angeles">
					<a href="https://bizbookdirectorytemplate.com/demo.html" target="_blank"></a>
				</div>
			</div>
			<a class="carousel-control-prev" href="#demo" data-slide="prev"> <span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next"> <span class="carousel-control-next-icon"></span>
			</a>
		</div>
	</section>
	<!-- START -->
	<section>
		<div class="str count">
			<div class="container">
				<div class="row">
					<div class="home-tit">
						<h2><span>Feature Events</span> in city                        </h2>
						<p>lacinia viverra lectus. Fusce imperdiet ullamcorper metus eu fringilla.</p>
					</div>
					<div class="hom-event">
						<div class="hom-eve-com hom-eve-lhs">
							<div class="hom-eve-lhs-1 col-md-4">
								<div class="eve-box">
									<div>
										<a href="event-details.html">
											<img src="images/events/1.png" alt="">
                                            <span><b>Dec 31</b></span>
										</a>
									</div>
									<div>
										<h4>
                                                <a href="event-details.html">Online Marketers Meet-Up</a>
                                            </h4>
										<span class="addr">London, UK</span>
										<span class="pho">6622442200</span>
									</div>
									<div>
										<div class="auth">
											<img src="images/user/1.png" alt=""> <b>Hosted by</b>
											<br>
											<h4>Directory Finder</h4>
											<a target="_blank" href="profile.html" class="fclick"></a>
										</div>
									</div>
								</div>
							</div>
							<div class="hom-eve-lhs-1 col-md-4">
								<div class="eve-box">
									<div>
										<a href="event-details.html">
											<img src="images/events/2.jpg" alt="">
                                            <span><b>Dec 31</b></span>
										</a>
									</div>
									<div>
										<h4>
                                                <a href="event-details.html">New year celebration</a>
                                            </h4>
										<span class="addr">London, UK</span>
										<span class="pho">6622442200</span>
									</div>
									<div>
										<div class="auth">
											<img src="images/user/2.jpeg" alt=""> <b>Hosted by</b>
											<br>
											<h4>Chris moris</h4>
											<a target="_blank" href="profile.html" class="fclick"></a>
										</div>
									</div>
								</div>
							</div>
							<div class="hom-eve-lhs-2 col-md-4">
								<ul>
									<li>
										<div class="eve-box-list">
											<img src="images/events/3.jpeg" alt="">
											<h4 title="Lunar New Year 2020">Lunar New Year 2020</h4>
												<p>Celebrate as the sights, sounds and aromas of A</p> <span>Jan                                                <b> 07</b></span>
												<a href="event-details.html" class="fclick"></a>
										</div>
									</li>
									<li>
										<div class="eve-box-list">
											<img src="images/events/4.jpg" alt="">
											<h4 title="Car Fest 2020">Car Fest 2020</h4>
												<p>Celebrate as the sights, sounds and aromas of A</p> <span>Jan                                                <b> 10</b></span>
												<a href="event-details.html" class="fclick"></a>
										</div>
									</li>
									<li>
										<div class="eve-box-list">
											<img src="images/events/5.jpg" alt="">
											<h4 title="Poway Winter Festival">Poway Winter Festival</h4>
												<p>Celebrate as the sights, sounds and aromas of A</p> <span>Jan                                                <b> 18</b></span>
												<a href="event-details.html" class="fclick"></a>
										</div>
									</li>
									<li>
										<div class="eve-box-list">
											<img src="images/events/6.jpg" alt="">
											<h4 title="Toyota Cars 20% Offer">Toyota Cars 20% Offer</h4>
												<p>Celebrate as the sights, sounds and aromas of A</p> <span>Mar                                                <b> 18</b></span>
												<a href="event-details.html" class="fclick"></a>
										</div>
									</li>
									<li>
										<div class="eve-box-list">
											<img src="images/events/7.jpg" alt="">
											<h4 title="Electrical Energy Saving Methods">Electrical Energy Saving Methods</h4>
												<p>Celebrate as the sights, sounds and aromas of A</p> <span>Jan                                                <b> 31</b></span>
												<a href="event-details.html" class="fclick"></a>
										</div>
									</li>
									<li>
										<div class="eve-box-list">
											<img src="images/events/8.jpeg" alt="">
											<h4 title="Food eating challenge">Food eating challenge</h4>
												<p>Celebrate as the sights, sounds and aromas of A</p> <span>Jan                                                <b> 18</b></span>
												<a href="event-details.html" class="fclick"></a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="how-wrks">
						<div class="home-tit">
							<h2><span>How It Works</span></h2>
							<p>Explore some of the best tips from around the world from our
								<br>partners and friends.lacinia viverra lectus.</p>
						</div>
						<div class="how-wrks-inn">
							<ul>
								<li>
									<div> <span>1</span>
										<img src="images/icon/how1.png" alt="">
										<h4>Create an account</h4>
										<p>Fusce imperdiet ullamcorper metus eu fringilla. from around the world from our partners and friends.</p>
									</div>
								</li>
								<li>
									<div> <span>2</span>
										<img src="images/icon/how2.png" alt="">
										<h4>Add your business</h4>
										<p>Fusce imperdiet ullamcorper metus eu fringilla. from around the world from our partners and friends.</p>
									</div>
								</li>
								<li>
									<div> <span>3</span>
										<img src="images/icon/how3.png" alt="">
										<h4>Get more leads</h4>
										<p>Fusce imperdiet ullamcorper metus eu fringilla. from around the world from our partners and friends.</p>
									</div>
								</li>
								<li>
									<div> <span>4</span>
										<img src="images/icon/how4.png" alt="">
										<h4>Archive goles</h4>
										<p>Fusce imperdiet ullamcorper metus eu fringilla. from around the world from our partners and friends.</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<!--<div class="home-tit">
                    <h2><span></span> </h2>
                    <p></p>
                </div>
                <div class="inte">
                    <ul>
                        <li>
                            <div class="hom-oth">
                                <div>
                                    <img src="images/listings/hot5.jpg" alt="">
                                </div>
                                <div>
                                    <h4>Events</h4>
                                    <span>Email configuration</span>
                                </div>
                                <a href="events" class="fclick"></a>
                            </div>
                        </li>
                        <li>
                            <div class="hom-oth">
                                <div>
                                    <img src="images/listings/re1.jpg" alt="">
                                </div>
                                <div>
                                    <h4>Blog posts</h4>
                                    <span>Email configuration</span>
                                </div>
                                <a href="blog-posts" class="fclick"></a>
                            </div>
                        </li>
                        <li>
                            <div class="hom-oth">
                                <div>
                                    <img src="images/listings/spa3.jpg" alt="">
                                </div>
                                <div>
                                    <h4>How it works</h4>
                                    <span>Email configuration</span>
                                </div>
                                <a href="how-to.html" class="fclick"></a>
                            </div>
                        </li>
                        <li>
                            <div class="hom-oth">
                                <div>
                                    <img src="images/listings/re5.jpg" alt="">
                                </div>
                                <div>
                                    <h4>Pricing details</h4>
                                    <span>Email configuration</span>
                                </div>
                                <a href="pricing-details.html" class="fclick"></a>
                            </div>
                        </li>
                    </ul>
                </div>-->
					<!--<div class="country">
                    <div class="country-inn">
                        <h4>                            <span class="cont2"></span>
                        </h4>
                                                <iframe src="" allowfullscreen=""></iframe>
                    </div>
                </div>-->
					<div class="mob-app">
						<div class="lhs">
							<img src="images/mobile.png" alt="">
						</div>
						<div class="rhs">
							<h2>Looking for the Best Service Provider?                                <span>Get the App!</span></h2>
							<ul>
								<li>HOM-APP-TITFind nearby listings</li>
								<li>Easy service enquiry</li>
								<li>Listing reviews and ratings</li>
								<li>Manage your listing, enquiry and reviews</li>
							</ul> <span>We'll send you a link, to you below provided email id & open it on your smart phone to download the app</span>
							<form>
								<ul>
									<li>
										<input type="email" placeholder="Enter email id" required>
									</li>
									<li>
										<input type="submit" value="Get App Link">
									</li>
								</ul>
							</form>
							<a href="#">
								<img src="images/android.png" alt="">
							</a>
							<a href="#">
								<img src="images/apple.png" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END -->
	<!-- START -->
	<section>
		<div class="hom-ads">
			<div class="container">
				<div class="row">
					<div class="filt-com lhs-ads">
						<div class="ads-box">
							<a href=""> <span>Ad</span>
								<img src="images/ads/ads2.jpg" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END -->
	<!-- START -->
	<div class="ani-quo">
		<div class="ani-q1">
			<h4>What you looking for?</h4>
			<p>We connect you to service experts.</p> <span>Get experts</span>
		</div>
		<div class="ani-q2">
			<img src="images/quote.png" alt="">
		</div>
	</div>
	<!-- END -->
	<!-- START -->
<span class="btn-ser-need-ani">Help & Support</span>
	<div class="ani-quo-form"> <i class="material-icons ani-req-clo">close</i>
		<div class="tit">
			<h3>What service do you need? <span>BizBook will help you</span></h3>
		</div>
		<div class="hom-col-req">
			<div id="home_slide_enq_success" class="log" style="display: none;">
				<p>Your Enquiry Is Submitted Successfully!!!</p>
			</div>
			<div id="home_slide_enq_fail" class="log" style="display: none;">
				<p>Something Went Wrong!!!</p>
			</div>
			<div id="home_slide_enq_same" class="log" style="display: none;">
				<p>You cannot make enquiry on your own listing</p>
			</div>
			<form name="home_slide_enquiry_form" id="home_slide_enquiry_form" method="post" enctype="multipart/form-data">
				<input type="hidden" class="form-control" name="listing_id" value="0" placeholder="" required>
				<input type="hidden" class="form-control" name="listing_user_id" value="0" placeholder="" required>
				<input type="hidden" class="form-control" name="enquiry_sender_id" value="" placeholder="" required>
				<input type="hidden" class="form-control" name="enquiry_source" value="Website" placeholder="" required>
				<div class="form-group">
					<input type="text" name="enquiry_name" value="" required="required" class="form-control" placeholder="Enter name*">
				</div>
				<div class="form-group">
					<input type="email" class="form-control" placeholder="Enter email*" required="required" value="" name="enquiry_email" pattern="^[\w]{1,}[\w.+-]{0,}@[\w-]{2,}([.][a-zA-Z]{2,}|[.][\w-]{2,}[.][a-zA-Z]{2,})$" title="Invalid email address">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" value="" name="enquiry_mobile" placeholder="Enter mobile number *" pattern="[7-9]{1}[0-9]{9}" title="Phone number starting with 7-9 and remaing 9 digit with 0-9" required="">
				</div>
				<div class="form-group">
					<select name="enquiry_category" id="enquiry_category" class="form-control">
						<option value="">Select Category</option>
						<option value="19">Wedding halls</option>
						<option value="18">Hotel & Food</option>
						<option value="17">Pet shop</option>
						<option value="16">Digital Products</option>
						<option value="15">Spa and Facial</option>
						<option value="10">Real Estate</option>
						<option value="8">Sports</option>
						<option value="7">Education</option>
						<option value="6">Electricals</option>
						<option value="5">Automobiles</option>
						<option value="3">Transportation</option>
						<option value="2">Hospitals</option>
						<option value="1">Hotels And Resorts</option>
					</select>
				</div>
				<div class="form-group">
					<textarea class="form-control" rows="3" name="enquiry_message" placeholder="Enter your query or message"></textarea>
				</div>
				<input type="hidden" id="source">
				<button type="submit" id="home_slide_enquiry_submit" name="home_slide_enquiry_submit" class="btn btn-primary">Submit Requirements</button>
			</form>
		</div>
	</div>
	<!-- END -->
	<!-- START -->
	<section>
		<div class="full-bot-book">
			<div class="container">
				<div class="row">
					<div class="bot-book">
						<div class="col-md-2 bb-img">
							<img src="images/idea.png" alt="">
						</div>
						<div class="col-md-7 bb-text">
							<h4>#1 Business Directory and Service Provider</h4>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
						</div>
						<div class="col-md-3 bb-link"> <a href="pricing-details.html">Add my business</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END -->
	<section class=" wed-hom-footer">
		<div class="container">
			<div class="row foot-supp">
				<h2><span>Free support:</span> +01 5426 24400 &nbsp;&nbsp;|&nbsp;&nbsp; <span>Email:</span> rn53themes@gmail.com</h2>
			</div>
			<div class="row wed-foot-link">
				<div class="col-md-4 foot-tc-mar-t-o">
					<h4>Top Category</h4>
					<ul>
						<li><a href="all-listing.html">Digital Products</a>
						</li>
						<li><a href="all-listing.html">Spa and Facial</a>
						</li>
						<li><a href="all-listing.html">Real Estate</a>
						</li>
						<li><a href="all-listing.html">Sports</a>
						</li>
						<li><a href="all-listing.html">Education</a>
						</li>
						<li><a href="all-listing.html">Electricals</a>
						</li>
						<li><a href="all-listing.html">Automobiles</a>
						</li>
						<li><a href="all-listing.html">Transportation</a>
						</li>
					</ul>
				</div>
				<div class="col-md-4">
					<h4>Trending Category</h4>
					<ul>
						<li><a href="all-listing.html">Hospitals</a>
						</li>
						<li><a href="all-listing.html">Hotels And Resorts</a>
						</li>
						<li><a href="all-listing.html">Automobiles</a>
						</li>
						<li><a href="all-listing.html">Hotels And Resorts</a>
						</li>
						<li><a href="all-listing.html">Real Estate</a>
						</li>
						<li><a href="all-listing.html">Sports</a>
						</li>
						<li><a href="all-listing.html">Education</a>
						</li>
						<li><a href="all-listing.html">Electricals</a>
						</li>
					</ul>
				</div>
				<div class="col-md-4">
					<h4>HELP &amp; SUPPORT</h4>
					<ul>
						<li><a href="about.html">About us</a>
						</li>
						<li><a href="faq.html">FAQ</a>
						</li>
						<li><a href="feedback.html">Feedback</a>
						</li>
						<li><a href="contact-us.html">Contact us</a>
						</li>
						<!--                    <li><a href="#">-->
						<!--</a>-->
						<!--                    </li>-->
					</ul>
				</div>
			</div>
			<!-- POPULAR TAGS -->
			<div class="row wed-foot-link-pop">
				<div class="col-md-12">
					<h4>Popular Tags</h4>
					<ul>
						<li><a href="all-listing.html">Wedding halls in London</a>
						</li>
						<li><a href="all-listing.html">Schools in Chennai</a>
						</li>
						<li><a href="dashboard.html">Schools in NewYork</a>
						</li>
						<li><a href="dashboard.html">Real estate in Illunois</a>
						</li>
						<li><a href="dashboard.html">Real estate in Chennai1</a>
						</li>
						<li><a href="dashboard.html">Enents in Tailand</a>
						</li>
						<li><a href="dashboard.html">Flat for rent in Melborn</a>
						</li>
						<li><a href="dashboard.html">Schools in NewYork</a>
						</li>
						<li><a href="dashboard.html">Real estate in Illunois</a>
						</li>
						<li><a href="dashboard.html">Real estate in Chennai1</a>
						</li>
						<li><a href="dashboard.html">Enents in Tailand</a>
						</li>
						<li><a href="dashboard.html">Flat for rent in Melborn</a>
						</li>
						<li><a href="dashboard.html">Schools in NewYork</a>
						</li>
						<li><a href="dashboard.html">Real estate in Illunois</a>
						</li>
						<li><a href="dashboard.html">Real estate in Chennai1</a>
						</li>
						<li><a href="dashboard.html">Enents in Tailand</a>
						</li>
						<li><a href="dashboard.html">Flat for rent in Melborn</a>
						</li>
						<li><a href="dashboard.html">Schools in NewYork</a>
						</li>
						<li><a href="dashboard.html">Real estate in Illunois</a>
						</li>
						<li><a href="dashboard.html">Real estate in Chennai1</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- POPULAR TAGS -->
			<div class="row wed-foot-link-1">
				<div class="col-md-4">
					<h4>Get In Touch</h4>
					<p>Address: 28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</p>
					<p>Phone: <a href="tel:+01 5426 24400">+01 5426 24400</a>
					</p>
					<p>Email: <a href="mailto:rn53themes@gmail.com">rn53themes@gmail.com</a>
					</p>
				</div>
				<div class="col-md-4 fot-app">
					<h4>DOWNLOAD OUR FREE MOBILE APPS</h4>
					<ul>
						<li>
							<a href="">
								<img src="images/gstore.png" alt="">
							</a>
						</li>
						<li>
							<a href="">
								<img src="images/astore.png" alt="">
							</a>
						</li>
					</ul>
				</div>
				<div class="col-md-4 fot-soc">
					<h4>SOCIAL MEDIA</h4>
					<ul>
						<li>
							<a target="_blank" href="">
								<img src="images/social/1.png" alt="">
							</a>
						</li>
						<li>
							<a target="_blank" href="https://twitter.com/Google?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">
								<img src="images/social/2.png" alt="">
							</a>
						</li>
						<li>
							<a target="_blank" href="https://www.facebook.com/Rn53themes-1956793534579530/">
								<img src="images/social/3.png" alt="">
							</a>
						</li>
						<li>
							<a target="_blank" href="">
								<img src="images/social/4.png" alt="">
							</a>
						</li>
						<li>
							<a target="_blank" href="">
								<img src="images/social/5.png" alt="">
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="row foot-count">
				<ul>
					<li><a target="_blank" href="http://www.domainname.au">Australia</a>
					</li>
					<li><a target="_blank" href="http://www.domainname.uk">UK</a>
					</li>
					<li><a target="_blank" href="http://www.domainname.usa">USA</a>
					</li>
					<li><a target="_blank" href="http://www.domainname.in">India</a>
					</li>
					<li><a target="_blank" href="http://www.domainname.ge">Germany</a>
					</li>
					<li><a target="_blank" href="http://www.domainname.ch">China</a>
					</li>
					<li><a target="_blank" href="http://www.domainname.fr">france</a>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- START -->
	<section>
		<div class="cr">
			<div class="container">
				<div class="row">
					<p>Copyright © 2017-2021 <a href="https://rn53themes.net/" target="_blank">Rn53 Themes</a>. Proudly powered by <a href="https://rn53themes.net/" target="_blank">Rn53Themes.net</a>
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- END -->
	<!-- START -->
	<div class="fqui-menu">
		<ul>
			<li>
				<a href="index.html">
					<img src="images/icon/home.png">Home</a>
			</li>
			<li><span class="mob-sear"><img src="images/icon/search1.png">Search</span>
			</li>
			<li>
				<a href="all-category.html" class="act">
					<img src="images/icon/shop.png">Services</a>
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
					<img src="images/icon/coupons.png">Coupons</a>
			</li>
			<li>
				<a href="blog-posts.html">
					<img src="images/icon/blog1.png">Bolgs</a>
			</li>
			<li>
				<a href="community.html">
					<img src="images/icon/11.png">Community</a>
			</li>
			<li><span class="btn-ser-need-ani"><img src="images/icon/how1.png">Support</span>
			</li>
		</ul>
	</div>
	<!-- END -->
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->


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
