$(window).load(function () {
    $('.page-slideshow').addClass('page-loading');
    $('.loading-animation-spinner').hide();
    $('.loading-animation').fadeOut('slow');
    $('body').css('overflow', 'visible');
});

$(document).ready(function () {
    setearMenu();
}); //


function setearMenu(){
    var menu = window.location.pathname;
    if(menu === "/" || menu === "/index.php"){
        $("#ulMenu li:eq(0)").addClass("active");
    }else if(menu === "/tours.php"){
        $("#ulMenu li:eq(1)").addClass("active");
    }else if(menu === "/contacto.php"){
        $("#ulMenu li:eq(2)").addClass("active");
    }
};

function botones(){
    $("")
}

