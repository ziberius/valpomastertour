$(window).load(function () {
    $('.page-slideshow').addClass('page-loading');
    $('.loading-animation-spinner').hide();
    $('.loading-animation').fadeOut('slow');
    $('body').css('overflow', 'visible');
});

$(document).ready(function () {
    // camera
    $('#camera_wrap').camera({
        //thumbnails: true
        autoAdvance: true,
        mobileAutoAdvance: true,
        //fx					: 'simpleFade',
        height: '41%',
        hover: false,
        loader: 'none',
        navigation: true,
        navigationHover: false,
        mobileNavHover: false,
        playPause: false,
        pauseOnClick: false,
        pagination: true,
        time: 7000,
        transPeriod: 1000,
        minHeight: '200px'
    });

    //	carouFredSel
    $('#slider3 .carousel.main ul').carouFredSel({
        auto: {
            timeoutDuration: 80000
        },
        responsive: true,
        prev: '.prev3',
        next: '.next3',
        width: '100%',
        scroll: {
            items: 2,
            duration: 1000,
            easing: "easeOutExpo"
        },
        items: {
            width: '350',
            height: 'variable', //	optionally resize item-height
            visible: {
                min: 2,
                max: 4
            }
        },
        mousewheel: false,
        swipe: {
            onMouse: true,
            onTouch: true
        }
    });
    $(window).bind("resize", updateSizes_vat).bind("load", updateSizes_vat);
    function updateSizes_vat() {
        $('#slider3 .carousel.main ul').trigger("updateSizes");
    }
    updateSizes_vat();

}); //
$(window).load(function () {
    //

}); //        