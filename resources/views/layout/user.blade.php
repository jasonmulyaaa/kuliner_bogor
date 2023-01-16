<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{!! $page !!}</title>
  <meta name="keywords" content="{!! $konfigurasi->keywords !!}">
  <meta name="title" content="{!! $konfigurasi->title !!}" />
  <meta name="search engines" content="{!! $konfigurasi->search_engine !!}">
  <meta name="author" content="{!! $konfigurasi->author !!}">
  <meta name="website" content="{!! $konfigurasi->website !!}">
  <link rel="icon" href="{{ asset('storage/'. $konfigurasi->favicon) }}">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<!-- owl carousel -->
  <link rel="stylesheet" href="{{ asset('') }}assets/user/css/owl.carousel.min.css">
  <link rel="stylesheet" href="{{ asset('') }}assets/user/css/owl.theme.default.min.css">
  <!-- nice-select -->
  <link rel="stylesheet" href="{{ asset('') }}assets/user/css/nice-select.css">
  <!-- aos -->
  <link rel="stylesheet" href="{{ asset('') }}assets/user/css/aos.css">
  <!-- style -->
  <link rel="stylesheet" href="{{ asset('') }}assets/user/css/style.css">
  <!-- responsive -->
  <link rel="stylesheet" href="{{ asset('') }}assets/user/css/responsive.css">
	<!-- color -->
  <link rel="stylesheet" href="{{ asset('') }}assets/user/css/color.css">


	<!-- Font Awesome 5 -->
	<script src="https://kit.fontawesome.com/27a041baf1.js" crossorigin="anonymous"></script>
	<style>
		.button-logout {
    color: white;
    width: 100%;
    padding: 15px;
    border-radius: 15px;
    border: 1px solid #ff2424;
    background-color: #ff2424;
}
.button-logout i {
    padding-left: 20px;
}
.button-logout:hover {
    background-color: transparent;
    color: #ff2424;

}
	</style>
