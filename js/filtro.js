$(function () {
    $('.filter').click(function () {
        $(this).addClass('active').siblings().removeClass('active');
        let valor = $(this).attr('data-nombre');
        if (valor == 'todos') {
            $('.cont-services').show('1000');
        } else {
            $('.cont-services').not('.' + valor).hide('1000');
            $('.cont-services').filter('.' + valor).show('1000');
        }
    });

    let sobreNosotros = $('#equipo').offset().top,
        blogs = $('#blogs').offset().top,
        servicios = $('#servicioss').offset().top;
        // agendar = $('#contacto').offset().top;

    window.addEventListener('resize', function(){
        let sobreNosotros = $('#equipo').offset().top,
        blogs = $('#blogs').offset().top,
        servicios = $('#servicioss').offset().top;
        // agendar = $('#contacto').offset().top;
    });

    $('#enlace-home').on('click', function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        },600);
    });

    $('#enlace-aboutus').on('click', function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: sobreNosotros -100
        },600);
    });

    $('#enlace-blog').on('click', function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: blogs -100
        },600);
    });

    $('#enlace-services').on('click', function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: servicios -100
        },600);
    });

    // $('#enlace-contacto').on('click', function(e){
    //     e.preventDefault();
    //     $('html, body').animate({
    //         scrollTop: agendar -100
    //     },600);
    // });
});