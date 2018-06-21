var general = {
    cargar: function () {
        $(window).load(function () {
            $('.page-slideshow').addClass('page-loading');
            $('.loading-animation-spinner').hide();
            $('.loading-animation').fadeOut('slow');
            $('body').css('overflow', 'visible');
        });
        $(document).ready(function () {
            general.setearMenu();
        }); //        

    },
    setearMenu: function () {
        var menu = window.location.pathname;
        if (menu === "/" || menu === "/index.php") {
            $("#ulMenu li:eq(0)").addClass("active");
        } else if (menu === "/tours.php") {
            $("#ulMenu li:eq(1)").addClass("active");
        } else if (menu === "/contacto.php") {
            $("#ulMenu li:eq(2)").addClass("active");
        }
    },
    getUrlParameter: function getUrlParameter(sParam) {
        var sPageURL = decodeURIComponent(window.location.search.substring(1)),
                sURLVariables = sPageURL.split('&'),
                sParameterName,
                i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : sParameterName[1];
            }
        }
    }
};

general.cargar();
