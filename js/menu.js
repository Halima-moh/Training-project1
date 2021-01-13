$(window).scroll(function(){
    if ($(this).scrollTop() >1600) {
       $('.header').addClass('newClass');
    } else {
       $('.header').removeClass('newClass');
    }
});
