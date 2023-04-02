$('.c-scrollLink a').on('click', function(e) {
    e.preventDefault();
    let finalDestiny = $(this).attr('href');
    goToSection__scroll(finalDestiny, 110, 110, 700, 10);
});