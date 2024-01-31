$(function () {
    $('.menu-with-child.js-first').on('mouseenter', function () {
        $(this).find('.menu-dropdown-wrapper').removeClass('hide');
    }).on('mouseleave', function () {
        $(this).find('.menu-dropdown-wrapper').addClass('hide');
    });
    
    $('.menu-with-child.js-second').on('mouseenter', function () {
        $(this).find('.menu-child-wrapper').removeClass('hide');
    }).on('mouseleave', function () {
        $(this).find('.menu-child-wrapper').addClass('hide');
    });

});