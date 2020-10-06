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
                    <div class="card">
                        <div class="card-header">{{ __('Confirm Password') }}</div>
                        <div class="card-body">
                            <div class="text-center">
                                <img src="frondend/images/logo.png" class="w-58 mb-4" alt="">
                            </div>
                            {{ __('Please confirm your password before continuing.') }}

                            <form method="POST" action="{{ route('password.confirm') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <button type="submit" class="btn btn-primary btn-login btn-block">Confirm Password</button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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
