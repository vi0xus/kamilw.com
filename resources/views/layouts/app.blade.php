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
                                <a href="#">About <i class="fa fa-angle-down"></i></a>
                                <ul class="panel">
                                    <li><a href="{{ route('about.index') }}">The Artist</a></li>
                                    <li><a href="{{ route('about.resume') }}">Resume</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('blog.index') }}">Blog</a></li>
                            <li><a href="{{ route('contact.index') }}">Contact</a></li>
                            @if (Auth::guest())
                            <li class="dropdown">
                                <a href="{{ url('/login') }}">Login <i class="fa fa-angle-down"></i></a>
                                <form class="panel" action="login" method="post">
                                    <input type="email" name="email" placeholder="Email">
                                    <input type="password" name="password" placeholder="Password">
                                    <button class="login">Login</button>
                                    <a href="{{ url('/register') }}" class="button login">Sign Up</a>
                                    <div class="links">
                                        <a href="{{ url('/password/reset') }}">Forgot password?</a>
                                    </div>
                                </form>
                            </li>
                            @else
                            <li><a href="#">{{ Auth::user()->name }}</a></li>
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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        {!! Html::script('assets/js/slick.min.js') !!}
        {!! Html::script('assets/js/script.js') !!}
    </body>
</html>
