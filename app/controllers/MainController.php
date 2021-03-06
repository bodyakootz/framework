<?php
class MainController extends BaseController {
	public function index() {
		return View::make('index')->with([
			'items'	 => Item::all(),
			'spares' => Spare::all()
		]);
	}

	// public function about() {
	// 	return View::make('about')->with([
	// 		'articles'	=> Article::readAllArticles(),
	// 		'recents'	=> Recent::readAllRecents(),
	// 		'producers' => Producer::readAllProducers(),
	// 		'env' 		=> 'about'
	// 	]);
	// }

	// public function price() {
	// 	return View::make('price')->with([
	// 		'prices'	=> HELP::getPricesFromDir(HELP::$PRICES_DIR),
	// 		'articles'	=> Article::readAllArticles(),
	// 		'recents'	=> Recent::readAllRecents(),
	// 		'producers' => Producer::readAllProducers(),
	// 		'env' 		=> 'price'
	// 	]);
	// }

	// public function get_price() {
	// 	$prices = HELP::getPricesFromDir(HELP::$PRICES_DIR);
	// 	$price_id = Input::get('price_id');

	// 	header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	// 	header("Content-disposition: attachment; filename=$prices[$price_id]");
	// }

	// public function delivery() {
	// 	return View::make('delivery')->with([
	// 		'articles'	=> Article::readAllArticles(),
	// 		'recents'	=> Recent::readAllRecents(),
	// 		'producers' => Producer::readAllProducers(),
	// 		'env' 		=> 'delivery'
	// 	]);
	// }

	// public function specials() {
	// 	return View::make('items')->with([
	// 		'items'     => Item::getSpecialItems(),
	// 		'articles'	=> Article::readAllArticles(),
	// 		'recents'	=> Recent::readAllRecents(),
	// 		'producers' => Producer::readAllProducers(),
	// 		'env' 		=> 'specials'
	// 	]);
	// }

	// public function contacts() {
	// 	return View::make('contacts')->with([
	// 		'articles'	=> Article::readAllArticles(),
	// 		'recents'	=> Recent::readAllRecents(),
	// 		'producers' => Producer::readAllProducers(),
	// 		'env' 		=> 'contacts'
	// 	]);
	// }

	// public function category($category) {
	// 	return View::make('one_category')->with([
	// 		'items'     => Item::getItemsForCatalog(),
	// 		'subcats'	=> Subcat::getSubcatsByCategory($category),
	// 		'articles'	=> Article::readAllArticles(),
	// 		'recents'	=> Recent::readAllRecents(),
	// 		'producers' => Producer::readAllProducers(),
	// 		'env' 		=> 'catalog'
	// 	]);
	// }

	// public function items() {
	// 	return View::make('items')->with([
	// 		'items'     => Item::getItemsForCatalog(),
	// 		'current'	=> Subcat::find(Input::get('subcat_id')),
	// 		'articles'	=> Article::readAllArticles(),
	// 		'recents'	=> Recent::readAllRecents(),
	// 		'producers' => Producer::readAllProducers(),
	// 		'env' 		=> 'catalog'
	// 	]);
	// }

	// public function item() {
	// 	Recent::writeRecentForSession();

	// 	return View::make('item')->with([
	// 		'same'		=> Item::getSameItems(),
	// 		'item'      => Item::__items()->find(Input::get('item_id')),
	// 		'current'	=> Subcat::find(Input::get('subcat_id')),
	// 		'articles'	=> Article::readAllArticles(),
	// 		'recents'	=> Recent::readAllRecents(),
	// 		'producers' => Producer::readAllProducers(),
	// 		'env' 		=> 'catalog'
	// 	]);
	// }

	// public function articles() {
	// 	return View::make('articles')->with([
	// 		'articles'	=> Article::readAllArticles(),
	// 		'recents'	=> Recent::readAllRecents(),
	// 		'producers' => Producer::readAllProducers(),
	// 	]);
	// }

	// public function article() {
	// 	return View::make('article')->with([
	// 		'article'	=> Article::find(Input::get('article_id')),
	// 		'articles'	=> Article::readAllArticles(),
	// 		'recents'	=> Recent::readAllRecents(),
	// 		'producers' => Producer::readAllProducers(),
	// 	]);
	// }

	// public function byproducer() {
	// 	return View::make('items')->with([
	// 		'items'     => Item::getItemsByProducer(),
	// 		'current'	=> Producer::find(Input::get('producer_id')),
	// 		'articles'	=> Article::readAllArticles(),
	// 		'recents'	=> Recent::readAllRecents(),
	// 		'producers' => Producer::readAllProducers(),
	// 		'env' 		=> 'byproducer'
	// 	]);
	// }

