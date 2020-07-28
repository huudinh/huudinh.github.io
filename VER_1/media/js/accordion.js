$('.accordion ul li span').on('click', function () {
    if (!$(this).parent().hasClass('toggled')) {
        $(this).next('ul').stop(true, true).slideDown();
        $(this).parent().addClass('toggled');

    } else {
        $(this).next('ul').stop(true, true).slideUp();
        $(this).parent().removeClass('toggled');
    }
});
$('.accordion-one ul li span').on('click', function () {
    $(this).parent('li').siblings('li.toggled').removeClass('toggled').children('ul').stop(true, true).slideUp();
});
