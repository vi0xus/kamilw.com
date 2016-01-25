@extends('layouts.app')

@section('content')
<div class="page">
    <div class="container">
        <div class="trio-box row">
            <div class="one-third column">
                <a href="{{ route('about.index') }}" class="button large pink">
                    <h3><i class="fa fa-street-view"></i> Meet The Artist</h3>
                    <p>Learn about the artist, experience, workflow, and interest. <i class="fa fa-chevron-circle-right"></i></p>
                </a>
            </div>
            <div class="one-third column">
                <a href="{{ route('contact.index') }}" class="button large blue">
                    <h3><i class="fa fa-paste"></i> Lets Work Together</h3>
                    <p>Find out how working side by side with a designer can improve your business. <i class="fa fa-chevron-circle-right"></i></p>
                </a>
            </div>
            <div class="one-third column">
                <a href="#" class="button large purple">
                    <h3><i class="fa fa-trophy"></i> Success Stories</h3>
                    <p>Read about client experiences and their satisfaction. <i class="fa fa-chevron-circle-right"></i></p>
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="homepage-gallery row" data-gallery-slider>
            <div class="slides">
                <div class="slide">
                    <div class="one-third column">
                        <div class="imagebox">
                            <a href="#">
                                <img src="assets/work/jack.jpg">
                                <div class="detail-overlay">
                                    <div class="details">
                                        <h4 class="title">Lorem ipsum dolor sit amet, consectetur.</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="two-thirds column">
                        <div class="row">
                            <div class="twelve columns">
                                <div class="imagebox">
                                    <a href="#">
                                        <img src="assets/work/willy.jpg">
                                        <div class="detail-overlay">
                                            <div class="details">
                                                <h4 class="title">Lorem ipsum dolor sit amet, consectetur.</h4>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="one-third column">
                                <div class="imagebox">
                                    <a href="#">
                                        <img src="assets/work/watches.jpg">
                                        <div class="detail-overlay">
                                            <div class="details">
                                                <h4 class="title">Lorem ipsum dolor sit amet, consectetur.</h4>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="one-third column">
                                
                            </div>
                            <div class="one-third column">
                                
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="arrows">
                <div class="arrow prev" data-prev><i class="fa fa-angle-left"></i></div>
                <div class="arrow next" data-next><i class="fa fa-angle-right"></i></div>
            </div>
        </div>
    </div>

    <div class="linkbox dark container">
        <div class="row">
            <div class="eight columns">
                <h3>The answer to success starts with a great design!</h3>
            </div>
            <div class="four columns">
                <a href="#" class="button dark">See All Artwork <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>

    <div class="recommendations container" data-recommendation-slider>
        <h2>Recommendations</h2>
        <div class="slides">
            <div class="recommendation">
                <div class="clientImage">
                    <img src="https://s3.amazonaws.com/uifaces/faces/twitter/raquelromanp/128.jpg" alt="@raquelromanp">
                </div>
                <div class="clientMessage">
                    <h4>Raquel Roman</h4>
                    <p><span>"</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum repudiandae blanditiis, quia enim soluta, possimus voluptatibus ea nam natus vel sed aspernatur nihil voluptas fugiat pariatur nemo odio atque tempore.<span>"</span></p>
                </div>
            </div>
            <div class="recommendation">
                <div class="clientImage">
                    <img src="https://s3.amazonaws.com/uifaces/faces/twitter/brynn/128.jpg" alt="@brynn">
                </div>
                <div class="clientMessage">
                    <h4>Brynn</h4>
                    <p><span>"</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum repudiandae blanditiis, quia enim soluta, possimus voluptatibus ea nam natus vel sed aspernatur nihil voluptas fugiat pariatur nemo odio atque tempore.<span>"</span></p>
                </div>
            </div>
        </div>
        <div class="arrows">
            <div class="arrow prev" data-prev><i class="fa fa-angle-left"></i></div>
            <div class="arrow next" data-next><i class="fa fa-angle-right"></i></div>
        </div>
        <div class="links">
            <a href="#" class="button dark inverse" data-recommendation-write-button>Write your recommendation <i class="fa fa-angle-down"></i></a>
            <a href="#" class="button dark inverse">Read all recommendations <i class="fa fa-angle-right"></i></a>
        </div>
        <div class="write" data-recommendation-write>
            <div class="closer" data-recommendation-close>
                <i class="fa fa-minus"></i>
            </div>
            <form action="#" method="post">
                <div class="row">
                    <div class="four columns">
                        <label for="type" data-recommendation-type data-message="Please write about your recommendation here.">
                            <input type="radio" name="type" value="recommendation" checked>
                            Recommendation
                        </label>
                    </div>

                    <div class="four columns">
                        <label for="type" data-recommendation-type data-message="Please write about your success story here.">
                            <input type="radio" name="type" value="success">
                            Success Story
                        </label>
                    </div>
                </div>
                <textarea name="recommendationMessage" placeholder="Please write about your recommendation here." data-recommendation-textarea></textarea>
                <div class="row">
                    <div class="two offset-by-ten columns">
                        <button class="dark">Submit <i class="fa fa-angle-right"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection