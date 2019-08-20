@extends('template.template')

@section('content')
	
	<!-- About Section -->
	<ul class="ulMenu">
		@foreach($dataThemes as $themes)
			<a href="{{$themes->link_theme}}">	
				<li class="liTemas">
				  	{{$themes->theme}}
				</li>
			</a>
		@endforeach()
	</ul>

@endsection