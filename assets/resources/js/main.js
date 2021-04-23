$ = jQuery;

$(".input").on('focus', function() {
  var label = $(this).closest('.label');

  $(label).addClass("active");
});

$(".input").on('blur', function() {
  var label = $(this).closest('.label');

  if($(this).val() == "")
    $(label).removeClass("active");
});

$('[name=celular]').mask("(00) 90000-0000");