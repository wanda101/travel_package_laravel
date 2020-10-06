@extends('layouts.app')
@section('title')
    Detail Travel
@endsection
@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
      <div class="container">
        <div class="row">
          <div class="col p-0">
            <nav>
              <ul class="breadcrumb">
                <li class="breadcrumb-item">Paket Travel</li>
                <li class="breadcrumb-item active">Details</li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 pl-lg-0">
            <div class="card card-details">
              <h1>{{ $item->title }}</h1>
              <p>
                {{ $item->location }}
              </p>
              @if ($item->galleries->count())
              <div class="gallery">
                <div class="xzoom-container">
                  <img src="{{ Storage::url($item->galleries->first()->image) }}" class="xzoom" id="xzoom-default"
                    xoriginal="{{ Storage::url($item->galleries->first()->image) }}" alt="">
                </div>
                <div class="xzoom-thumbs">
                  @foreach ($item->galleries as $gallery)
                  <a href="{{ Storage::url($gallery->image) }}">
                    <img src="{{ Storage::url($gallery->image) }}" alt="" class="xzoom-gallery" width="120"
                      xpreview="{{ Storage::url($gallery->image) }}">
                  </a>
                  @endforeach
                </div>
              </div>
              @endif
              <h2>Tentang Wisata</h2>
              <p>
                {!! $item->about !!}
              </p>
              <div class="features row">
                <div class="col-md-4">
                  <div class="description">
                    <img src="{{ url('frondend/images/ic_event.png') }}" class="features-image" alt="">
                    <div class="description">
                      <h2>Event</h2>
                      <p>{{ $item->featured_event }}</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 border-left">
                  <div class="description">
                    <img src="{{ url('frondend/images/ic_bahasa.png') }}" class="features-image" alt="">
                    <div class="description">
                      <h2>laguage</h2>
                      <p>{{ $item->language }}</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 border-left">
                  <div class="description">
                    <img src="{{ url('frondend/images/ic_foods.png') }}" class="features-image" alt="">
                    <div class="description">
                      <h2>Foods</h2>
                      <p>{{ $item->foods }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-details card-right">
              <h2>Members Are Going</h2>
              <div class="member my-2">
                <img src="{{ url('frondend/images/testi.png') }}" class="member-image mr-1" alt="">
                <img src="{{ url('frondend/images/testi.png') }}" class="member-image mr-1" alt="">
                <img src="{{ url('frondend/images/testi.png') }}" class="member-image mr-1" alt="">
                <img src="{{ url('frondend/images/testi.png') }}" class="member-image mr-1" alt="">
                <img src="{{ url('frondend/images/testi.png') }}" class="member-image mr-1" alt="">
              </div>
              <hr>
              <h2>Trip Informasion</h2>
              <table class="trip-informations">
                <tr>
                  <th width="50%">Date of departure</th>
                  <td width="50%" class="text-right">
                    {{ \Carbon\Carbon::create($item->date_of_departure)->format('F n, Y') }}
                  </td>
                </tr>
                <tr>
                  <th width="50%">Duration</th>
                  <td width="50%" class="text-right">
                    {{ $item->duration }}
                  </td>
                </tr>
                <tr>
                  <th width="50%">Type</th>
                  <td width="50%" class="text-right">
                    {{ $item->type }}
                  </td>
                </tr>
                <tr>
                  <th width="50%">Price</th>
                  <td width="50%" class="text-right">
                    {{ $item->price }},00 / Person
                  </td>
                </tr>
              </table>
            </div>
            <div class="join-container">
              @auth
                  <form  action="{{ route('checkout_process', $item->id) }}" method="post" >
                    @csrf
                    <button class="btn btn-block btn-join-now mt-3 py-2" type="submit" >
                      Join Now
                    </button>
                  </form>
              @endauth

              @guest
              <a href="{{ route('login') }}" class="btn btn-block btn-join-now mt-3 py-2">
                Login Or Register to Join
              </a>
              @endguest
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url('frondend/libraries/xZoom-master/dist/xzoom.css') }}" />
@endpush

@push('addon-script')
<script src="{{ url('frondend/libraries/xZoom-master/dist/xzoom.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomwidth: 500,
            title: false,
            tint: '#333',
            xoffset: 15
        });
    });

</script>
@endpush