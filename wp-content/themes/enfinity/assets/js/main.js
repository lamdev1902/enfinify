jQuery(function ($) {
    // Menu action 
    $('.menf__icon').click(function () {
        $('.menf__icon').toggleClass('exit');
        $('.menf__menu').slideToggle();
        return false;
    });
	
	if (window.innerWidth >= 1024) { 

        $('.enf__scrollbar-item').on('click', function (e) {
            e.preventDefault();
            const targetId = $(this).data('target');
            const $target = $('#' + targetId);

            if ($target.length) {
                $target.addClass('unstick-temp');
                void $target[0].offsetWidth; 

                $('html, body').animate({
                    scrollTop: $target.offset().top - 1
                }, 200, function () {
                    $target.removeClass('unstick-temp');
                });

                $('.enf__scrollbar-item').removeClass('enf__scrollbar-item--active');
                $(this).addClass('enf__scrollbar-item--active');
            }
        });

        const OFFSET = 50;
        const sections = $('section[id^="enf"]');

        $(window).on('scroll', function () {
            let scrollTop = $(window).scrollTop();
            let currentSectionId = null;

            sections.each(function () {
                const sectionTop = $(this).offset().top - OFFSET;
                if (scrollTop >= sectionTop) {
                    currentSectionId = $(this).attr('id');
                }
            });

            if (currentSectionId) {
                $('.enf__scrollbar-item').removeClass('enf__scrollbar-item--active');
                $(`.enf__scrollbar-item[data-target="${currentSectionId}"]`).addClass('enf__scrollbar-item--active');
            }
        });

    }

    // Feature On
    if ($(window).width() <= 820 && $('.featureon__list').length) {
        if (!$('.featureon__list').hasClass('slick-initialized')) {
            $('.featureon__list').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                dots: false,
                arrows: false,
                infinite: true,
                centerMode: false,
                autoplay: true,
                responsive: [
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            dots: false,
                            arrows: false,
                            infinite: true,
                            centerMode: false,
                            centerPadding: '0',
                        }
                    }
                ]
            });
        }
    } else {
        if ($('.featureon__list').hasClass('slick-initialized')) {
            $('.featureon__list').slick('unslick');
        }
    }

    if ($(window).width() <= 820 && $('.enf__brands-list').length) {
        if (!$('.enf__brands-list').hasClass('slick-initialized')) {
            $('.enf__brands-list').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                dots: false,
                arrows: false,
                infinite: true,
                centerMode: false,
                autoplay: true,
                responsive: [
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            dots: false,
                            arrows: false,
                            infinite: true,
                            centerMode: false,
                            centerPadding: '0',
                        }
                    }
                ]
            });
        }
    } else {
        if ($('.enf__brands-list').hasClass('slick-initialized')) {
            $('.enf__brands-list').slick('unslick');
        }
    }

})

function customer_review_leea($) {
    $('.customer-ftoggle').click(function () {
        $('html').css('overflow', 'hidden');
        $(this).addClass('ani-right');
        $(this).removeClass('ani-left');
        $('.customer-feedback').addClass('ani-fade');
        $('.form-customer-feedback').addClass('ani-fade');
        return false;
    });
    $('.form-customer-feedback .close-btn').click(function () {
        $('.customer-ftoggle').removeClass('ani-right');
        $('.customer-feedback').removeClass('ani-fade');
        $('.form-customer-feedback').removeClass('ani-fade');
        $('.form-customer-feedback .customer-ftoggle').addClass('ani-left');
        $('html').css('overflow', 'auto');
    });
    $('.rating-feedback').rating({
        maxRating: 5,
        initialRating: 3,
        readonly: false,
        step: 1,
    });

    $('.rating-feedback').change(function () {
        $('.form-feedback').show();
        $('.form-hidden-rating').val($('.rating-feedback').val());
        $('.form-hidden-link').val($('.link-post-feedback').val());
        $('.form-hidden-ip').val($('.ip-address').val());
        var d = new Date();
        var strDate = d.getDate() + "-" + (d.getMonth() + 1) + "-" + d.getFullYear() + " " + d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
        $('.form-date-send').val(strDate).attr('value', strDate);
    });
    $('.form-select').parent().addClass('your-option');

    $('.form-select').change(function () {
        if ($('.form-select').val() != "") {
            $('.form-customer-feedback .your-option').addClass('hide-star');
            $('.form-select').css("color", "#000");
        } else {
            $('.form-customer-feedback .your-option').removeClass('hide-star');
        };
        if ($('.form-select').val() == "") {
            $('textarea.form-group').hide();
        } else {
            $('textarea.form-group').slideDown();
        };
        if ($('.form-select').val() == "Questions") {
            $('.form-customer-feedback .form-group-email').slideDown();
            // $(".form-customer-feedback textarea.form-group").attr("placeholder", "New placeholder text");
        } else {
            $('.form-customer-feedback .form-group-email').hide();
        };
        if ($('.form-select').val() == "Report bug") {
            $(".form-customer-feedback textarea.form-group").attr("placeholder", "Where did you have a technical problem?");
        } else {
            $(".form-customer-feedback textarea.form-group").attr("placeholder", "What would you like to share with us?");
        };
    });
    document.addEventListener('wpcf7mailsent', function () {
        $('.form-customer-feedback .mailsent').show();
        $('.form-customer-feedback .form-feedback, .form-customer-feedback .star-rating').hide();
    }, false);
}