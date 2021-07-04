


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
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
</head>
<body>
    

    <nav>
        <div class="container">
            <div class="row p-0">
                <div class="col-md-12 p-0 d-flex">
                    <img src="/images/headerlogo.png" alt="">
                    <div class="text-right pt-2 w-100">
                        @if (Route::has('login'))
                            <div class="hidden">
                                @auth
                                    <a href="{{ url('/home') }}" class="btnhome">Home</a>
                                @else
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="btn btnregister">Join now</a>
                                    @endif
                                    <a href="{{ route('login') }}" class="btnlogin">Sign in</a>
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <div class="container-fluid">
        <div class="row header-sec">
            <div class="col-md-6 heading-sec">
                <h1>
                    Welcome to your professional community
                </h1>
                <br>
                <button class="heading-sec-btn">
                    <table>
                        <tr>
                            <td style="width:100%; text-align:left"><h3>Search for a job</h3></td>
                            <td><h2>></h2></td>
                        </tr>
                    </table>
                </button>

                <button class="heading-sec-btn">
                    <table>
                        <tr>
                            <td style="width:100%; text-align:left"><h3>Find a person you know</h3></td>
                            <td><h2>></h2></td>
                        </tr>
                    </table>
                </button>

                <button class="heading-sec-btn">
                    <table>
                        <tr>
                            <td style="width:100%; text-align:left"><h3>Learn a new skill</h3></td>
                            <td><h2>></h2></td>
                        </tr>
                    </table>
                </button>
            </div>
            <div class="col-md-6 pt-4">
                <img src="/images/loginimage.svg" class="w-100" alt="">
            </div>
        </div>
    </div>

    <section class="open-jobs-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h1>Find open jobs and internship</h1>
                </div>
                <div class="col-md-7">
                    <p>SUGGESTED SEARCHES</p>
                    <a href="#" class="searches-btns">Engineering</a>
                    <a href="#" class="searches-btns">Business Development</a>
                    <a href="#" class="searches-btns">Finance</a>
                    <a href="#" class="searches-btns">Administrative Assistant</a>
                    <a href="#" class="searches-btns">Retail Associate</a>
                    <a href="#" class="searches-btns">Customer Service</a>
                    <a href="#" class="searches-btns">Information Technology</a>
                    <a href="#" class="searches-btns">Marketing</a>
                    <a href="#" class="searches-btns">Human Resource</a>
                </div>
            </div>
        </div>
    </section>

    <section class="post-your-job">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h1>
                        Post your job and find the people you need
                    </h1>
                </div>
                <div class="col-md-7">
                    <a href="#" class="post-job-btn">Post a job</a>
                </div>
            </div>
        </div>
    </section>

    <section class="connect-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="/images/homeimage.svg" alt="">
                    <h1>Connect with people who can help</h1>
                </div>
                <div class="col-md-6">
                    <img src="/images/img2.svg" alt="">
                    <h1>
                        Learn the skills that can help you now
                    </h1>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>