	// public function user_login() {
	// 	$creds = [
	// 		'password'	=> Input::get('password'),
	// 		'email' 	=> Input::get('email')
	// 	];

	// 	Auth::user()->attempt($creds, true);
	// 	return Redirect::to('/');
	// }

	// public function user_logout() {
	// 	Auth::user()->logout();
	// 	return Redirect::to('/');
	// }

	// public function registration() {
	// 	$fields = Input::all();
	// 	$rules = [
	// 		'name'		=> 'required|between:1,64',
	// 		'surname'	=> 'required|between:1,64',
	// 		'company'	=> 'between:1,64',
	// 		'email'		=> 'required|email|between:6,64|unique:users',
	// 		'phone'		=> 'required|between:1,32',
	// 		'activity'	=> 'required|between:1,32',
	// 		'password'	=> 'required|between:6,128',
	// 		'confirm' 	=> 'required|same:password',
	// 	];

	// 	$validator = Validator::make($fields, $rules);

	// 	if ($validator->fails()) {
	// 		return Redirect::back()
	// 			->withInput()
	// 				->withErrors($validator->errors());
	// 	} else {
	// 		unset($fields['confirm']);
	// 		$fields['password'] = Hash::make($fields['password']);
	// 		User::create($fields);
	// 		return Redirect::to('/')
	// 			->with('message', 'Вы успешно зарегестрированы, '.$fields['name'].' '.$fields['surname']);
	// 	}
	// }

	// public function registration_page() {
	// 	return View::make('registration')->with([
	// 		'articles'	=> Article::readAllArticles(),
	// 		'recents'	=> Recent::readAllRecents(),
	// 		'producers' => Producer::readAllProducers(),
	// 	]);
	// }

	// public function feedback() {
	// 	$fields = Input::all();
	// 	$subject = Input::get('theme');

	// 	HELP::sendMail($fields, $subject, 'emails.email_feedback');
	// 	return Redirect::to('/')->with('message', 'Ваше письмо отправлено!');
	// }

	// public function order_page() {
	// 	return View::make('order')->with([
	// 		'item'		=> Item::__items()->find(Input::get('item_id')),
	// 		'articles'	=> Article::readAllArticles(),
	// 		'recents'	=> Recent::readAllRecents(),
	// 		'producers' => Producer::readAllProducers(),
	// 	]);
	// }

	// public function order() {
	// 	$fields = Input::all();
	// 	$email = Input::get('email');

	// 	// send to admin
	// 	HELP::sendMail($fields, 'Заказ оформлен', 'emails.email_order');
	// 	// send to user
	// 	HELP::sendMail($fields, 'Заказ оформлен', 'emails.email_order_user', $email);

	// 	return Redirect::to('/')->with('message', 'Ваш заказ оформлен!');
	// }
	public function order() {
		$fields = Input::all();
		$email = Input::get('email');

		// send to admin
		Help::sendMail($fields, 'Заказ оформлен', 'los', 'emails.email_order');

		
		// send to user
		Help::sendMail($fields, 'Заказ оформлен', 'los', 'emails.email_order_user', $email);
		return Redirect::to('/')->with('message', 'Спасибо за Ваш заказ. Мы свяжемся с Вами в ближайшее время!');
	}

	public function request() {
		$fields = Input::all();
		$email = Input::get('email');

		// send to admin
		Help::sendMail($fields, 'На сайте оставлен запрос на отправку прайса', 'los', 'emails.email_request');

		
		// send to user
		// Help::sendMail($fields, 'Заказ оформлен', 'los', 'emails.email_order_user', $email);
		return Redirect::to('/')->with('message', 'Спасибо за Ваш запрос. Мы свяжемся с Вами в ближайшее время!');
	}
	public function feedback() {
		$fields = Input::all();
		$email = Input::get('email');

		// send to admin
		Help::sendMail($fields, 'На сайте оставлен запрос на отправку прайса', 'los', 'emails.email_request');

		
		// send to user
		// Help::sendMail($fields, 'Заказ оформлен', 'los', 'emails.email_order_user', $email);
		return Redirect::to('/')->with('message', 'Спасибо за Ваше обращение. Мы свяжемся с Вами в ближайшее время!');
	}

	// public function search() {
	// 	return View::make('items')->with([
	// 		'items'     => Item::getItemsByQuery(),
	// 		'current'	=> Input::get('query'),
	// 		'articles'	=> Article::readAllArticles(),
	// 		'recents'	=> Recent::readAllRecents(),
	// 		'producers' => Producer::readAllProducers(),
	// 		'env' 		=> 'search'
	// 	]);
	// }
}
