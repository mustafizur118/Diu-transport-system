$(document).ready(function() {
    $('.ser-silder').slick({
        autoplay: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: ".ser-pres-btn",
        nextArrow: ".ser-nexts-btn",
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]

    });

    $('.nav-trigger').click(function() {
        $('.site-content-wrapper').toggleClass('scaled');
    })
});