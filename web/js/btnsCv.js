window.onload = function(){
    $('#opc2').addClass('actual');

    $('.glyphicon-plus').on('click', function(){
        $(this).hide();
        $(this).next().show();
        // $(this).parent().parent().next().slideDown();
        $(this).parent().parent().next().show();
    });
    $('.glyphicon-minus').on('click', function(){
        $(this).hide();
        $(this).prev().show();
        // $(this).parent().parent().next().slideUp();
        $(this).parent().parent().next().hide();
    });
}
