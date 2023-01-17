@extends ('layout.user')
@section ('content')

  <!-- hero-section -->
  <section class="hero-section about gap">
		<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-6 col-lg-12" data-aos="fade-up"  data-aos-delay="200" data-aos-duration="300">
						<div class="about-text">
							<ul class="crumbs d-flex">
								<li><a href="/">Home</a></li>
								<li class="two"><a href="contact"><i class="fa-solid fa-right-long"></i>Contacts</a></li>
							</ul>
							<h2>{!! $pagetitle->judul_contact !!}</h2>
							<p>{!! $pagetitle->deskripsi_contact !!}</p>
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-12">
								<div class="address">
									<i class="fa-solid fa-location-dot"></i>
									<h5>{!! $pagetitle->alamat_contact !!}</h5>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12">
								<div class="address">
									<i class="fa-solid fa-envelope"></i>
									<a href="mailto:quick.info@mail.net"><h6 style="font-size: 12px;">{!! $pagetitle->email_contact !!}</h6></a>								
                                </div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12">
								<div class="address">
									<i class="fa-solid fa-phone"></i>
									<a href="callto:{!! $pagetitle->telp_contact !!}"><h6>{!! $pagetitle->telp_contact !!}</h6></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-12" data-aos="fade-up"  data-aos-delay="300" data-aos-duration="400">
					<div class="contact-us-img">
						<img alt="contacts-img-girl" src="{{ asset('storage/'. $pagetitle->gambar_contact) }}">
                        {{-- width: 546px; height: 447px; --}}
					</div>

				</div>
				</div>
		</div>
  </section>
  <!-- contact map -->
  <section class="gap no-top">
  	<div class="container">
  		<div class="row">
  			<div class="col-lg-12" data-aos="fade-up"  data-aos-delay="300" data-aos-duration="400">
  				<div class="contact-map-data">
						<div class="join-courier content">
							<h3>Get in touch with us</h3>
							<p>Magna sit amet purus gravida quis blandit turpis cursus. Venenatis tellus in metus vulputate eu scelerisque felis.</p>
							<form class="blog-form" action="email" method="GET">
								@csrf
								<div class="name-form">
									<i class="fa-regular fa-user"></i>
									<input type="text" name="name" placeholder="Enter your name" required>
								</div>
								<div class="name-form">
									<i class="fa-regular fa-envelope"></i>
									<input type="text" name="email" placeholder="Enter your email" required>
								</div>
								<textarea placeholder="Enter your message" name="msg" required></textarea>
								<button class="button-price" type="submit">Submit Application</button>
							</form>

						</div>
						<div class="contact-map">
							{!! $pagetitle->map !!}
            </div>
          </div>
				</div>
  		</div>
  	</div>
  </section>
  <!-- subscribe-section -->
  <section class="subscribe-section gap" style="background:#fcfcfc">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6" data-aos="flip-up"  data-aos-delay="200" data-aos-duration="300">
          <div class="img-subscribe">
            <img alt="{!! $pagetitle->judul_subscribe !!}" src="{{ asset('storage/'. $pagetitle->gambar_subscribe) }}" title="{!! $pagetitle->judul_subscribe !!}" style="width: 100%; height: 403px;">
            {{-- width: 676px; height: 403px; --}}
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1" data-aos="flip-up"  data-aos-delay="300" data-aos-duration="400">
          <div class="get-the-menu">
            <h2>{!! $pagetitle->judul_subscribe !!}</h2>
            <form action="{{ route('emails.store') }}" method="POST">
				@csrf
              <i class="fa-regular fa-bell"></i>
              <input type="text" name="email" placeholder="Enter email address">
              <button class="button button-2" type="submit">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection