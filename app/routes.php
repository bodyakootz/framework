<?php

// MAIN CONTROLLER
Route::get('/', 'MainController@index');
Route::post('/order', 'MainController@order');
Route::post('/request', 'MainController@request');
Route::post('/feedback', 'MainController@feedback');
// Route::get('/about', 'MainController@about');
// Route::get('/price', 'MainController@price');
// Route::get('/get_price', 'MainController@get_price');
// Route::get('/delivery', 'MainController@delivery');
// Route::get('/specials', 'MainController@specials');
// Route::get('/contacts', 'MainController@contacts');
// Route::get('/articles', 'MainController@articles');
// Route::get('/articles/{article_title}', 'MainController@article');
// Route::get('/category/{category}', 'MainController@category');
// Route::get('/producers/{producer_title}', 'MainController@byproducer');
// Route::post('/user_login', 'MainController@user_login');
// Route::get('/registration', 'MainController@registration_page');
// Route::post('/registration', 'MainController@registration');
// Route::post('/order', 'MainController@order');
// Route::get('/search', 'MainController@search');
// Route::post('/user_logout', 'MainController@user_logout');
// Route::post('/delete_file_from_server', 'MainController@delete_file_from_server');

// ADMIN CONTROLLER
// Route::get('/admin', 'AdminController@admin');
// Route::post('/admin_login', 'AdminController@admin_login');
// Route::group(['prefix'=>'/admin', 'before'=>'auth2'], function() {
// 	Route::post('/set_discount', 'AdminController@set_discount');
// 	Route::get('/search', 'AdminController@search');
// 	Route::post('/import', 'AdminController@import');
// 	Route::post('/admin_logout', 'AdminController@admin_logout');
// 	Route::get('/catalog', 'AdminController@catalog');
// 	Route::get('/producers/{producer_title}', 'AdminController@byproducer');


// 	// ARTICLE
// 	Route::get('/articles', 'AdminController@articles');
// 	Route::get('/change_article', 'AdminController@change_article');
// 	Route::post('/update_article', 'AdminController@update_article');
// 	Route::post('/delete_article', 'AdminController@delete_article');

// 	// SUBCAT
// 	Route::get('/subcats', 'AdminController@subcats');
// 	Route::post('/update_subcat', 'AdminController@update_subcat');
// 	Route::post('/delete_subcat', 'AdminController@delete_subcat');

// 	// PRODUCER
// 	Route::get('/producers', 'AdminController@producers');
// 	Route::post('/update_producer', 'AdminController@update_producer');
// 	Route::post('/delete_producer', 'AdminController@delete_producer');

// 	// AJAX
// 	Route::post('/ajax_change_subcat', 'AdminController@ajax_change_subcat');
// 	Route::post('/ajax_set_special', 'AdminController@ajax_set_special');
// 	Route::post('/ajax_set_hit', 'AdminController@ajax_set_hit');
// 	Route::post('/ajax_set_procurement', 'AdminController@ajax_set_procurement');
// 	Route::post('/ajax_delete_group', 'AdminController@ajax_delete_group');
	
// 	Route::post('/ajax_get_subcats', 'AdminController@ajax_get_subcats');
// 	Route::post('/ajax_item_image', 'AdminController@ajax_item_image');
	
// 	// ITEM
// 	Route::get('/change_item', 'AdminController@change_item');
// 	Route::post('/update_item', 'AdminController@update_item');
// 	Route::post('/delete_item', 'AdminController@delete_item');
// 	Route::get('/{category}/{subcat}', 'AdminController@items');
// });

// Route::get('/test', function() {
// 	// echo url('foo/bar', [5, 10]);
// });

// Route::get('/{category}/{subcat}', 'MainController@items');
// Route::get('/{category}/{subcat}/{item_title}', 'MainController@item');

// App::missing(function($exception) {
// 	return Redirect::to('/');
// });

// /*------------------------------------------------
// | SQL Listener or using debug bar
// ------------------------------------------------*/
// if (Config::get('database.log_sql')) {           
// 	Event::listen('illuminate.query', function($query, $bindings, $time, $name) {
// 		$data = compact('bindings', 'time', 'name');
// 		// Format binding data for sql insertion
// 		foreach ($bindings as $i => $binding) {
// 			if ($binding instanceof \DateTime) {
// 				$bindings[$i] = $binding->format('\'Y-m-d H:i:s\'');
// 			} else if (is_string($binding)) {
// 				$bindings[$i] = "'$binding'";
// 			}
// 		}
// 		// Insert bindings into query
// 		$query = str_replace(array('%', '?'), array('%%', '%s'), $query);
// 		$query = vsprintf($query, $bindings); 

// 		echo '<pre>';
// 		var_dump($query);
// 		echo '</pre>';
// 	});
// }
// /*----------------------------------------------*/