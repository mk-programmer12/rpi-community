$(document).ready(function() {

    // scroll up js
    $.scrollUp({
        scrollText: '<i class="fa-solid fa-chevron-up"></i>',
        animation: 'fade',
        easingType: 'linear',
        scrollSpeed: 1000,
    });

    /* slider area */
    $('.slider_wrapper').slick({
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToShow: 1,
        dots: true,
        arrows: false,
        speed: 1000,
        infinity: true,
        slidesToScroll: 1,
    });

    /* teacher area slick */
    $('.teacher_wrapper').slick({
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToShow: 3,
        dots: false,
        arrows: true,
        speed: 3000,
        infinity: true,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });

    /* blog area slick */
    $('.blog_active').slick({
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToShow: 3,
        dots: true,
        arrows: false,
        speed: 3000,
        infinity: true,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });

    /* blog area slick */
    $('.event_active').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        slidesToShow: 1,
        dots: false,
        arrows: false,
        speed: 3000,
        infinity: true,
        slidesToScroll: 1,
        vertical: true
    });



    // MOUSE DIRECTION AWARE START
    $('.single_gallery').directionalHover({
        // CSS class for the overlay
        overlay: "prot_content_inner",
        // Linear or swing
        easing: "swing",
        speed: 500
    });

    // GALLERY JS
    $('.gallery_active').imagesLoaded(function () {
        if ($.fn.isotope) {
            var $gallery = $('.gallery_active');
            $gallery.isotope({
                itemSelector: '.grid-item',
                filter: '*',
                resizesContainer: true,
                layoutMode: 'masonry',
                transitionDuration: '0.8s'
            });
            $('.filter_menu li').on('click', function () {
                $('.filter_menu li').removeClass('current_menu_item');
                $(this).addClass('current_menu_item');
                var selector = $(this).attr('data-filter');
                $gallery.isotope({
                    filter: selector,
                });
            });
        };
    });









});