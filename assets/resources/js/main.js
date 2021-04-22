$ = jQuery;

$(".input").on('focus', function() {
  var label = $(this).parent();

  $(label).addClass("active");
})

$(".input").on('blur', function() {
  var label = $(this).parent();

  if($(this).val() == "")
    $(label).removeClass("active");
})