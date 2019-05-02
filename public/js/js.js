
$('.tabular.menu .item').tab();
$('.ui.small.modal').modal('attach events', '#rate', 'show');
$('.ui.rating').rating();
$('#multi-select')
.dropdown();
$('#multi-select1')
.dropdown();
$('#multi-select2')
.dropdown();
$('#multi-select3')
.dropdown();
$('.ui.dropdown')
.dropdown()
;

//getting the rating value and sending it to another tag
$('.ui.rating')
  .rating('setting', 'onRate', function(value) {
      $('#rating_value').val(value);
  });
//showing the menu modal
$('.ui.tiny.modal').modal('attach events', '#menu', 'show');

//showing the photos modal
$('#photos_modal').modal('attach events', '#photo', 'show');
$("#multi-select").dropdown("get value");
