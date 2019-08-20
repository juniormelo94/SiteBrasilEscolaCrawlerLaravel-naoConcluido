@extends('modals.mensagens')

@section('templateHead')
	<!DOCTYPE html>
	<html lang="en">
		<head>
			  <meta charset="utf-8">
			  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			  <meta name="description" content="">
			  <meta name="author" content="">

			  <title>Crawler</title>

			  <!-- Font Awesome Icons -->
			  <link href="https://blackrockdigital.github.io/startbootstrap-creative/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

			  <!-- Google Fonts -->
			  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
			  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

			  <!-- Plugin CSS -->
			  <link href="https://blackrockdigital.github.io/startbootstrap-creative/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

			  <!-- Theme CSS - Includes Bootstrap -->
			  <link href="https://blackrockdigital.github.io/startbootstrap-creative/css/creative.min.css" rel="stylesheet">

			  <link href="{{ asset('css/estilo.css') }}" rel="stylesheet"> 
		</head>
@endsection

@section('templateBody')
		<body id="page-top">
		  <!-- Navigation -->
		  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
		    <div class="container">
		      <a class="navbar-brand js-scroll-trigger" href="#page-top">Crawler</a>
		      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="navbar-toggler-icon"></span>
		      </button>
		      <div class="collapse navbar-collapse" id="navbarResponsive">
		        <ul class="navbar-nav ml-auto my-2 my-lg-0">
		          <li class="nav-item">
		            <a class="nav-link js-scroll-trigger" href="{{url('/')}}">Home</a>
		          </li>
		          <li class="nav-item">
		            <a class="nav-link js-scroll-trigger" href="{{url('teste_drive')}}">Teste Drive</a>
		          </li>
		          <li class="nav-item">
		            <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
		          </li>
		          <li class="nav-item">
		            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
		          </li>
		        </ul>
		      </div>
		    </div>
		  </nav>

		  <!-- Masthead -->
		  <header class="masthead">
		    <div class="container h-100">
		      <div class="row h-100 align-items-center justify-content-center text-center">
		        <div class="col-lg-10 align-self-end">
		          <h1 class="text-uppercase text-white font-weight-bold">Curl + Laravel = Crawler</h1>
		          <hr class="divider my-4">
		        </div>
		        <div class="col-lg-8 align-self-baseline">
		        </div>
		      </div>
		    </div>
		  </header>

		  @yield('content')

		  <!-- Contact Section -->
		  <section class="page-section" id="contact">
		    <div class="container">
		      <div class="row justify-content-center">
		        <div class="col-lg-8 text-center">
		          <h2 class="mt-0">Let's Get In Touch!</h2>
		          <hr class="divider my-4">
		          <p class="text-muted mb-5">Ready to start your next project with us? Give us a call or send us an email and we will get back to you as soon as possible!</p>
		        </div>
		      </div>
		      <div class="row">
		        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
		          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
		          <div>+55 (11) 98386-6954</div>
		        </div>
		        <div class="col-lg-4 mr-auto text-center">
		          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
		          <!-- Make sure to change the email address in anchor text AND the link below! -->
		          <a class="d-block" href="mailto:juniormelo94@hotmail.com">juniormelo94@hotmail.com</a>
		        </div>
		      </div>
		    </div>
		  </section>
@endsection

@section('templateFooter')
		  <!-- Footer -->
		  <footer class="bg-light py-5">
		    <div class="container">
		      <div class="small text-center text-muted">EldemWeb &copy; 2019 - Junior Melo</div>
		    </div>
		  </footer>

		  <!-- Bootstrap core JavaScript -->
		  <script src="https://blackrockdigital.github.io/startbootstrap-creative/vendor/jquery/jquery.min.js"></script>
		  <script src="https://blackrockdigital.github.io/startbootstrap-creative/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		  <!-- Plugin JavaScript -->
		  <script src="https://blackrockdigital.github.io/startbootstrap-creative/vendor/jquery-easing/jquery.easing.min.js"></script>
		  <script src="https://blackrockdigital.github.io/startbootstrap-creative/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

		  <!-- Custom scripts for this template -->
		  <script src="https://blackrockdigital.github.io/startbootstrap-creative/js/creative.min.js"></script>

		</body>
	</html>
@endsection