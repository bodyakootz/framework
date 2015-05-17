/*----------------------------------------------*/

/*------------------------------------------------
| CHANGE SELECT DEPENDING ON CATEGORY
------------------------------------------------*/
$('.admin_one_cat_add').on('click', function() {
	var category = $(this).data('category');
	$('.create_category').val(category);
});
/*----------------------------------------------*/


/*------------------------------------------------
| AJAX DELETE FILE FROM SERVER
------------------------------------------------*/
// function deleteFileFromServer(filepath) {
// 	$.ajax({
// 		url: location.origin+'/delete_file_from_server',
// 		type: 'POST',
// 		dataType: "json",
// 		data: {
// 			'filepath' : filepath
// 		},
// 		success: function(data) {
// 			// console.log(data);
// 		}, 
// 		error: function(data, error, error_details){
// 			console.log("err:",error, error_details);
// 			console.log(data);
// 		}
// 	});	
// }



/*----------------------------------------------*/

/*------------------------------------------------
| POPUP admin items change subcategory
------------------------------------------------*/
$('.ad_it_ch_c').magnificPopup({
	items: {
		src: '.admin_itms_subcategory_div', // CSS selector of an element on page that should be used as a popup
		type: 'inline'
	},
});
/*----------------------------------------------*/
/*------------------------------------------------
| POPUP admin items pdf
------------------------------------------------*/
$('.ad_pdf_p').magnificPopup({
	items: {
		src: '.admin_itms_pdf_div', // CSS selector of an element on page that should be used as a popup
		type: 'inline'
	},
});
/*----------------------------------------------*/

/*----------------------------------------------*/

/*------------------------------------------------
| ATTACH TO PDF BUTTON
------------------------------------------------*/
// $('.add_to_pdf').on('click', function(e) {
// 	e.preventDefault();
// 	var subcat_id = $('.admin_select_title_text').val();
// 	if (subcat_id < 1) {
// 		alert('Вы должны создать подкатегорию!');
// 		return false;
// 	} else {
// 		$.ajax({
// 			url: location.origin+'/admin/ajax_change_subcat',
// 			type: 'POST',
// 			dataType: "json",
// 			data: {
// 				'ids' 		: IDS,
// 				'subcat_id'	: subcat_id
// 			},
// 			success: function(data) {
// 				location.reload();
// 			}, 
// 			error: function(data, error, error_details){
// 				console.log("err:",error, error_details);
// 				console.log(data);
// 				console.log(JSON.stringify(data.responseText, '\\', ''));
// 			}
// 		});
// 	}
// });
/*----------------------------------------------*/

/*------------------------------------------------
| CHANGE SUBCAT BUTTON
------------------------------------------------*/
$('.change_subcat_button').on('click', function(e) {
	e.preventDefault();
	var subcat_id = $('.admin_select_title_text').val();
	if (subcat_id < 1) {
		alert('Вы должны создать подкатегорию!');
		return false;
	} else {
		$.ajax({
			url: location.origin+'/admin/ajax_change_subcat',
			type: 'POST',
			dataType: "json",
			data: {
				'ids' 		: IDS,
				'subcat_id'	: subcat_id
			},
			success: function(data) {
				location.reload();
			}, 
			error: function(data, error, error_details){
				console.log("err:",error, error_details);
				console.log(data);
				console.log(JSON.stringify(data.responseText, '\\', ''));
			}
		});
	}
});
/*----------------------------------------------*/
/*------------------------------------------------
| CHANGE PDF BUTTON
------------------------------------------------*/
$('.change_item_pdf').on('click', function(e) {
	var pdf_id = $('.admin_select_pdf').val();
	$.ajax({
		url: location.origin+'/admin/ajax_change_pdf',
		type: 'POST',
		dataType: "json",
		data: {
			'ids' 		: IDS,
			'pdf_id'	: pdf_id
		},
		success: function(data) {
			location.reload();
		}, 
		error: function(data, error, error_details){
			console.log("err:",error, error_details);
			console.log(data);
			console.log(JSON.stringify(data.responseText, '\\', ''));
		}
	});
});
/*----------------------------------------------*/

/*----------------------------------------------*/

/*------------------------------------------------
| CHANGE HIT SPECAIL PROCUREMENT
------------------------------------------------*/
$('.ajax_change_state').on('click', function(e) {
	e.preventDefault();
	var url = $(this).data('url');

	$.ajax({
		url: location.origin+url,
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
});
/*----------------------------------------------*/

/*------------------------------------------------
| EXCEL IMPORT
------------------------------------------------*/
$('form.admin_panel_import input[type="file"]').on('click', function() {
	var filepath = $(this).val();
	var index = filepath.lastIndexOf("\\");
	console.log(index);
});

/*------------------------------------------------
| RUN CONTSCT FROM BUTTON
------------------------------------------------*/
$('.contact_form_button').on('click', function(evt) {
	evt.preventDefault();
	var contactFormTag = $('#bcf-trigger')[0];

	if ('click' in contactFormTag) {
		contactFormTag.click();
	} else { // doesn't work with $('#bcf-trigger')[0].click() in Safari
		var evObj = document.createEvent('MouseEvents');
		evObj.initMouseEvent('click', true, true, window);
		contactFormTag.dispatchEvent(evObj);
	}

	// if (typeof contactFormTag.click != 'undefined') {} // should work fine
	// if (contactFormTag.hasOwnProperty('click')) {} // not own property!
	
	// return false; // doesn't work even in IE11 and Mozilla with dispatchEvent() but fine with just click()
});
/*------------------------------------------------
| CHANGE LONG SUBCATS FONT
------------------------------------------------*/
// // var $val = $('.admin_subcategory').text();
// $('.admin_subcategory').each(function () {
// 	$val = $.trim($(this).text());
// 	var $quantity = $val.length;
// 	// console.log($val);
// 	if ($quantity > 30) {
// 		$(this).css({
// 			// 'font-size': '12px',
// 			'max-width': '270px'
// 		});
// 	};

// })
/*------------------------------------------------
| AUTOCOMPLETE
------------------------------------------------*/
// $(".js_autocomplete" ).autocomplete({
// 	source: PRODUCERS_TITLES,
// });

// function getKey(object, value) {
//   for(var key in object){
//     if(object[key] == value){
//       return key;
//     }
//   }
//   return null;
// };
/*------------------------------------------------
| CHECK Producer
------------------------------------------------*/
// var $form = $('.admin_panel_import_pdf');

// $form.find('input[type="submit"]').on('click', function(evt) {
// 	evt.preventDefault();
// 	var producer = $('.js_autocomplete').val();
// 	var key = getKey(PRODUCERS, producer);

// 	if (key) {
// 		$form.trigger('submit');
// 	} else {
// 		alert('Название производителя введено неправильно!');
// 		return false;
// 	}
// });