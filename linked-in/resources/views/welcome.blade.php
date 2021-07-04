


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


    <section class="carousel-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <a class="slider-cust-controls" href="#carouselExampleControls" role="button" data-slide="prev">
                            < Previous
                            </a>
                            <a class="slider-cust-controls" href="#carouselExampleControls" role="button" data-slide="next">
                                &nbsp;&nbsp;&nbsp; Next >
                            </a>
                            <br><br>
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h1>Let the right people know you’re open to work</h1>
                                        <p>With the Open To Work feature, you can privately tell recruiters or publicly share with the LinkedIn community that you are looking for new job opportunities</p>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="/images/slideimg1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h1>Conversations today could lead to opportunity tomorrow</h1>
                                        <p>Sending messages to people you know is a great way to strengthen relationships as you take the next step in your career</p>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="/images/slideimg2.jfif" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h1>Stay up to date on your industry</h1>
                                        <p>From Live videos, to stories, to newsletters and more, LinkedIn is full of ways to stay up to date on the latest discussions in your industry</p>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="/images/slideimg3.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <br>
                    <a href="#" class="searches-btns">Find people you know</a>
                </div>
                <div class="col-md-6">
                    <img src="/images/img2.svg" alt="">
                    <h1>
                        Learn the skills that can help you now
                    </h1>
                    <br>
                    <a href="#" class="searches-btns">Training you need</a>
                </div>
            </div>
        </div>
    </section>

    <section class="linkedinfor-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 sec-left">
                    <h1>
                        Who is Linkedin for?
                    </h1>
                    <h5>
                        Anyone looking to navigate their professional life
                    </h5>
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
                <div class="col-md-6 right-image-sec">
                    <img src="/images/empimg2.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
<br><br>
    <section class="video-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-8 video-content-sec">
                    <div class="d-flex content-inner">
                        <iframe width="950" height="395"
                        src="https://www.youtube.com/embed/rExmy94HULo">
                        </iframe>
                        <div>
                            <h1>3 ways to find your job</h1>
                            <h2>
                                Check out these steps to help you get started
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="getstarted-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Join your colleagues, classmates, and friends on LinkedIn.</h1>
                    <button>Get Started</button>
                </div>
            </div>
        </div>
    </section>


    <section class="upper-footer">
        <img src="/images/footersvg1.svg" alt="">
        <img src="/images/footersvg2.svg" alt="">
        <img src="/images/footersvg3.jpg" alt="">
        <img src="/images/footersvg4.png" alt="">
        <img src="/images/footersvg5.png" alt="">
    </section>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="/images/headerlogo.png" alt="">
                </div>
                <div class="col-md-2">
                    <p>General</p>
                    <a href="#">Sign Up</a>
                    <a href="#">Help Center</a>
                    <a href="#">About</a>
                    <a href="#">Press</a>
                    <a href="#">Blog</a>
                    <a href="#">Career</a>
                    <a href="#">Developers</a>
                </div>
                <div class="col-md-2">
                    <p>Browse LinkedIn</p>
                    <a href="#">Learning</a>
                    <a href="#">Jobs</a>
                    <a href="#">Salary</a>
                    <a href="#">Mobile</a>
                    <a href="#">Services</a>
                </div>
                <div class="col-md-2">
                    <p>Business Solutions</p>
                    <a href="#">Talent</a>
                    <a href="#">Marketing</a>
                    <a href="#">Sales</a>
                    <a href="#">Learning</a>
                </div>
                <div class="col-md-3">
                    <p>Directories</p>
                    <a href="#">Members</a>
                    <a href="#">Jobs</a>
                    <a href="#">Companies</a>
                    <a href="#">Featured</a>
                    <a href="#">Learning</a>
                    <a href="#">Salaries</a>
                    <a href="#">Posts</a>
                    <a href="#">Articles</a>
                    <a href="#">Schools</a>
                    <a href="#">News</a>
                    <a href="#">News Letters</a>
                    <a href="#">Services</a>
                    <a href="#">Interview Prep</a>
                    <a href="#">Products</a>
                </div>
            </div>
        </div>
    </footer>

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


