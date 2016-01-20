$(document).ready(function() {
    var headerslider = $('[data-header-slideshow] .slides');

    headerslider.on('init', function(e, s) {
        headerslider.find('[data-src]').each(function(index, slide) {
            $(slide).css('background-image', 'url("' + $(this).data('src') + '")');
        });
    });

    headerslider.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 5000
    });

    var galleryslider = $('[data-gallery-slider] .slides');

    galleryslider.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5500,
        dragable: true,
        dots: false,
        arrows: true,
        prevArrow: galleryslider.parent().find('[data-prev]'),
        nextArrow: galleryslider.parent().find('[data-next]'),
    });

    var recommendationslider = $('[data-recommendation-slider] .slides');

    recommendationslider.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 6000,
        dragable: true,
        dots: false,
        arrows: true,
        prevArrow: recommendationslider.parent().find('[data-prev]'),
        nextArrow: recommendationslider.parent().find('[data-next]'),
    });

    var topthetop = $('[data-topthetop]');

    topthetop.on('click', function(e) {
        e.preventDefault();
        $('body').animate({
            scrollTop: 0
        }, 500);
    })

    $('[data-recommendation-type]').on('click', function(e) {
        $(this).children().attr('checked', true);
        $('[data-recommendation-textarea]').attr('placeholder', $(this).data('message'));
    });

    $('[data-recommendation-write-button]').on('click', function(e) {
        e.preventDefault();
        $(this).toggleClass('active');
        $('[data-recommendation-write]').slideToggle(500);
    });

    $('[data-recommendation-close]').on('click', function(e) {
        e.preventDefault();
        $('[data-recommendation-write-button]').removeClass('active');
        $('[data-recommendation-write]').slideToggle(500);
    });
});
