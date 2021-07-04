
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>


    <div class="main-container">
        <br><br>
        <img src="/images/headerlogo.png" alt="">
        <div class="login-container">
            <h1>Sign in</h1>
            <p>Stay updated on your professional world</p>
            <br>
            <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        @if (Route::has('password.request'))
                            <a class="linkForgetPassword" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btnlogin">
                                    Sign in
                                </button>
                            </div>
                        </div>

                    </form>

        </div>

        <p class="joinNowLink">New to LinkedIn? <a href="{{ route('register') }}">Join Now</a></p>

    </div>


    <div class="lower-footer">
        <ul>
            <li>
                <img src="/images/headerlogo.png" alt="">
            </li>
            <li><a href="#">2021</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Accessiblity</a></li>
            <li><a href="#">User Agreement</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Cookie Policy</a></li>
            <li><a href="#">Copyright Policy</a></li>
            <li><a href="#">Brand</a></li>
            <li><a href="#">Guest Controls</a></li>
            <li><a href="#">Community Guidlines</a></li>
            <li><a href="#">Languages</a></li>
        </ul>
    </div>
    
</body>
</html>
