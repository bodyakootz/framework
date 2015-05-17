------------------------------------------------
| RUN SUBCATEGORIES FROM SELECT
------------------------------------------------*/
// INITIAL SET SUBCATS
if ($('#category').length) { //first input id
	send_category($('#category').val());

	$('#category').on('change', function() {
		send_category($('#category').val());	
	});
}
// // INITIAL SET SUBCATS
// var $selects = $('.category_input');
// if ($('.category_input').length) {
// 	for (var i=0; i<$selects.length; i++){
// 		send_category($selects.eq(i).val(), i);
// 	}

// 	$('.category_input').on('change', function() {
// 		send_category($('.category_input').val());	
// 	});
// }
function send_category(category, number) {
	$.ajax({
		url: location.origin+'/admin/ajax_get_subcats',
		type: 'POST',
		dataType: "json",
		data: {
			'category' : category
		},
		success: function(data) {
			$select = $('#subcat_id');
			// CLEAR OLD SUBCATS
			$select.html('');

			for (var i=0; i<data.length; i++) {
				var subcat = data[i]['subcat'];
				var subcat_id = data[i]['subcat_id'];

				var $option = $("<option value='"+subcat_id+"'>"+subcat+"</option>");
				$select.append($option);
			}
			/*------------------------------------------------
			| Select needed option
			------------------------------------------------*/
			var subcat_id = $('#subcat_id').data('id');//second select id
			$('#subcat_id').val(subcat_id);
		}, 
		error: function(data, error, error_details){
			console.log("err:",error, error_details);
			console.log(data);
		}
	});	
}
/*-----------------------------------------------