$('.productos .img-container').click(function() {
    //$(this).prev().find('img').css("zIndex", 9);
    $num=$(this).index('.productos .img-container');
    $lb='#label-'+$num;
    $('.productos .img-container').removeClass('active');
    $('.productos .container .lbproductos p').addClass('hidden');
    $(this).addClass('active');
    $($lb).removeClass('hidden');
});


$(window).scroll(function () {
    var topDivHeight = $('#banner').height() + $('#nosotros').height();
    var viewPortSize = $(window).height();
    
    var triggerAt = 150;
    var triggerHeight = (topDivHeight - viewPortSize) + triggerAt;

    if ($(window).scrollTop() >= triggerHeight) {
        $('.fadein').css('visibility', 'visible').hide().fadeIn(2000);
        $(this).off('scroll');
    }
});

