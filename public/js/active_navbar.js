$(document).ready(function() {
  $('a[href="' + location.pathname + '"]').closest('li').addClass('active'); 
});
