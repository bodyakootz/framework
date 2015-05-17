<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=1200'>
		
		@yield('meta') {{--check it--}}
		
		<link rel="shortcut icon" href="{{ asset('img/markup/favicon.ico') }}">
		{{ HTML::style('css/bootstrap.min.css') }}
		{{ HTML::style('css/font-awesome.min.css') }}
		{{ HTML::style('css/plugins/jBox/jBox.css') }}
		{{ HTML::style('css/flash_messages.css') }}  {{--delte it--}}
		{{ HTML::style('css/style.css') }}

		<!--[if IE]>
			{{ HTML::style('css/ie.css') }}
		<![endif]--> {{--not sure--}}
		
		@yield('css')
	</head>
	<body> {{--add all parts of the page after this tag--}}
		@yield('header')
		<div class="main_content">
			@yield('left_sidebar')
			{{-- @yield('right_sidebar') --}}
			@yield('catalog')
		</div>
		@yield('footer')


		{{ HTML::script('js/jquery.min.js') }} {{--new place--}}
		{{ HTML::script('js/bootstrap.min.js') }} {{--new place--}}
		{{ HTML::script('js/jBox.min.js') }} {{--new place--}}
		{{ HTML::script('js/script.js') }}
		{{ HTML::script('js/animation.js') }}
		{{ HTML::script('js/modals.js') }}
		{{ HTML::script('js/navigation.js') }}
		{{ HTML::script('js/catalog_blocks.js') }}

		@yield('js')
	</body>
</html>