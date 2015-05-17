@section('catalog')
	<div class="catalog_inline">
		{{-- @foreach($items as $item) --}}
			<div class="item">
				<div class="item_img_block">
					<a href="#">
						{{ HTML::image("img/markup/logo.jpg", "alt", ['class'=>'item_img']) }}
					</a>
					{{-- {{ HTML::image("img/markup/$item->photo", "$item->title", ['class'=>'items_page_item_img']) }} --}}
				</div>
				<div class="item_description_block">
					<a href="#">
						<h1 class="item_title">Some item titile</h1>
						<h1 class="item_title full">Some item titile</h1>
					</a>
					{{-- {{HTML::link($HELP::url_slug(["/", "$item->category", "/", "$item->subcat", "/", "$item->title"])."?subcat_id=$item->subcat_id&item_id=$item->item_id", $item->title,['class'=>'item_title']) }} --}}
					<div class="item_icons">
						<a href="#" class="item_icon"><i class="fa fa-bed fa-3x"></i></a>
						<a href="#" class="item_icon"><i class="fa fa-cart-plus fa-3x"></i></a>
						<a href="#" class="item_icon"><i class="fa fa-wrench fa-3x"></i></a>
						<a href="#" class="item_icon"><i class="fa fa-house fa-3x"></i></a>
						<a href="#" class="item_icon"><i class="fa fa-list fa-3x"></i></a>
					</div>
					<table class="item_params">
					<tr>
						<td>Код: </td>
						<td>123134</td>
					</tr>
					<tr>
						<td>Артикул: </td>
						<td>1234124134</td>
					</tr>
					<tr>
						<td>Упаковка: </td>
						<td>в 1 упаковке 100 метров</td>
					</tr>
					<tr>
						<td>Производтель: </td>
						<td>Севкабель</td>
					</tr>
					<tr>
						<td>Серия: </td>
						<td>12АА23Вв</td>
					</tr>
					</table>
				</div>
				<div class="price_and_add">
					<div class="item_price_and_proc">
						<div class="item_price">
							<p class="price">12345</p>
							<p class="currency">руб.</p>
						</div>
						<div class="item_proc">
							<p>В наличии</p>
						</div>
					</div>
					<div class="item_add">
						<div class="add_to_chart">
							<a href "#">
								<i class="fa fa-shopping-cart fa-2x"></i>
								В корзину
							</a>
						</div>
					</div>
				</div>
			</div>
		{{-- @endforeach	 --}}
	</div>
@stop