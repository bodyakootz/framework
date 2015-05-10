<!DOCTYPE html>
<html lang="ru">
	<head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Los' electronics</title>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,100,300&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/font-awesome.min.css"/>
		<link href="js/pace/themes/yellow/pace-theme-minimal.css" rel="stylesheet" />
		<link href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.3/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
		<link rel="stylesheet" href="css/style.css"/>
		<link href="img/markup/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	</head>
	<body>
		<header>
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						    <span class="sr-only">Toggle navigation</span>
						    <span class="icon-bar"></span>
						    <span class="icon-bar"></span>
						    <span class="icon-bar"></span>
						  </button>
						  <a class="navbar-brand" href="/"><img src="img/markup/los_logo_end.png" alt=""></a>
						</div>
				    	<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					    	<ul class="nav navbar-nav navbar-right">
					    	  <li class="active"><a href="#main" class="smoothScroll">Главная <span class="sr-only">(current)</span></a></li>
					    	  <li><a href="#tech" class="smoothScroll">Техника</a></li>
					    	  <li><a href="#spares" class="smoothScroll">Запчасти</a></li>
					    	  <li><a href="#contacts" class="smoothScroll">Контакты</a></li>
					    	</ul>
					    </div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</div>
			</nav>
		</header>
		<main>
			<div class="main_wrap" id="main">
				<div class="container">
					<div class="row">
						<div class="img col-lg-6 col-md-6 col-sm-6 hidden-sm hidden-xs">
							<img src="img/markup/box-open.png" alt="" class="main_img img-responsive">
						</div>
						<div class="text col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<h1 class="company_name">LOS</h1>
							<h2 class="company_descr col-lg-8 col-md-8 col-sm-8 col-xs-10">Профессиональное бытовое оборудование от ведущих европейских производителей.</h2>
							<div class="img col-lg-6 col-md-6 col-sm-3 visible-sm">
								<img src="img/markup/box-open.png" alt="" class="main_img img-responsive">
							</div>
							<p class="input_header">Получить скидку и спецпредложения!</p>
							{{ Form::open(['url'=>'/request', 'method'=>'POST', 'class'=>'get_mail_form']) }}
								{{ Form::email('name', null, ['class'=>'form-control req', 'required', 'placeholder'=>'Введите ваш e-mail']) }}
								{{ Form::submit('Отправить', ['class'=>'btn uni_btn mail_btn']) }} 
							{{ Form::close() }}	
							<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
								<p class="see_all">Посмотреть товары на сайте</p>
							</div>
						</div>
						<div class="btn_div col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<a href="#tech" class="btn uni_btn y_btn col-lg-5 col-md-5 col-sm-5 col-xs-5 smoothScroll">Техника<i class="fa fa-angle-double-down"></i></a> 
							<a href="#spares" class="btn uni_btn y_btn col-lg-5 col-md-5 col-sm-5 col-xs-5 last_a smoothScroll">Запчасти<i class="fa fa-angle-double-down"></i></a> 
						</div>
					</div>
				</div>
			</div>
			<div class="pros_wrap slide-left hidden-xs" data-plugin-options='{"speed":150, "reverse":false, "offset":-300 }'>
				<div class="container">
					<div class="row">
						<h2 class="uni_block_heading">Наши преимущества</h2>
						<hr class="uni_block_hr">
						<p class="uni_block_subhead col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">Товары премиум класса для Вашего дома! Приобретайте профессиональное оборудование для вашего дома производства Швейцарии, эксклюзивное оборудование для профессионалов кухни.</p>
						<div class="one_pros col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-12">
							<div class="icon">
								<i class="fa fa-trophy"></i>
							</div>
							<div class="one_pros_descr col-lg-7 col-md-7 col-sm-7 col-xs-7">
								<h4>Профессиональное оборудование</h4>
								<p>Техника для тех кто ценит результат! Сделайте ваши блюда еще вкуснее с LOS!</p>
							</div>
						</div>
						<div class="one_pros col-lg-5 col-md-5 col-sm-5 col-xs-12">
							<div class="icon">
								<i class="fa fa-trophy"></i>
							</div>
							<div class="one_pros_descr col-lg-7 col-md-7 col-sm-7 col-xs-7">
								<h4>Швейцарское качество</h4>
								<p>Всемирно известное швейцарское качество теперь в вашем доме! Не упустите свой шанс!</p>
							</div>
						</div>
						<div class="one_pros col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-12">
							<div class="icon">
								<i class="fa fa-trophy"></i>
							</div>
							<div class="one_pros_descr col-lg-7 col-md-7 col-sm-7 col-xs-7">
								<h4>Эксклюзивные устройства </h4>
								<p>Только эклклюзивные устройства для ваших эсклюзивных блюд от оффициального представителя в России!</p>
							</div>
						</div>
						<div class="one_pros col-lg-5 col-md-5 col-sm-5 col-xs-12">
							<div class="icon">
								<i class="fa fa-trophy"></i>
							</div>
							<div class="one_pros_descr col-lg-7 col-md-7 col-sm-7 col-xs-7">
								<h4>Техническая поддержка</h4>
								<p>Собственная служба технической поддержки и склад запчастей гарантируют Вам максимально оперативный сервис!</p>
							</div>
						</div> 
					</div>
				</div>
			</div>
			<div class="pros_wrap visible-xs">
				<div class="container">
					<div class="row">
						<h2 class="uni_block_heading">Наши преимущества</h2>
						<hr class="uni_block_hr">
						<p class="uni_block_subhead col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">Товары премиум класса для Вашего дома! Приобретайте профессиональное оборудование для вашего дома производства Швейцарии, эксклюзивное оборудование для профессионалов кухни.</p>
						<div class="one_pros col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-12">
							<div class="icon">
								<i class="fa fa-trophy"></i>
							</div>
							<div class="one_pros_descr col-lg-7 col-md-7 col-sm-7 col-xs-7">
								<h4>Профессиональное оборудование</h4>
								<p>Техника для тех кто ценит результат! Сделайте ваши блюда еще вкуснее с LOS!</p>
							</div>
						</div>
						<div class="one_pros col-lg-5 col-md-5 col-sm-5 col-xs-12">
							<div class="icon">
								<i class="fa fa-trophy"></i>
							</div>
							<div class="one_pros_descr col-lg-7 col-md-7 col-sm-7 col-xs-7">
								<h4>Швейцарское качество</h4>
								<p>Всемирно известное швейцарское качество теперь в вашем доме! Не упустите свой шанс!</p>
							</div>
						</div>
						<div class="one_pros col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-12">
							<div class="icon">
								<i class="fa fa-trophy"></i>
							</div>
							<div class="one_pros_descr col-lg-7 col-md-7 col-sm-7 col-xs-7">
								<h4>Эксклюзивные устройства </h4>
								<p>Только эклклюзивные устройства для ваших эсклюзивных блюд от оффициального представителя в России!</p>
							</div>
						</div>
						<div class="one_pros col-lg-5 col-md-5 col-sm-5 col-xs-12">
							<div class="icon">
								<i class="fa fa-trophy"></i>
							</div>
							<div class="one_pros_descr col-lg-7 col-md-7 col-sm-7 col-xs-7">
								<h4>Техническая поддержка</h4>
								<p>Собственная служба технической поддержки и склад запчастей гарантируют Вам максимально оперативный сервис!</p>
							</div>
						</div> 
					</div>
				</div>
			</div>
			<div class="mail_wrap slide-left hidden-xs" data-plugin-options='{"speed":125, "reverse":false }'>
				<div class="container">
					<div class="row">
						<div class="img hidden-xs">
							<img src="img/markup/envelope.png" alt="Send email" class="envelope img-responsive">
						</div>
						<div class="mail_text col-lg-8 col-sm-8 col-xs-12">
							<h3 class="mail_heading">Хотите получить скидку?</h3>
							<p>Оставтье заявку и получите Скидку до 30% !</p>
							{{ Form::open(['url'=>'/request', 'method'=>'POST', 'class'=>'get_mail_form']) }}
								{{ Form::text('name', null, ['class'=>'form-control req', 'required', 'placeholder'=>'Введите ваш e-mail']) }}
								{{ Form::submit('Отправить', ['class'=>'btn uni_btn mail_btn']) }} 
							{{ Form::close() }}	
						</div>
					</div>
				</div>
			</div>
			<div class="mail_wrap visible-xs">
				<div class="container">
					<div class="row">
						<div class="img hidden-xs">
							<img src="img/markup/envelope.png" alt="Send email" class="envelope img-responsive">
						</div>
						<div class="mail_text col-lg-8 col-sm-8 col-xs-12">
							<h3 class="mail_heading">Хотите получить скидку?</h3>
							<p>Оставтье заявку и получите Скидку до 30% !</p>
							{{ Form::open(['url'=>'/request', 'method'=>'POST', 'class'=>'get_mail_form']) }}
								{{ Form::text('name', null, ['class'=>'form-control req', 'required', 'placeholder'=>'Введите ваш e-mail']) }}
								{{ Form::submit('Отправить', ['class'=>'btn uni_btn mail_btn']) }} 
							{{ Form::close() }}	
						</div>
					</div>
				</div>
			</div>
			<div class="tech_wrap" id="tech">
				<div class="container">
					<div class="row">
						<h2 class="uni_block_heading">Техника</h2>
						<hr class="uni_block_hr">
						<?php $i=0; ?>
						@foreach ($items as $item)
							<div class="one_item col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-12 col-xs-offset-0" style="display:none">
								<div class="img">
									{{ HTML::image("img/photos/$item->photo_1", "$item->title", ['class'=>'item_img']) }}
									<div class="hover">
										<a data-toggle="modal" data-target="#itemModal{{$i}}"><i class="fa fa-plus fa-5x"></i></a>
									</div>
								</div>
								<div class="short_title">
									<h2 class="item_title"><a data-toggle="modal" data-target="#itemModal{{$i}}">{{$item->title}}</a></h2>
									<h2 class="item_title full"><a data-toggle="modal" data-target="#itemModal{{$i}}">{{$item->title}}</a></h2>
								</div>
								<div class="short_descr">
									<p class="item_descr">{{$item->short_description}}</p>
									<p class="item_descr full">{{$item->short_description}}</p>
								</div>
								{{-- <p class="item_descr">{{$item->description}}</p> --}}
								<div class="price">
									<p class="item_price">{{$item->price}}</p>
									<p class="item_currency" >руб.</p>
								</div>
								<a class="btn uni_btn y_btn" data-toggle="modal" data-target="#orderModal{{$i}}">Заказать</a>
							</div>
							<div class="item_m modal fade" id="itemModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="itemModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="itemModalLabel">{{$item->title}}</h4>
										</div>
										<div class="modal-body">
											<div class="main_content">
												<div class="gallery">
													<div class="fotorama" 
														data-nav="thumbs" 
														data-hash="true"  
														data-arrows="true" 
														data-click="true" 
														data-swipe="true" 
														data-width="100%" 
														data-ratio="800/600">

													    {{ HTML::image("img/photos/$item->photo_1", "$item->title", ['class'=>'item_img']) }}

														<?php 
															$fields = [];
															for ($j=2; $j<6; $j++) {
																$fields[] = 'photo_'.$j;
															}
															foreach ($fields as $field) { 
																if ($item->$field != 'no_photo.png') { 
															   		echo HTML::image("img/photos/".$item->$field, "$item->title", ['class'=>'item_img']);
															   	}
															}
														?>
													</div>
												</div>
												<div class="description">
													{{-- <div class="short_descr">
														<p class="item_descr">{{$item->short_description}}</p>
													</div> --}}
													<p class="item_descr">{{$item->description}}</p>
													<div class="price">
														<p class="item_price">{{$item->price}}</p>
														<p class="item_currency" >руб.</p>
													</div>
													<a class="btn uni_btn mail_btn o_btn" data-toggle="modal" data-target="#orderModal{{$i}}">Заказать</a>
												</div>
											</div>
										</div>
									</div>
							  	</div>
							</div>
							<div class="order_m modal fade" id="orderModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title uni_block_heading" id="orderModalLabel">Заказать</h4>
										</div>
										<div class="modal-body">
											<div class="main_content">
												{{ Form::model($item, ['url'=>['/order'], 'method'=>'POST', 'class'=>'item_form']) }}
													<table class="order_form_table">
														<tr>
															<td class="req">{{ Form::label('name', 'Имя: ', ['class'=>'main_label']) }}</td>
															<td>{{ Form::text('name', null, ['class'=>'change_input form-control', 'required']) }}</td>
														</tr>
														<tr>
															<td>{{ Form::label('surname', 'Фамилия: ', ['class'=>'main_label']) }}</td>
															<td>{{ Form::text('surname', null, ['class'=>'change_input form-control']) }}</td>
														</tr>
														<tr>
															<td class="req">{{ Form::label('phone', 'Телефон: ', ['class'=>'main_label']) }}</td>
															<td>{{ Form::text('phone', null, ['class'=>'change_input change_input_code form-control', 'required']) }}</td>
														</tr>
														<tr>
															<td class="req">{{ Form::label('email', 'E-Mail: ', ['class'=>'main_label']) }}</td>
															<td>{{ Form::email('email', null, ['class'=>'change_input change_input_code form-control', 'required']) }}</td>
														</tr>
														<tr>
															<td>{{ Form::label('title', 'Наименование: ', ['class'=>'main_label']) }}</td>
															<td>{{ Form::text('title', $item->name, ['class'=>'change_input change_input_short form-control', 'required', 'readonly'=>'readonly']) }}</td>
														</tr>
														<tr>
															<td>{{ Form::label('code', 'Артикул: ', ['class'=>'main_label']) }}</td>
															<td>{{ Form::text('code', $item->code, ['class'=>'change_input change_input_code form-control', 'required', 'readonly'=>'readonly']) }}</td>
														</tr>
														<tr>
															<td>{{ Form::label('price', 'Цена: ', ['class'=>'main_label']) }}</td>
															<td>{{ Form::text('price', $item->price, ['class'=>'change_input change_input_code form-control', 'required', 'readonly'=>'readonly']) }}</td>
														</tr>
														<tr>
															<td class="area">{{ Form::label('comment', 'Комментарий: ', ['class'=>'main_label']) }}</td>
															<td>{{ Form::textarea('comment', null, ['class'=>'order_form_body form-control',]) }}</td>
														</tr>
													</table>
													{{ Form::submit('Отправить', ['class'=>'submit_field btn mail_btn']) }}
												{{ Form::close() }}
											</div>
										</div>
									</div>
							  	</div>
							</div>
							<?php $i++;?>
						@endforeach
						<a class="btn uni_btn y_btn more_item col-lg-3 col-lg-offset-5 col-md-3 col-md-offset-5 col-sm-5 col-sm-offset-4 col-xs-10 col-xs-offset-1">больше товаров<i class="fa fa-spinner fa-spin fa-lg"></i></a>
					</div>
				</div>
			</div>
			<div class="comments_wrap slide-left hidden-xs" data-plugin-options='{"speed":250, "reverse":false, "offset":-20 }'>
				<div class="container">
					<div class="row">
						<div class="img_name col-lg-5 col-md-5 col-sm-5 col-xs-5">
							<img src="img/markup/photo_client.png" alt="Commet photo" class="comment_photo">
							<div class="subscribe col-sm-5 col-xs-5 col-md-5 col-lg-5">
								<h3 class="name">Богдан</h3>
								<p class="small_d">довольный клиент</p>
							</div>
						</div>
						<blockquote class="comment col-lg-7 col-md-7 col-sm-7 col-xs-7">
						  	<p>"Спасибо за вашу оперативность. Качество действительно на высоком уровне. Покупал контактный гриль, теперь по выходным готовим барбекю прямо в доме! Удобно и очень вкусно! Получается как в ресторане."</p>
						</blockquote>  
					</div>
				</div>
			</div>
			<div class="sapre_wrap" id="spares">
				<div class="container">
					<div class="row">
						<h2 class="uni_block_heading">Запчасти</h2>
						<hr class="uni_block_hr">
						<p class="uni_block_subhead col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">Техническая поддержка и запасным частям для Вашего оборудования. Техника –всегда в строю!</p>
						<?php $x=0; ?>
						@foreach ($spares as $spare)
							<div class="one_item col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-12 col-xs-offset-0" style="display:none; float:none">
								<div class="img">
									{{ HTML::image("img/photos/$spare->photo_1", "$spare->title", ['class'=>'item_img']) }}
									<div class="hover">
										<a data-toggle="modal" data-target="#spareModal{{$x}}"><i class="fa fa-plus fa-5x"></i></a>
									</div>
								</div>
								<h2 class="item_title"><a data-toggle="modal" data-target="#spareModal{{$x}}">{{$spare->title}}</a></h2>
								<div class="short_descr">
									<p class="item_descr">{{$spare->short_description}}</p>
									<p class="item_descr full">{{$spare->short_description}}</p>
								</div>
								{{-- <p class="item_descr">{{$spare->description}}</p> --}}
								<div class="price">
									<p class="item_price">{{$spare->price}}</p>
									<p class="item_currency" >руб.</p>
								</div>
								<a class="btn uni_btn y_btn" data-toggle="modal" data-target="#orderModals{{$x}}">Заказать</a>
							</div>
							<div class="item_m modal fade" id="spareModal{{$x}}" tabindex="-1" role="dialog" aria-labelledby="spareModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="spareModalLabel">{{$spare->title}}</h4>
										</div>
										<div class="modal-body">
											<div class="main_content">
												<div class="gallery">
													<div class="fotorama" 
															data-nav="thumbs" 
															data-hash="true"  
															data-arrows="true" 
															data-click="true" 
															data-swipe="true" 
															data-width="100%" 
															data-ratio="800/600">
														    {{ HTML::image("img/photos/$spare->photo_1", "$spare->title", ['class'=>'item_img']) }}
														    <?php 
																$fields = [];
																for ($j=2; $j<6; $j++) {
																	$fields[] = 'photo_'.$j;
																}
																foreach ($fields as $field) { 
																	if ($spare->$field != 'no_photo.png') { 
																   		echo HTML::image("img/photos/".$spare->$field, "$spare->title", ['class'=>'item_img']);
																   	}
																}
															?>
														</div>
													</div>	
												<div class="description">
													{{-- <div class="short_descr">
														<p class="item_descr">{{$item->short_description}}</p>
													</div> --}}
													<p class="item_descr">{{$spare->description}}</p>
													<div class="price">
														<p class="item_price">{{$spare->price}}</p>
														<p class="item_currency" >руб.</p>
													</div>
													<a class="btn uni_btn mail_btn o_btn" data-toggle="modal" data-target='#orderModals{{$x}}'>Заказать</a>
												</div>
											</div>
										</div>
									</div>
							  	</div>
							</div>
							<div class="order_m modal fade" id="orderModals{{$x}}" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title uni_block_heading" id="orderModalLabel">Заказать</h4>
										</div>
										<div class="modal-body">
											<div class="main_content">
												{{ Form::model($spare, ['url'=>['/order'], 'method'=>'POST', 'class'=>'item_form']) }}
													<table class="order_form_table">
														<tr>
															<td class="req">{{ Form::label('name', 'Имя: ', ['class'=>'main_label']) }}</td>
															<td>{{ Form::text('name', null, ['class'=>'change_input form-control', 'required']) }}</td>
														</tr>
														<tr>
															<td>{{ Form::label('surname', 'Фамилия: ', ['class'=>'main_label']) }}</td>
															<td>{{ Form::text('surname', null, ['class'=>'change_input form-control']) }}</td>
														</tr>
														<tr>
															<td class="req">{{ Form::label('phone', 'Телефон: ', ['class'=>'main_label']) }}</td>
															<td>{{ Form::text('phone', null, ['class'=>'change_input change_input_code form-control', 'required']) }}</td>
														</tr>
														<tr>
															<td class="req">{{ Form::label('email', 'E-Mail: ', ['class'=>'main_label']) }}</td>
															<td>{{ Form::email('email', null, ['class'=>'change_input change_input_code form-control', 'required']) }}</td>
														</tr>
														<tr>
															<td>{{ Form::label('title', 'Наименование: ', ['class'=>'main_label']) }}</td>
															<td>{{ Form::text('title', $spare->name, ['class'=>'change_input change_input_short form-control', 'required', 'readonly'=>'readonly']) }}</td>
														</tr>
														<tr>
															<td>{{ Form::label('code', 'Артикул: ', ['class'=>'main_label']) }}</td>
															<td>{{ Form::text('code', $spare->code, ['class'=>'change_input change_input_code form-control', 'required', 'readonly'=>'readonly']) }}</td>
														</tr>
														<tr>
															<td>{{ Form::label('price', 'Цена: ', ['class'=>'main_label']) }}</td>
															<td>{{ Form::text('price', $spare->price, ['class'=>'change_input change_input_code form-control', 'required', 'readonly'=>'readonly']) }}</td>
														</tr>
														<tr>
															<td class="area">{{ Form::label('comment', 'Комментарий: ', ['class'=>'main_label']) }}</td>
															<td>{{ Form::textarea('comment', null, ['class'=>'order_form_body form-control',]) }}</td>
														</tr>
													</table>
													{{ Form::submit('Отправить', ['class'=>'submit_field btn mail_btn']) }}
												{{ Form::close() }}
											</div>
										</div>
									</div>
							  	</div>
							</div>
							<?php $x++;?>
						@endforeach
						<a class="btn uni_btn y_btn more_item col-lg-3 col-lg-offset-5 col-md-3 col-md-offset-5 col-sm-5 col-sm-offset-4 col-xs-10 col-xs-offset-1">больше товаров<i class="fa fa-spinner fa-spin fa-lg"></i></a>
					</div>
				</div>
			</div>
			<div class="comments_wrap slide-left hidden-xs" data-plugin-options='{"speed":250, "reverse":false, "offset":-20 }'>
				<div class="container">
					<div class="row">
						<div class="img_name col-lg-5 col-md-5 col-sm-5 col-xs-5">
							<img src="img/markup/photo_client1.png" alt="Commet photo" class="comment_photo">
							<div class="subscribe col-sm-5 col-xs-5 col-md-5 col-lg-5">
								<h3 class="name">Ярослав</h3>
								<p class="small_d">сервис-менеджер</p>
							</div>
						</div>
						<blockquote class="comment col-lg-7 col-md-7 col-sm-7 col-xs-7">
						  	<p>"Наше оборудование всегда в строю! На нашем складе всегда в наличие комплектующие и запасные части для оборудования. Теперь Ваше любимое устройство будет работать гораздо дольше, чем обычное одноразовое оборудование сторонних производителей."</p>
						</blockquote>  
					</div>
				</div>
			</div>
			<div class="results_wrap slide-left hidden-xs" data-plugin-options='{"speed":200, "reverse":false, "offset":-20 }'>
				<div class="container">
					<div class="row">
						<p class="one_res first col-xs-5 col-xs-offset-1 col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-3 col-sm-offset-0">
							<i class="fa fa-user fa-3x"></i>
							1200 довольных клиентов
						</p>
						<p class="one_res col-xs-5 col-lg-3 col-md-3 col-sm-3">
							<i class="fa fa-coffee fa-3x"></i>
							2000 ед. проданной техники
						</p>
						<p class="one_res col-xs-5 col-xs-offset-1 col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-3 col-sm-offset-0">
							<i class="fa fa-wrench fa-3x"></i>
							200 ед. проданных запчатей
						</p>
						<p class="one_res col-xs-5 col-lg-3 col-md-3 col-sm-3 last">
							<i class="fa fa-smile-o fa-3x"></i>
							1200 приятных впечатлений
						</p>  
					</div>
				</div>
			</div>
			<div class="results_wrap visible-xs">
				<div class="container">
					<div class="row">
						<p class="one_res first col-xs-5 col-xs-offset-1 col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-3 col-sm-offset-0">
							<i class="fa fa-user fa-3x"></i>
							1200 довольных клиентов
						</p>
						<p class="one_res col-xs-5 col-lg-3 col-md-3 col-sm-3">
							<i class="fa fa-coffee fa-3x"></i>
							2000 ед. проданной техники
						</p>
						<p class="one_res col-xs-5 col-xs-offset-1 col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-3 col-sm-offset-0">
							<i class="fa fa-wrench fa-3x"></i>
							200 ед. проданных запчатей
						</p>
						<p class="one_res col-xs-5 col-lg-3 col-md-3 col-sm-3 last">
							<i class="fa fa-smile-o fa-3x"></i>
							1200 приятных впечатлений
						</p>  
					</div>
				</div>
			</div>
			<div class="contacts_wrap" id="contacts">
				<div class="container">
					<div class="row">
						<h2 class="uni_block_heading">Контакты</h2>
						<hr class="uni_block_hr">
						<p class="uni_block_subhead col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">Торопитесь заказать, каждому впервые обратившемуся клиенту скидки на оборудование до 30%!</p>
						<div class="icons">
							<div class="tel">
								<i class="fa fa-phone-square fa-5x"></i>
								<p>(812) 4554001 <br>
									(812) 3747001 <br>
									(812) 9823354 <br>
									(812) 6709767</p>
							</div>
							<div class="adr">
								<i class="fa fa-map-marker fa-5x"></i>
								<p class="adress">Санкт-Петербург<br> ул. Кантемировская 12<br>бизнес-центр "Радуга"</p>
							</div>
							<div class="mail">
								<i class="fa fa-envelope-square fa-5x"></i>
								<p><a href="mailto:9823354@mail.ru">9823354@mail.ru</a></p>
							</div>
							<iframe 
								width="100%"
								height="400" 
								frameborder="0"
								style="border:0"
								src="https://www.google.com/maps/embed/v1/place?q=%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D1%8F%2C%20%D0%B3%D0%BE%D1%80%D0%BE%D0%B4%20%D0%A1%D0%B0%D0%BD%D0%BA%D1%82-%D0%9F%D0%B5%D1%82%D0%B5%D1%80%D0%B1%D1%83%D1%80%D0%B3%2C%20%D0%A1%D0%B0%D0%BD%D0%BA%D1%82-%D0%9F%D0%B5%D1%82%D0%B5%D1%80%D0%B1%D1%83%D1%80%D0%B3%2C%20%D0%9A%D0%B0%D0%BD%D1%82%D0%B5%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F%20%D1%83%D0%BB%D0%B8%D1%86%D0%B0%2012&key=AIzaSyBR6ruk6PgDAPS4ObXScQCVKtw9a2y0RXw">
							</iframe>
						</div>
					</div>
				</div>
			</div>
			<div class="write_wrap slide-bottom" data-plugin-options='{"speed":500, "reverse":false, "offset":-600 }'>
				<div class="container">
					<div class="row">
						<h2 class="uni_block_heading">Написать нам</h2>
						<hr class="uni_block_hr">
						<p class="uni_block_subhead">Остались вопросы? Напишите нам и мы максимально оперативно свяжимся с вами!</p>
						<div class="contacts_contact_form">
							{{ Form::open(['url'=>'/feedback', 'method'=>'POST', 'class'=>'item_form admin_info_form']) }}
								<table class="contacts_form_table col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
									<tr>
										<td class="req">{{ Form::label('name', 'Имя: ', ['class'=>'main_label']) }}</td>
										<td>{{ Form::text('name', null, ['class'=>'change_input_contacts form-control', 'required']) }}</td>
									</tr>
									<tr>
										<td class="req">{{ Form::label('email', 'E-mail: ', ['class'=>'main_label']) }}</td>
										<td>{{ Form::email('email', null, ['class'=>'change_input_contacts form-control', 'required']) }}</td>
									</tr>
									<tr>
										<td class="req area">{{ Form::label('body', 'Текст: ', ['class'=>'main_label area_label']) }}</td>
										<td>{{ Form::textarea('body', null, ['class'=>'change_input_contacts contacts_form_body form-control', 'required']) }}</td>
									</tr>
								</table>
								{{ Form::submit('Отправить', ['class'=>'btn submit_field save_button uni_btn mail_btn']) }} 
							{{ Form::close() }}
						</div>
					</div>
				</div>
			</div>
		</main>
		<footer>
			<div class="footer_wrap">
				<div class="container">
					<div class="row">
						<div class="logo visilble-xs hidden-sm hidden-md hidden-lg">
							<a href="/" class="visilble-xs hidden-sm hidden-md hidden-lg"><img src="img/markup/los_logo_end.png" alt=""></a>
						</div>
						<div class="copy">
						  	<p><i class="fa fa-copyright"></i>2015</p>
						  	<p>made by <a href="http://www.dev.bzzz.biz.ua" target="_blank">bzzz!* web development studio</a></p>
						</div>
						<div class="nav_footer">  	
						  	<ul class="nav navbar-nav navbar-right">
					    		<li class="active"><a href="/">Главная <span class="sr-only">(current)</span></a></li>
					    		<li><a href="#tech">Техника</a></li>
					    		<li><a href="#spares">Запчасти</a></li>
					    		<li><a href="#contacts">Контакты</a></li>
					    	</ul>
						</div>  
					</div>
				</div>
			</div>
		</footer>
	{{-- // <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> --}}
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/pace/pace.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.3/fotorama.js"></script> <!-- 16 KB -->
	<script src="js/jquery.fadethis.min.js"></script>
	<script src="js/script.js"></script>
	<script>$(window).fadeThis();</script>
	</body>
</html>
