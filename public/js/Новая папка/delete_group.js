/*------------------------------------------------
| DELETE GROUP BUTTON
------------------------------------------------*/
$('.delete_group_button').on('click', function(e) {
	e.preventDefault();

	function ajax_delete_group() {
		$.ajax({
			url: location.origin+'/admin/ajax_delete_group',
			type: 'POST',
			dataType: "json",
			data: {
				'ids' : IDS,
			},
			success: function(data) {
				location.reload();
			}, 
			error: function(data, error, error_details){
				console.log("err: ",error, error_details);
				console.log(data);
				console.log(JSON.stringify(data.responseText, '\\', ''));
			}
		});	
	}	

	if (confirm('Подтвердить удаление')) {
		ajax_delete_group();
	} else {
		return false;
	}
});