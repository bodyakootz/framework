@section('catalog')
	<div class="catalog_inline">
		<div class="item">
			<table class="item_params">
				<tr class="block_heading">
					<td>Код</td>
					<td>Изображение</td>
					<td>Наименование</td>
					<td>Информация</td>
					<td>Артикул</td>
					<td>Производитель</td>
					<td>Упаковка</td>
					<td>Наличие</td>
					<td>Цена</td>
					<td>Корзина</td>
				</tr>
				{{-- @foreach($items as $item) --}}
					<tr class="item_line">
						<td>12345</td>
						<td>{{HTML::image("img/markup/logo.jpg", "alt", ['class'=>'item_img'])}}</td>
						<td>
							<a href="#" class="title">Some title</a>
						</td>
						<td>
							<a href="#" class="item_icon"><i class="fa fa-wrench fa-lg"></i></a>
							<a href="#" class="item_icon"><i class="fa fa-list fa-lg"></i></a>
						</td>
						<td>
							<p class="serial">E232NVBGjl45</p>
						</td>
						<td>
							<p class="producer">Producer</p>
						</td>
						<td>
							<p class="package">5</p>
							<p class="measure">шт.</p>
						</td>
						<td>
							<p class="procurement">В наличии</p>
						</td>
						<td>
							<p class="price">12334</p>
							<p class="currency">руб.</p>
						</td>
						<td>
							<a href "#">
								<i class="fa fa-cart-plus fa-lg"></i>
								В корзину
							</a>
						</td>
					</tr>
				{{-- @endforeach	 --}}
			</table>
			{{-- <div class="code_block">
				<p class="block_heading">Код</p>
				<p class="code">12234131</p>
			</div>
			<div class="item_img_block">
				<a href="#">
					{{ HTML::image("img/markup/logo.jpg", "alt", ['class'=>'item_img']) }}
				</a>
				{{-- {{ HTML::image("img/markup/$item->photo", "$item->title", ['class'=>'items_page_item_img']) }} --}}
			{{-- </div>
			<div class="title_block">
				<p class="block_heading">Наименование</p>
				<a href="#" class="title">Some title</a>
			</div>
			<div class="info_links">
				<p class="block_heading">Информация</p>
				<a href="#" class="item_icon"><i class="fa fa-wrench fa-lg"></i></a>
				<a href="#" class="item_icon"><i class="fa fa-list fa-lg"></i></a>
			</div>
			<div class="serial_num_block">
				<p class="block_heading">Артикул</p>
				<p class="serial">E232NVBGjl45</p>
			</div>
			<div class="package_block">
				<p class="block_heading">Упаковка</p>
				<p class="package">5</p>
				<p class="measure">шт.</p>
			</div>
			<div class="procurement_block">
				<p class="block_heading">Наличие</p>
				<p class="procurement">В наличии</p>
			</div>
			<div class="price_block">
				<p class="block_heading">Цена</p>
				<p class="price">12334</p>
				<p class="currency">руб.</p>
			</div>
			<div class="add_block">
				<p class="block_heading">В корзину</p>
				<a href "#">
					<i class="fa fa-cart-plus fa-lg"></i>
					В корзину
				</a>
			</div> --}}
		</div>	
	</div>
@stop