</head>
<body class="menu-layer">

	<!-- loader start-->
	<div class="page-loader">
		<div class="wrapper">
	        <div class="circle"></div>
	        <div class="circle"></div>
	        <div class="circle"></div>
	        <div class="shadow"></div>
	        <div class="shadow"></div>
	        <div class="shadow"></div>
	        <span>Loading</span>
	    </div>
	</div>
	<!-- loader end-->

	<!-- header -->
	<header>
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-2">
					<div class="header-style">
						<a href="index.html">
							<!-- <svg xmlns="http://www.w3.org/2000/svg" width="163" height="38" viewBox="0 0 163 38">
								<g id="Logo" transform="translate(-260 -51)">
									<g id="Logo-2" data-name="Logo" transform="translate(260 51)">
									<g id="Elements">
										<path id="Path_1429" data-name="Path 1429" d="M315.086,140.507H275.222v-.894c0-11.325,8.941-20.538,19.933-20.538s19.931,9.213,19.931,20.538Z" transform="translate(-270.155 -115.396)" fill="#f29f05"/>
										<path id="Path_1430" data-name="Path 1430" d="M301.13,133.517a1.488,1.488,0,0,1-1.394-.994,11.361,11.361,0,0,0-10.583-7.54,1.528,1.528,0,0,1,0-3.055,14.353,14.353,0,0,1,13.37,9.527,1.541,1.541,0,0,1-.875,1.966A1.444,1.444,0,0,1,301.13,133.517Z" transform="translate(-264.176 -113.935)" fill="#fff"/>
										<path id="Path_1431" data-name="Path 1431" d="M297.343,146.544a14.043,14.043,0,0,1-13.837-14.211h2.975a10.865,10.865,0,1,0,21.723,0h2.975A14.043,14.043,0,0,1,297.343,146.544Z" transform="translate(-266.247 -108.544)" fill="#363636"/>
										<path id="Path_1432" data-name="Path 1432" d="M302.183,132.519a7.064,7.064,0,1,1-14.122,0Z" transform="translate(-264.027 -108.446)" fill="#363636"/>
										<path id="Path_1433" data-name="Path 1433" d="M320.332,134.575H273.3a1.528,1.528,0,0,1,0-3.055h47.033a1.528,1.528,0,0,1,0,3.055Z" transform="translate(-271.815 -108.923)" fill="#f29f05"/>
										<path id="Path_1434" data-name="Path 1434" d="M289.154,123.4a1.507,1.507,0,0,1-1.487-1.528v-3.678a1.488,1.488,0,1,1,2.975,0v3.678A1.508,1.508,0,0,1,289.154,123.4Z" transform="translate(-264.154 -116.667)" fill="#f29f05"/>
										<path id="Path_1435" data-name="Path 1435" d="M284.777,138.133H275.3a1.528,1.528,0,0,1,0-3.055h9.474a1.528,1.528,0,0,1,0,3.055Z" transform="translate(-270.84 -107.068)" fill="#363636"/>
										<path id="Path_1436" data-name="Path 1436" d="M284.8,141.691h-6.5a1.528,1.528,0,0,1,0-3.055h6.5a1.528,1.528,0,0,1,0,3.055Z" transform="translate(-269.379 -105.218)" fill="#363636"/>
									</g>
									</g>
									<text id="Quickeat" transform="translate(320 77)" fill="#363636" font-size="20" font-family="Poppins" font-weight="700"><tspan x="0" y="0">QUICK</tspan><tspan y="0" fill="#f29f05">EAT</tspan></text>
								</g>
							</svg> -->
							<div class="image">
  										<a href="/"><img src="{{ asset('storage/'. $konfigurasi->nav_img) }}" alt="{!! $konfigurasi->title !!}" class="img-responsive" title="{!! $konfigurasi->title !!}" style="width: 100%; height: 150px; object-fit: contain;"></a>
  									</div>
						</a>
						{{-- <div class="extras bag">
	           				<a href="javascript:void(0)" class="menu-btn">
		                       <i class="fa-solid fa-bag-shopping"></i>
		                   </a>
		                   <div class="bar-menu">
		                   	<i class="fa-solid fa-bars"></i>
		                   </div>
						</div> --}}
					</div>
				</div>
				<div class="col-lg-7">
					<nav class="navbar">
				      <ul class="navbar-links">
				        <li class="navbar-dropdown ">
				          <a href="/">Home</a>
				        </li>
						<li class="navbar-dropdown ">
				          <a href="{{ route('restoran.index') }}">Restaurant</a>
				        </li>
				        <li class="navbar-dropdown">
				          <a href="{{ route('blogs.index') }}">Blog</a>
				        </li>
				        <li class="navbar-dropdown">
				          <a href="{{ route('contactus.index') }}">Contacts</a>
				        </li>
				      </ul>
				    </nav>
				</div>
				<div class="col-lg-3">
					<div class="extras bag">
			@if (auth()->check())
			{{-- <div class="wilmington location-restaurant"> --}}
			<a href="javascript:void(0)" id="desktop-menu" class="menu-btn"><i class="fa-solid fa-user" style="padding: 20px; background-color: #F29F05; color: white;"></i></a>
			{{-- </div> --}}
			@else
			<a href="#" class="button button-2">Login</a>
			@endif
					</div>
				</div>
				<div class="menu-wrap">
					<div class="menu-inner ps ps--active-x ps--active-y">
					  <span class="menu-cls-btn"><i class="cls-leftright"></i><i class="cls-rightleft"></i></span>
					  <div class="checkout-order">
							 <div class="title-checkout">
								 <h2>Account</h2>
							 </div>
							 <div class="banner-wilmington">
								 {{-- <img alt="logo" src="https://via.placeholder.com/50x50"> --}}
								 <h6>{!! Auth::user()->username !!}</h6>
							 </div>
							 <div class="button-gap">
								<a href="{{ route('dashboard.index') }}" class="button button-price" style="width: 100%; padding: 0;">Dashboard<i class="fa-solid fa-gauge"></i></a>
							  </div>
							 <div class="button-gap">
								<a href="{{ route('setting.index') }}" class="button button-price" style="width: 100%; padding: 0;">Edit Profile<i class="fa-solid fa-user"></i></a>
							</div>
							<div class="button-gap">
								<form action="{{ route('logout') }}" method="post">
									@csrf
								<button method="post" class="button button-logout" style="width: 100%; padding: 0;">Logout<i class="fa-solid fa-right-from-bracket"></i></button>
								</form>
							</div>
						 </div>
					  </div>
				   </div>

         	 <div class="mobile-nav hmburger-menu" id="mobile-nav" style="display:block;">


            <div class="res-log">
            	<a href="index.html">
              		<svg xmlns="http://www.w3.org/2000/svg" width="163" height="38" viewBox="0 0 163 38">
