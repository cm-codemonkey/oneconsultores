"use strict";

$(window).on('beforeunload ajaxStart', function()
{
    $('body').prepend('<div data-ajax-loader><div class="loader"></div></div>');
});

$(window).on('ajaxStop', function()
{
    $('body').find('[data-ajax-loader]').remove();
});

$(document).ready(function ()
{
    $('#trigger-nav-mobile').on('click', function ()
    {
        $(this).find('> .hamburger-menu').toggleClass('animate');
        $(this).parents('header.topbar').toggleClass('view_mobile_menu');
        $('body').toggleClass('noscroll');
    })
});
