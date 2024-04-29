// scroll on top button Start

var btn = $('#button');
$(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
        btn.removeClass('opacity-0 . invisible');
        btn.addClass('opacity-100 . visible');
    } else {
        btn.removeClass('opacity-10 . visible');
        btn.addClass('opacity-0 . invisible');

    }
});

btn.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, '300');
});

// scroll on top button End