
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
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
</head>
<body>
    
    <div class="head-comp">
        <img src="/images/headerlogo.png" alt="">
        <h1>Make the most of your professional life</h1>
    </div>

    <div class="register-container">
        <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label>Name</label>
                            <div class="col-md-12">
                                <input id="name" type="text" class=" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label>Email or Phone</label>
                            
                            <div class="col-md-12">
                                <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label>Password (6 or more characters)</label>
                            <div class="col-md-12">
                                <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <p>By clicking Agree & Join, you agree to the LinkedIn
                            <a href="#">User Agreement</a>,
                            <a href="#">Privacy Policy</a>,
                            and
                            <a href="#">Cookie Policy</a>
                        </p>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btnRegister">
                                    Agree & Join
                                </button>
                            </div>
                        </div>


                    </form>

                    <div class="row mt-2">
                        <div class="col-md-5"><hr></div>
                        <div class="col-md-2">or</div>
                        <div class="col-md-5"><hr></div>
                    </div>

                    <button class="btnJoinWithGoogle">
                        <img src="/images/googleicon.png" style="height: 20px;margin-top:-7px;" alt="">
                        Join with Google
                    </button>
                    
                    <p style="font-size: 1rem;padding-top: 10px">Already on LinkedIn? <a href="{{ route('login') }}">Sign in</a></p>
                    
                </div>


    <br><br>
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

