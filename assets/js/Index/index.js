'use strict';

$(document).ready(function()
{
    $('#home_ads').owlCarousel({
        autoplay: true,
        autoplayTimeout: 8000,
        loop: false,
        margin: 0,
        rewind: true,
        items: 1,
        dots: true
    });

    $('#home_clients').owlCarousel({
        autoplay: true,
        autoplayTimeout: 4000,
        loop: false,
        margin: 0,
        rewind: true,
        items: 4,
        dots: true
    });
});
