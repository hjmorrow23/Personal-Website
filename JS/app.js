//Hides and fades in the heading and heading-item
$(".main-heading").hide().fadeIn(3000);
$(".heading-item").hide().fadeIn(3000);

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

