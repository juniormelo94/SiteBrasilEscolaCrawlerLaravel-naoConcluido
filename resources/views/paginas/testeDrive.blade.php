@extends('template.template')

@section('title')
	Teste Drive
@endsection

@section('content')

	</div>

	<!-- About Section -->
	  <section class="page-section bg-primary" id="about">
	    <div class="container">
	      <div class="row justify-content-center">
	        <div class="col-lg-8 text-center">
	          <h2 class="text-white mt-0">Como funciona o Teste Drive</h2>
	          <hr class="divider light my-4">
	          <p class="text-white-50 mb-4">Clique em buscar, para que o nosso Robô pegue as informações, depois precisaremos salvar e por fim exibir em tela!</p>
	          <a class="btn btn-dark btn-xl js-scroll-trigger" href="{{url('buscar')}}">BUSCAR</a>
	          <a class="btn btn-dark btn-xl js-scroll-trigger ml-4 mr-4" href="#services">SALVAR</a>
	          <a class="btn btn-dark btn-xl js-scroll-trigger" href="#services">EXIBIR</a>
	        </div>
	      </div>
	    </div>
	  </section>

	  {{$foi}}

	  <!-- Services Section -->
	  <section class="page-section" id="services">
	    <div class="container">
	      <h2 class="text-center mt-0">At Your Service</h2>
	      <hr class="divider my-4">
	      <div class="row">
	        <div class="col-lg-3 col-md-6 text-center">
	          <div class="mt-5">
	            <i class="fas fa-4x fa-gem text-primary mb-4"></i>
	            <h3 class="h4 mb-2">Sturdy Themes</h3>
	            <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
	          </div>
	        </div>
	        <div class="col-lg-3 col-md-6 text-center">
	          <div class="mt-5">
	            <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
	            <h3 class="h4 mb-2">Up to Date</h3>
	            <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
	          </div>
	        </div>
	        <div class="col-lg-3 col-md-6 text-center">
	          <div class="mt-5">
	            <i class="fas fa-4x fa-globe text-primary mb-4"></i>
	            <h3 class="h4 mb-2">Ready to Publish</h3>
	            <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
	          </div>
	        </div>
	        <div class="col-lg-3 col-md-6 text-center">
	          <div class="mt-5">
	            <i class="fas fa-4x fa-heart text-primary mb-4"></i>
	            <h3 class="h4 mb-2">Made with Love</h3>
	            <p class="text-muted mb-0">Is it really open source if it's not made with love?</p>
	          </div>
	        </div>
	      </div>
	    </div>
	  </section>

	  <!-- Portfolio Section -->
	  <section id="portfolio">
	    <div class="container-fluid p-0">
	      <div class="row no-gutters">
	        <div class="col-lg-4 col-sm-6">
	          <a class="portfolio-box" href="https://blackrockdigital.github.io/startbootstrap-creative/img/portfolio/fullsize/1.jpg">
	            <img class="img-fluid" src="https://blackrockdigital.github.io/startbootstrap-creative/img/portfolio/thumbnails/1.jpg" alt="">
	            <div class="portfolio-box-caption">
	              <div class="project-category text-white-50">
	                Category
	              </div>
	              <div class="project-name">
	                Project Name
	              </div>
	            </div>
	          </a>
	        </div>
	        <div class="col-lg-4 col-sm-6">
	          <a class="portfolio-box" href="https://blackrockdigital.github.io/startbootstrap-creative/img/portfolio/fullsize/2.jpg">
	            <img class="img-fluid" src="https://blackrockdigital.github.io/startbootstrap-creative/img/portfolio/thumbnails/2.jpg" alt="">
	            <div class="portfolio-box-caption">
	              <div class="project-category text-white-50">
	                Category
	              </div>
	              <div class="project-name">
	                Project Name
	              </div>
	            </div>
	          </a>
	        </div>
	        <div class="col-lg-4 col-sm-6">
	          <a class="portfolio-box" href="https://blackrockdigital.github.io/startbootstrap-creative/img/portfolio/fullsize/3.jpg">
	            <img class="img-fluid" src="https://blackrockdigital.github.io/startbootstrap-creative/img/portfolio/thumbnails/3.jpg" alt="">
	            <div class="portfolio-box-caption">
	              <div class="project-category text-white-50">
	                Category
	              </div>
	              <div class="project-name">
	                Project Name
	              </div>
	            </div>
	          </a>
	        </div>
	        <div class="col-lg-4 col-sm-6">
	          <a class="portfolio-box" href="https://blackrockdigital.github.io/startbootstrap-creative/img/portfolio/fullsize/4.jpg">
	            <img class="img-fluid" src="https://blackrockdigital.github.io/startbootstrap-creative/img/portfolio/thumbnails/4.jpg" alt="">
	            <div class="portfolio-box-caption">
	              <div class="project-category text-white-50">
	                Category
	              </div>
	              <div class="project-name">
	                Project Name
	              </div>
	            </div>
	          </a>
	        </div>
	        <div class="col-lg-4 col-sm-6">
	          <a class="portfolio-box" href="https://blackrockdigital.github.io/startbootstrap-creative/img/portfolio/fullsize/5.jpg">
	            <img class="img-fluid" src="https://blackrockdigital.github.io/startbootstrap-creative/img/portfolio/thumbnails/5.jpg" alt="">
	            <div class="portfolio-box-caption">
	              <div class="project-category text-white-50">
	                Category
	              </div>
	              <div class="project-name">
	                Project Name
	              </div>
	            </div>
	          </a>
	        </div>
	        <div class="col-lg-4 col-sm-6">
	          <a class="portfolio-box" href="https://blackrockdigital.github.io/startbootstrap-creative/img/portfolio/fullsize/6.jpg">
	            <img class="img-fluid" src="https://blackrockdigital.github.io/startbootstrap-creative/img/portfolio/thumbnails/6.jpg" alt="">
	            <div class="portfolio-box-caption p-3">
	              <div class="project-category text-white-50">
	                Category
	              </div>
	              <div class="project-name">
	                Project Name
	              </div>
	            </div>
	          </a>
	        </div>
	      </div>
	    </div>
	  </section>

	  <!-- Call to Action Section -->
	  <section class="page-section bg-dark text-white">
	    <div class="container text-center">
	      <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
	      <a class="btn btn-light btn-xl" href="https://startbootstrap.com/themes/creative/">Download Now!</a>
	    </div>
	  </section>

@endsection