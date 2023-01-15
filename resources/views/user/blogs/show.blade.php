@extends ('layout.user')
@section ('content')

<!-- hero-section -->
<section class="hero-section about single-blog gap" style="background-image: url(assets/img/background-3.png);" data-aos="flip-up"  data-aos-delay="300" data-aos-duration="400">
			<div class="container">
				<div class="row align-items-center">
					<div class="offset-xl-2 col-xl-6 col-lg-12">
						<div class="about-text">
							<ul class="crumbs d-flex">
								<li><a href="/">Home</a></li>
								<li><a href="{{ route('blogs.index') }}"><i class="fa-solid fa-right-long"></i>blog</a></li>
								<li class="two"><a href="showblog"><i class="fa-solid fa-right-long"></i>Single Blog Page</a></li>
							</ul>
							<h2>{!! $blog->title !!}!</h2>
							<ul class="data">
								<li><h6><i class="fa-regular fa-calendar-days"></i>{!! $blog->date !!}</h6></li>
								<li><h6><i class="fa-solid fa-eye"></i>{!! $blog->view !!}</h6></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="img-blog-full">
							<img alt="{!! $blog->title !!}" src="{{ asset('storage/'. $blog->image) }}" style="width: 100%; height: 584px;" title="{!! $blog->title !!}">
                            {{-- width: 1116px height: 584px; --}}
						</div>
					</div>
				</div>
			</div>
  </section>

 <!-- blog-content -->
 <section class="blog-content gap no-top">
  	<div class="container">
  		<div class="row">
  			<div class="offset-xl-2 col-xl-8 col-lg-12">
  				<div class="title-container">
  					<p>{!! $blog->desc !!}</p><br>
	  				<h6 class="data">Created:  {!! $blog->date !!}</h6>
	  				<div class="quickeat tags">
                        @foreach (explode(',', $blog->tag) as $tag)
                            
						<a href="#">{!! $tag !!}</a>
                        @endforeach
									</div>
		  			</div><br>
	  			<div class="comment">
	  				<h2>Leave your comment</h2>
	  				<form class="comment-blog">
	  					<textarea placeholder="Enter you comment"></textarea>
	  					<div class="row">
	  						<div class="col-lg-6">
	  							<input type="text" name="name" placeholder="Your Name">
	  						</div>
	  						<div class="col-lg-6">
	  							<input type="text" name="Email" placeholder="Email Address">
	  						</div>
	  					</div>
	  					<button class="button-price">Publish a comment</button>
	  				</form>
	  			</div>
  			</div>
  		</div>
  	</div>
  </section>

@endsection