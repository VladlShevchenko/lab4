$(function() {
  $('.scroll-down').click (function() {
    $('html, body').animate({scrollTop: $('plans').offset().top }, 'slow');
    return false;
  });
});
