// Wrapper for no conflict JQ

jQuery(document).ready(function($){

  $(document).foundation();//este codigo viene del template estatico

  $( ".nav-toggle" ).click(function() {
    $(this).toggleClass("open");
    $("nav").fadeToggle(100);
  
    return false;
  });
});


