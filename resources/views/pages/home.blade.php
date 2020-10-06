@extends('layouts.app')

@section('title')
    Dewa Travel
@endsection
@section('content')
     <!-- Awal Header -->
  <header class="text-center">
    <h1>
      Explore The Beautiful Word
      <br />
      As Easy One Click
    </h1>
    <p class="mt-3">
      You will see beautiful
      <br />
      Moment you never see before
    </p>
    <a href="#popular" class="btn btn-get-started px-4 mt-4">
      Get Started
    </a>
  </header>
  <!-- Akhir Header -->

  <!-- awal main -->
  <main>
    <!-- statistik -->
    <div class="container">
      <section class="section-stats row justify-content-center" id="stats">
        <!-- mobile colomnya 3 col-3 klo di tablet pc colomnya 2 col-md-2 -->
        <div class="col-3 col-md-2 stats-detail">
          <h2>20K</h2>
          <p>Members</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>12</h2>
          <p>Contries</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>3K</h2>
          <p>Hotel</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>72</h2>
          <p>Partner</p>
        </div>
      </section>
    </div>
    <!-- statistik -->

    <!-- Popular Content -->
    <section class="section-popular" id="popular">
      <div class="container">
        <div class="row">
          <div class="col text-center section-popular-heading">
            <h2>Wisata Popular</h2>
            <p>
              Something that you never try
              <br />
              before to this word
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="section-popular-content" id="popularContent">
      <div class="container">
        <div class="section-popular-travel row justifly-content-center">
          @foreach ($items as $item)
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column"
              style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}');">
              <div class="travel-country">{{ $item->location }}</div>
              <div class="travel-location">{{ $item->title }}</div>
              <div class="travel-button mt-auto">
                <a href="{{ route('detail',$item->slug) }}" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- Akhir Popular Content -->

    <!-- Awal Section -->
    <section class="section-networks">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2>Out Networks</h2>
            <p>
              Companies are trusted us
              <br />
              More than just a trip
            </p>
          </div>
          <div class="col-md-8 text-center">
            <img src="frondend/images/partner.png" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Section -->

    <!-- awal testimonia -->
    <section id="testimonialHeading" class="section-testimonial-heading">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h2>They are loving us</h2>
            <p>
              Moments were giving them
              <br />
              The best experience
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- ahir testimonial -->

    <!-- testimonial content -->
    <section class="section section-testimonial-content" id="testimonialContent">
      <div class="container">
        <div class="section-popular-travel row justify-content-center">

          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img src="frondend/images/testi.png" alt="user" class="mb-4 rounded-circle" />
                <h1 class="mb-4">Wanda Suwanda</h1>
                <p class="testimonial">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Explicabo totam reiciendis iste doloribus excepturi illum
                  expedita accusamus
                </p>
              </div>
              <hr />
              <p class="trip-to mt-2">
                Trip to cirebon
              </p>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img src="frondend/images/testi.png" alt="user" class="mb-4 rounded-circle" />
                <h1 class="mb-4">Wanda Suwanda</h1>
                <p class="testimonial">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Explicabo totam reiciendis iste doloribus excepturi illum
                  expedita accusamus
                </p>
              </div>
              <hr />
              <p class="trip-to mt-2">
                Trip to cirebon
              </p>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img src="frondend/images/testi.png" alt="user" class="mb-4 rounded-circle" />
                <h1 class="mb-4">Wanda Suwanda</h1>
                <p class="testimonial">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Explicabo totam reiciendis iste doloribus excepturi illum
                  expedita accusamus
                </p>
              </div>
              <hr />
              <p class="trip-to mt-2">
                Trip to cirebon
              </p>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-12 text-center">
            <a href="" class="btn btn-need-help px-4 mt-4 mx-1">
              I Need Help
            </a>
            <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4 mx-1">
              Get Started
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- testimonial content -->
  </main>
  <!-- akhir main -->
@endsection