<div class="footer container">
    <div class="footer-top row">
        <div class="one-third column">
            <h4>General Information</h4>
            <ul>
                <li><a href="#">Success Stories &amp; Recommendations</a></li>
                <li><a href="{{ route('about.index') }}">About the Arist</a></li>
                <li><a href="{{ route('contact.message') }}">Contact Me</a></li>
                <li><a href="{{ route('about.resume') }}">Resum&egrave;</a></li>
                <li><a href="{{ route('blog.index') }}">Blog</a></li>
            </ul>
        </div>
        <div class="one-third column">
            <h4>Follow me</h4>
            <ul>
                <li><a href="#"><i class="fa fa-linkedin"></i> Linkedin</a></li>
                <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                <li><a href="#"><i class="fa fa-youtube"></i> Youtube</a></li>
            </ul>
        </div>
        <div class="one-third column">
            <h4>Subscribe to Newsletters</h4>
            {!! Form::open(['route' => 'newsletter.signup']) !!}
                {!! Form::email('email', '', ['placeholder' => 'Your Email', 'required']) !!}
                <button class="dark">Subscribe</button>
            {!! Form::close() !!}
        </div>
    </div>
    <div class="footer-bottom row">
        <div class="two columns">
            <a href="{{ route('index') }}" class="logo-wrapper">
                <div class="logo white"></div>
            </a>
        </div>
        <div class="eight columns">
            <p class="copyright">&copy; Copyright <script>document.write(new Date().getFullYear());</script> Kamil Wierciszewski, a graphic design service. All rights reserved.</p>
        </div>
        <div class="two columns">
            <a href="#" class="button dark topthetop" title="To the Top" data-topthetop><i class="fa fa-arrow-up"></i></a>
        </div>
    </div>
</div>