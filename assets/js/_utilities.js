function goToSection__scroll(elScrollDestiny, distanceIfScrollGoingToUp, distanceIfScrollGoingToDown, speedScroll, delay) {
    // scroll reference
    var scrollEfetuado = $(window).scrollTop();
    // element reference
    var sectionDestiny_offsetTop = $(elScrollDestiny).offset().top;

    if (scrollEfetuado > sectionDestiny_offsetTop) {
        setTimeout(function(){
            $('html, body').animate({
                scrollTop: sectionDestiny_offsetTop - distanceIfScrollGoingToUp
            }, speedScroll);
        }, delay);
    } else {
        setTimeout(function(){
            $('html, body').animate({
                scrollTop: sectionDestiny_offsetTop - distanceIfScrollGoingToDown
            }, speedScroll);
        }, delay);
    }
}