<div class="message">
	<p>На вашем ресурсе <a href="http://www.vertex-shop.ru" target="_blank">Los</a>была оставлена заявка на заказ товара!</p>
</div>
<table class="order_form_table">
	<tr>
		<td class="main_label">Имя: </td>
		<td class="change_input form-control">{{{$name}}}</td>
	</tr>
	{{-- Insert if statment for surname --}}
	<tr>
		<td class="main_label">Фамилия:</td>
		<td class="change_input form-control">{{{$surname}}}</td>
	</tr>
	<tr>
		<td class="main_label">Наименование:</td>
		<td class="change_input change_input_short form-control">{{{$title}}}</td>
	</tr>
	<tr>
		<td class="main_label">Код:</td>
		<td class="change_input change_input_code form-control">{{{$code}}}</td>
	</tr>
	<tr>
		<td class="main_label">Цена:</td>
		<td class="change_input change_input_code form-control">{{{$price}}} .руб</td>
	</tr>
	<tr>
		<td class="main_label">Телефон:</td>
		<td class="change_input change_input_code form-control">{{{$phone}}}</td>
	</tr>
	<tr>
		<td class="main_label">E-Mail:</td>
		<td class="change_input change_input_code form-control">{{{$email}}}</td>
	</tr>
	<tr>
		<td class="main_label">Комментарий:</td>
		<td class="change_input change_input_code form-control">{{{$comment}}}</td>
	</tr>
</table>
<p>Удачного дня!</p>
