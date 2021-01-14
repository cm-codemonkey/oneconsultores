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

    $('form[name="cotiza_antigeno"]').on('submit', function(e)
    {
        e.preventDefault();

        var form = $(this);

        $.ajax({
            type: 'POST',
            data: form.serialize() + '&action=cotiza_antigeno',
            processData: false,
            cache: false,
            dataType: 'json',
            success: function(response)
            {
                if (response.status == 'success')
                {
                    alert(response.message);
                    location.reload();
                }
                else if (response.status == 'error')
                {
                    var errors = '';

                    for (var i = 0; i < response.errors.length; i++)
                        errors = errors + response.errors[i][1] + ' - ';

                    alert(errors);
                }
            }
        });
    });

    $('form[name="cotiza_anticuerpo"]').on('submit', function(e)
    {
        e.preventDefault();

        var form = $(this);

        $.ajax({
            type: 'POST',
            data: form.serialize() + '&action=cotiza_anticuerpo',
            processData: false,
            cache: false,
            dataType: 'json',
            success: function(response)
            {
                if (response.status == 'success')
                {
                    alert(response.message);
                    location.reload();
                }
                else if (response.status == 'error')
                {
                    var errors = '';

                    for (var i = 0; i < response.errors.length; i++)
                        errors = errors + response.errors[i][1] + ' - ';

                    alert(errors);
                }
            }
        });
    });

    $('form[name="cotiza_socioeconomico"]').on('submit', function(e)
    {
        e.preventDefault();

        var form = $(this);

        $.ajax({
            type: 'POST',
            data: form.serialize() + '&action=cotiza_socioeconomico',
            processData: false,
            cache: false,
            dataType: 'json',
            success: function(response)
            {
                if (response.status == 'success')
                {
                    alert(response.message);
                    location.reload();
                }
                else if (response.status == 'error')
                {
                    var errors = '';

                    for (var i = 0; i < response.errors.length; i++)
                        errors = errors + response.errors[i][1] + ' - ';

                    alert(errors);
                }
            }
        });
    });
});
