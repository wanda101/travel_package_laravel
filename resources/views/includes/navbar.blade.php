<!-- awal Navbar -->
<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
      <a href="{{ url('/') }}" class="navbar-brand">
        <img src="{{ url('frondend/images/logo.png') }}" alt="Logo Dewa" />
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navb">
        <ul class="navbar-nav ml-auto mr-3">
          <li class="nav-item mx-md-2">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item mx-md-2">
            <a class="nav-link" href="#popularContent">Paket Travel</a>
          </li>
          <li class="nav-item mx-md-2 dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Servises
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <!-- MX jarak itu kiri kanan -->
          <li class="nav-item mx-md-2">
            <a class="nav-link" href="#testimonialContent">Testimonia</a>
          </li>
          <!-- mobile button -->
          <!-- tampil di SM yaitu layar kecil jika di layar gede MD Tidak di tampilkan -->
          <!-- MY itu jatak atas sama bawah jika sm jaraknya 0, px itu jarak pading dari atas ke bawak -->
         @guest
         <form action="" class="form-inline d-sm-block d-md-none">
          <button class="btn btn-login my-2 my-sm-0 px-4" type="button" onclick="event.preventDefault(); location.href='{{ url('login') }}'" >
            Masuk
          </button>
        </form>

        <!-- desktop button -->
        <form action="" class="form-inline my-2 my-lg-0 d-md-block d-none">
          <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button" onclick="event.preventDefault(); location.href='{{ url('login') }}'">
            Masuk
          </button>
        </form>
         @endguest

         @auth
         <form class="form-inline d-sm-block d-md-none" 
                action="{{ url('logout') }}" method="POST">
          @csrf
          <button class="btn btn-login my-2 my-sm-0 px-4" type="submit" >
            Keluar
          </button>
        </form>

        
        <!-- desktop button -->
        <form class="form-inline my-2 my-lg-0 d-md-block d-none" 
        action="{{ url('logout') }}" method="POST">
          @csrf
          <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit" >
            Keluar
          </button>
        </form>
         @endauth

        </ul>
      </div>
    </nav>
  </div>
  <!-- Akhir Navbar -->