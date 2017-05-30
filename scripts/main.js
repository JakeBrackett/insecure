$(function() {
  $('[data-toggle=offcanvas]').click(function() {
    $('.row-offcanvas').toggleClass('active');
    $('#sidebar-toggle').toggleClass('glyphicon-chevron-left glyphicon-chevron-right');
  });
});