<g id="Logo" transform="translate(-260 -51)">
<g id="Logo-2" data-name="Logo" transform="translate(260 51)">
<g id="Elements">
<path id="Path_1429" data-name="Path 1429" d="M315.086,140.507H275.222v-.894c0-11.325,8.941-20.538,19.933-20.538s19.931,9.213,19.931,20.538Z" transform="translate(-270.155 -115.396)" fill="#f29f05"/>
<path id="Path_1430" data-name="Path 1430" d="M301.13,133.517a1.488,1.488,0,0,1-1.394-.994,11.361,11.361,0,0,0-10.583-7.54,1.528,1.528,0,0,1,0-3.055,14.353,14.353,0,0,1,13.37,9.527,1.541,1.541,0,0,1-.875,1.966A1.444,1.444,0,0,1,301.13,133.517Z" transform="translate(-264.176 -113.935)" fill="#fff"/>
<path id="Path_1431" data-name="Path 1431" d="M297.343,146.544a14.043,14.043,0,0,1-13.837-14.211h2.975a10.865,10.865,0,1,0,21.723,0h2.975A14.043,14.043,0,0,1,297.343,146.544Z" transform="translate(-266.247 -108.544)" fill="#363636"/>
<path id="Path_1432" data-name="Path 1432" d="M302.183,132.519a7.064,7.064,0,1,1-14.122,0Z" transform="translate(-264.027 -108.446)" fill="#363636"/>
<path id="Path_1433" data-name="Path 1433" d="M320.332,134.575H273.3a1.528,1.528,0,0,1,0-3.055h47.033a1.528,1.528,0,0,1,0,3.055Z" transform="translate(-271.815 -108.923)" fill="#f29f05"/>
<path id="Path_1434" data-name="Path 1434" d="M289.154,123.4a1.507,1.507,0,0,1-1.487-1.528v-3.678a1.488,1.488,0,1,1,2.975,0v3.678A1.508,1.508,0,0,1,289.154,123.4Z" transform="translate(-264.154 -116.667)" fill="#f29f05"/>
<path id="Path_1435" data-name="Path 1435" d="M284.777,138.133H275.3a1.528,1.528,0,0,1,0-3.055h9.474a1.528,1.528,0,0,1,0,3.055Z" transform="translate(-270.84 -107.068)" fill="#363636"/>
<path id="Path_1436" data-name="Path 1436" d="M284.8,141.691h-6.5a1.528,1.528,0,0,1,0-3.055h6.5a1.528,1.528,0,0,1,0,3.055Z" transform="translate(-269.379 -105.218)" fill="#363636"/>
</g>
</g>
<!-- <text id="Quickeat" transform="translate(320 77)" fill="#363636" font-size="20" font-family="Poppins" font-weight="700"><tspan x="0" y="0">QUICK</tspan><tspan y="0" fill="#f29f05">EAT</tspan></text> -->
</g>
</svg>
            	</a>
          	</div>
			<ul>

				  <li><a href="/">Home</a>
				  </li>


                  <li ><a href="{{ route('restoran.index') }}">Restaurants</a>

                   </li>
					<li ><a href="{{ route('blogs.index') }}">Blogs</a>

                   </li>

                  <li><a href="{{ route('contactus.index') }}">Contacs</a></li>

                </ul>

          <a href="JavaScript:void(0)" id="res-cross"></a>
      </div>
		</div>
	   </div>
  </header>

  @yield('content')

  	<!-- footer -->
	<footer class="gap no-bottom" style="background-color: #363636;">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-6 col-sm-12">
					<div class="footer-description">
						<a href="index.html">
							<!-- <svg xmlns="http://www.w3.org/2000/svg" width="163" height="38" viewBox="0 0 163 38">
								<g id="Logo" transform="translate(-260 -51)">
									<g id="Logo-2" data-name="Logo" transform="translate(260 51)">
									<g id="Elements">
										<path id="Path_1429" data-name="Path 1429" d="M315.086,140.507H275.222v-.894c0-11.325,8.941-20.538,19.933-20.538s19.931,9.213,19.931,20.538Z" transform="translate(-270.155 -115.396)" fill="#f29f05"/>
										<path id="Path_1430" data-name="Path 1430" d="M301.13,133.517a1.488,1.488,0,0,1-1.394-.994,11.361,11.361,0,0,0-10.583-7.54,1.528,1.528,0,0,1,0-3.055,14.353,14.353,0,0,1,13.37,9.527,1.541,1.541,0,0,1-.875,1.966A1.444,1.444,0,0,1,301.13,133.517Z" transform="translate(-264.176 -113.935)" fill="#fff"/>
										<path id="Path_1431" data-name="Path 1431" d="M297.343,146.544a14.043,14.043,0,0,1-13.837-14.211h2.975a10.865,10.865,0,1,0,21.723,0h2.975A14.043,14.043,0,0,1,297.343,146.544Z" transform="translate(-266.247 -108.544)" fill="#fff"/>
										<path id="Path_1432" data-name="Path 1432" d="M302.183,132.519a7.064,7.064,0,1,1-14.122,0Z" transform="translate(-264.027 -108.446)" fill="#fff"/>
										<path id="Path_1433" data-name="Path 1433" d="M320.332,134.575H273.3a1.528,1.528,0,0,1,0-3.055h47.033a1.528,1.528,0,0,1,0,3.055Z" transform="translate(-271.815 -108.923)" fill="#f29f05"/>
										<path id="Path_1434" data-name="Path 1434" d="M289.154,123.4a1.507,1.507,0,0,1-1.487-1.528v-3.678a1.488,1.488,0,1,1,2.975,0v3.678A1.508,1.508,0,0,1,289.154,123.4Z" transform="translate(-264.154 -116.667)" fill="#f29f05"/>
										<path id="Path_1435" data-name="Path 1435" d="M284.777,138.133H275.3a1.528,1.528,0,0,1,0-3.055h9.474a1.528,1.528,0,0,1,0,3.055Z" transform="translate(-270.84 -107.068)" fill="#fff"/>
										<path id="Path_1436" data-name="Path 1436" d="M284.8,141.691h-6.5a1.528,1.528,0,0,1,0-3.055h6.5a1.528,1.528,0,0,1,0,3.055Z" transform="translate(-269.379 -105.218)" fill="#fff"/>
									</g>
									</g>
									<text id="Quickeat" transform="translate(320 77)" fill="#fff" font-size="20" font-family="Poppins" font-weight="700"><tspan x="0" y="0">QUICK</tspan><tspan y="0" fill="#f29f05">EAT</tspan></text>
								</g>
							</svg> -->
									<div class="image">
  										<a href="/"><img src="{{ asset('storage/'. $konfigurasi->footer_img) }}" alt="{!! $konfigurasi->title !!}" title="{!! $konfigurasi->title !!}" class="img-responsive" style="widtH: 50%; height: 150px; object-fit: contain;"></a>
  									</div>
						</a>
						<h2>{!! $konfigurasi->title !!}</h2>
						<p>{!! $konfigurasi->footer_desc !!}</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="menu">
						<h4>Menu</h4>
						<ul class="footer-menu">
							<li><a href="/">home<i class="fa-solid fa-arrow-right"></i></a></li>
							<li><a href="{{ route('restoran.index') }}">Restoran<i class="fa-solid fa-arrow-right"></i></a></li>
							<li><a href="{{ route('blogs.index') }}">Blogs<i class="fa-solid fa-arrow-right"></i></a></li>
							<li><a href="{{ route('contactus.index') }}">Contacts<i class="fa-solid fa-arrow-right"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="menu contacts">
						<h4>Contacts</h4>
						<div class="footer-location">
							<i class="fa-solid fa-location-dot"></i>
							<p>{!! $pagetitle->alamat_contact !!}</p>
						</div>
						<a href="mailto:{!! $pagetitle->email_contact !!}"><i class="fa-solid fa-envelope"></i>{!! $pagetitle->email_contact !!}</a>
						<a href="callto:{!! $pagetitle->telp_contact !!}"><i class="fa-solid fa-phone"></i>{!! $pagetitle->telp_contact !!}</a>
					</div>
					<ul class="social-media">
							<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
						</ul>
				</div>
			</div>
			<div class="footer-two gap no-bottom">
				<p>Copyright © 2022. Quickeat. All rights reserved.</p>
				<div class="privacy">
					<a href="#">Privacy Policy</a>
					<a href="#">Terms & Services</a>
				</div>
			</div>
		</div>
	</footer>
	<!-- bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<!-- jQuery -->
	<script src="{{ asset('') }}assets/user/js/jquery-3.6.0.min.js"></script>
	<script src="{{ asset('') }}assets/user/js/jquery.nice-select.min.js"></script>
	<!-- owl.carousel -->
	<script src="{{ asset('') }}assets/user/js/owl.carousel.min.js"></script>
	<!-- aos -->
	<script src="{{ asset('') }}assets/user/js/aos.js"></script>
	<!-- custom -->
	<script src="{{ asset('') }}assets/user/js/custom.js"></script>
</body>