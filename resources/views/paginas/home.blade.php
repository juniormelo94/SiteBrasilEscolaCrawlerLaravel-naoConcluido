@extends('template.template')

@section('title')
	Home
@endsection

@section('content')

	<!-- About Section -->
	<section class="page-section bg-dark" id="about">
	   	<div class="container">
	        <div class="row justify-content-center">
	            <div class="col-lg-8 text-center">
		            <h2 class="text-white mt-0">Veja nosso Robo versão 3 em ação!</h2>
		            <hr class="divider light my-4">
		            <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{url('teste_drive')}}">teste drive</a>
	            </div>
	        </div>
	    </div>
	</section>

@endsection