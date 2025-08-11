$(document).ready(function () {
    $('.clientSucess').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        dots: false,
        infinite: true,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});
$(document).ready(function () {
    $('.premium_experience_slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        dots: false,
        infinite: true,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});
$(document).ready(function () {
    $('.announcements_slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        centerMode: true,
        autoplaySpeed: 2000,
        arrows: false,
        dots: true,
        infinite: true,
        variableWidth: true,
    });
});


$(document).ready(function() {
    $('.podcastVideoThumbnail').on('click', function() {
        let container = $(this).closest('.podcastVideo'); // Get the clicked container
        container.addClass('active');

        let iframe = container.find('iframe'); // Find iframe inside this container
        let src = iframe.attr('src');

        // Check if autoplay is already added
        if (!src.includes('autoplay=1')) {
            let newSrc = src.includes('?') ? src + "&autoplay=1" : src + "?autoplay=1";
            iframe.attr('src', newSrc);
        }
    });
});
