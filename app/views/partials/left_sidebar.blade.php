@section('left_sidebar')	
	<div class="left_sidebar">
		<div class="container_sidebar">
			{{-- UKOMMENT FOR SEARCH --}}
			{{-- {{ Form::open(array('url' => "/search", 'method' => 'GET', 'class'=>'form-inline left_sidebar_search')) }}
				{{ Form::text('query', null, ['placeholder'=>"Поиск по каталогу", 'class'=>'form-control left_sidebar_input', 'id' =>'search']) }} 
			{{ Form::close() }} --}}
			{{-- insert here left_sidebar markup --}}
		</div>	
	</div>
@stop	