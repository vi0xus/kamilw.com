<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="The Art of Kamil Wierciszewski">
        <meta name="author" content="Kamil Wierciszewski">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kamil W</title>
        <!-- <link rel="icon" type="image/png" href="images/favicon.png"> -->
        <link href="//fonts.googleapis.com/css?family=Roboto|Raleway:400,300,600" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
        {!! Html::style('assets/css/normalize.css') !!}
        {!! Html::style('assets/css/slick.css') !!}
        {!! Html::style('assets/css/slick-theme.css') !!}
        {!! Html::style('assets/css/skeleton.css') !!}
        {!! Html::style('assets/css/style.css') !!}
    </head>
    <body id="kamil-layout">
        <div class="header-wrapper">
            <div class="container">
                @if (Session::has('flash_notification.message'))
                    <div class="notification notification-{{ Session::get('flash_notification.level') }}" data-notification>
                        {{ Session::get('flash_notification.message') }}
                    </div>
                @endif
            </div>
            <div class="container header">
                <div class="row">
                    <div class="five columns">
                        <a href="{{ route('index') }}" class="logo-wrapper">
                            <h1 class="logo blue">The Art of Kamil Wierciszewski</h1>
                        </a>
                    </div>
                    <div class="seven columns">
                        <ul class="nav">
                            <li class="dropdown"><a href="{{ route('art.index') }}">Art <i class="fa fa-angle-down"></i></a>
                                <ul class="panel">
                                    <li><a href="{{ route('art.index') }}">Print Collateral</a></li>
                                    <li><a href="{{ route('art.index') }}">Web Design</a></li>
                                    <li><a href="{{ route('art.index') }}">Logo Design</a></li>
                                    <li><a href="{{ route('art.index') }}">Photo Manipluation</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="{{ route('about.index') }}">About <i class="fa fa-angle-down"></i></a>
                                <ul class="panel">
                                    <li><a href="{{ route('about.index') }}">The Artist</a></li>
                                    <li><a href="{{ route('about.resume') }}">Resum&egrave;</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('blog.index') }}">Blog</a></li>
                            <li class="dropdown">
                                <a href="{{ route('contact.message') }}">Contact</a>
                                <ul class="panel">
                                    <li><a href="{{ route('contact.project') }}">About a project</a>
                                    <li><a href="{{ route('contact.message') }}">About something else</a>
                                </ul>
                            </li>
                            @if (Auth::guest())
                            <li class="dropdown">
                                <a href="{{ url('/login') }}">Login <i class="fa fa-angle-down"></i></a>
                                <div class="panel">
                                    <form action="{{ url('/login') }}" method="post">
                                        {!! csrf_field() !!}
                                        <input type="email" name="email" placeholder="Your Email" required>
                                        <input type="password" name="password" placeholder="Password" required>
                                        <button class="login">Login</button>
                                        <a href="{{ url('/register') }}" class="button login">Sign Up</a>
                                        <div class="links">
                                            <a href="{{ url('/password/reset') }}">Forgot password?</a>
                                        </div>
                                    </form>
                                    <hr>
                                    <ul class="inline social">
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </li>
                            @else
                            <li class="dropdown">
                                <a href="{{ route('user.dashboard') }}">{{ Auth::user()->name }}</a>
                                <ul class="panel">
                                    <li><a href="{{ route('user.dashboard') }}">Profile</a></li>
                                    <li><a href="{{ route('user.dashboard') }}">Settings</a></li>
                                    <li><a href="{{ url('/logout') }}">Logout</a></li>
                                </ul>
                            </li>   
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-slideshow container" data-header-slideshow>
            <div class="slides">
                <div class="slide" data-header-slide data-src="{{ asset('assets/images/1375574066991.jpg') }}">
                    <div class="slide-details-wrapper">
                        <div class="slide-details">
                            <h2>Functional Websites, Interface Designs with Mobile Users In Mind.</h2>
                            <a href="#" class="button dark">Learn More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="slide" data-header-slide data-src="{{ asset('assets/images/1371206409919.jpg') }}">
                    <div class="slide-details-wrapper">
                        <div class="slide-details left">
                            <h2>Some really cleverly worded title here.</h2>
                            <a href="#" class="button dark">Learn More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')

        @include('layouts.footer')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        {!! Html::script('assets/js/slick.min.js') !!}
        {!! Html::script('assets/js/script.js') !!}
    </body>
</html>
