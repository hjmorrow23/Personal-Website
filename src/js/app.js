//Include Mobile Nav
$('.menu-icon').click(function() {
    if ($('.page-container').hasClass('active')) {
        $('.page-container').removeClass('active');
        $('.page-container').addClass('hide-mobile');
        $('.menu-icon').html('&#9776;');
        $('.menu-icon').removeClass('cross');
        
    } else {
        $('.page-container').addClass('active');
        $('.page-container').removeClass('hide-mobile');
        $('.menu-icon').html('&#735;');
        $('.menu-icon').addClass('cross');
    }
    
});