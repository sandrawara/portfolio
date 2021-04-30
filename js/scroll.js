$(function () {
  $('#scroll-down').click(function () {
    $('html, body').animate({ scrollTop: $('section.portfolio').offset().top }, 'slow');
    return false;
  });
});

$(function () {
  $('#scroll-down2').click(function () {
    $('html, body').animate({ scrollTop: $('section.more').offset().top }, 'slow');
    return false;
  });
});

$(function () {
  $('#scroll-down3').click(function () {
    $('html, body').animate({ scrollTop: $('section.contact').offset().top }, 'slow');
    return false;
  });
});




