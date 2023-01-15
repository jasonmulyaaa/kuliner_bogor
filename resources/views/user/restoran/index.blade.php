@extends ('layout.user')
@section ('content')
<?php
use App\Models\Category;
?>
<!-- hero-section -->
<section class="hero-section about gap">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-up"  data-aos-delay="200" data-aos-duration="300">
              <div class="about-text">
                <ul class="crumbs d-flex">
                  <li><a href="index.html">Home</a></li>
                  <li class="two"><a href="index.html"><i class="fa-solid fa-right-long"></i>Restaurants</a></li>
                </ul>
                <h2>{!! $pagetitle->judul_resto !!}</h2>
                <p>{!! $pagetitle->deskripsi_resto !!}</p>
                <div class="restaurant">
                  <div class="nice-select-one">
                    <select class="nice-select Advice">
                      <option>Choose a Restaurant</option>
                      @foreach ($categoryresto as $categoryresto)
                      <option><a href="{{ route('categoryrestoran.show', $categoryresto->slug) }}">{!! $categoryresto->category !!}</a></option>
                      @endforeach
                  </select>

                  </div>
                </div>
              </div>
            </div> 
            <div class="col-lg-6" data-aos="fade-up"  data-aos-delay="300" data-aos-duration="400">
                <div class="restaurants-girl-img food-photo-section">
                    <img alt="man" src="{{ asset('storage/'. $pagetitle->gambar_resto) }}">
                    {{-- width: 676px; height: 585px; --}}
                </div>
            </div>
          </div>
        </div>
  </section>
  <!-- banner -->
  <section class="banner" data-aos="fade-up"  data-aos-delay="200" data-aos-duration="300">
    <div class="container">
      <div class="banner-img" style="background-image: url({{ asset('storage/'. $topproduct->image) }}); background-size: cover;">
        {{-- width: 1400px; height: 393px --}}
        <div class="banner-logo">
          <h4>Restaurant<br>of the Month
          <span class="chevron chevron--left"></span>
        </h4>
        </div>

        <div class="row">
          <div class="col-xl-6 col-lg-12">
            <div class="choose-lunches">

              <h2>{!! $topproduct->title !!}</h2>
              <h3>Rp. {!! $topproduct->harga !!}</h3>
              <a href="#" class="button button-2 non">Order Now<i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- best-restaurants -->
  <section class="best-restaurants gap">
    <div class="container">
      <div class="row">
        @php
            $i = 200;
            $a = 300;
        @endphp
        @foreach ($product as $product)
            
        <div class="col-lg-6" data-aos="flip-up"  data-aos-delay="{!! $i++ !!}" data-aos-duration="{!! $a++ !!}">
          <div class="logos-card restaurant-page ">
            <img alt="{!! $product->title !!}" src="{{ asset('storage/'. $product->image) }}" style="width: 100px; height: 100px; object-fit: cover;" title="{!! $product->title !!}">
              <div class="cafa">
                <h4><a href="{{ route('restoran.show', $product->slug) }}">{!! $product->title !!}</a></h4>
                <div>
                    @for ($o = 1; $o <= $product->rating; $o++)
                  <i class="fa-solid fa-star"></i>
                  @endfor
                  @php
                      $maks = 5 - $product->rating;
                  @endphp
                  @for ($p = 1; $p <= $maks; $p++)
                  <i class="fa-regular fa-star"></i>
                  @endfor
                </div>
                <div class="cafa-button">
                    @php
                        $kategoriproduct = Category::where('id', $product->category)->first();
                    @endphp
                    <a href="{{ route('categoryrestoran.show', $kategoriproduct->slug) }}">{!! $kategoriproduct->category !!}</a>
                </div>
                <p>{!! substr($product->desc, 0, 100) !!}</p>
              </div>
          </div>
        </div>
        @endforeach

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
            <form>
              <i class="fa-regular fa-bell"></i>
              <input type="text" name="email" placeholder="Enter email address">
              <button class="button button-2">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection