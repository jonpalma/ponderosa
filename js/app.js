$('.productos .img-container').click(function() {
    $num=$(this).index('.productos .img-container');
    $lb='#label-'+$num;
    $('.productos .img-container').removeClass('active');
    $('.productos .container .lbproductos p').addClass('hidden');
    $(this).addClass('active');
    $($lb).removeClass('hidden');
});