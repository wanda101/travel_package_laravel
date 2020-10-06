<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="frondend/libraries/bootstrap/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="frondend/styles/main.css" />

    <title>Dewa Travel</title>
</head>

<body>

    <main class="login-container">
        <div class="container">
            <div class="row page-login d-flex align-items-center">
                <div class="section-left col-12 col-md-6">
                    <h1 class="mb-4">We explore the new <br />Life much better</h1>
                    <img src="frondend/images/0.jpg" class="w-75 d-none d-sm-flex" alt="">
                </div>
                <div class="section-left col-12 col-md-4">
                <div class="alert alert-success">
                    <i class="fa fa-info-circle" ></i> Silahkan periksa email untuk konfirmasi pendaftaran
                </div>
                @if (session('info'))
                <div class="alert alert-success">
                    <i class="fa fa-info-circle" ></i>{{ session('info') }}
                </div>
                @endif
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="frondend/images/logo.png" class="w-58 mb-4" alt="">
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-login btn-block">
                                    {{ __('Login') }}
                                </button>

                                

                                <p class="text-center mb-4">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">Lupa Password</a>
                                    @endif
                                    <br>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}">Register</a>
                                    @endif
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="frondend/libraries/jquery/jquery.min.js"></script>
    <script src="frondend/libraries/bootstrap/js/bootstrap.js"></script>
    <script src="frondend/libraries/retina/retina.min.js"></script>
    <script src="frondend/libraries/xZoom-master/dist/xzoom.min.js"></script>
</body>

</html>
