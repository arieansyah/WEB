$(document).ready(function() {
  $('[data-toggle=offcanvas]').click(function() {
    $('.row-offcanvas').toggleClass('active');
  });
});


$(document).ready(function () {
    $menuLeft = $('.pushmenu-right');
    $nav_list = $('#nav_list');
    $nav_list.click(function(){
        $(this) .toggleClass('active') ;
        $('.pushmenu-push').toggleClass('pushmenu-push-toleft');
        $menuLeft.toggleClass('pushmenu-open');
        });
    });