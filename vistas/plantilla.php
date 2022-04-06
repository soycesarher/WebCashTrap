<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>CashTrap</title>

	<base href="vistas/">

	<!--<link rel="icon" href="img/icono.png">-->

	<!--=====================================
	VÍNCULOS CSS
	======================================-->

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<!-- Fuente Open Sans -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Roboto:100|Grand+Hotel" rel="stylesheet">

	<!-- Hoja Estilo Personalizada -->
	<link rel="stylesheet" href="css/style.css">

	<!--=====================================
	VÍNCULOS JAVASCRIPT
	======================================-->

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

	<!-- https://easings.net/es# -->
	<script src="js/plugins/jquery.easing.js"></script>

	<!-- https://markgoodyear.com/labs/scrollup/ -->
	<script src="js/plugins/scrollUP.js"></script>

	<!-- https://www.jqueryscript.net/loading/Handle-Loading-Progress-jQuery-Nite-Preloader.html -->
	<script src="js/plugins/jquery.nite.preloader.js"></script>

</head>

<body>


<!--=====================================
PRELOAD
======================================-->
<div id="preload">
	
	<div id="porcentajeCarga">0%</div>
	
	<div id="lineaCarga" class="progress">
  		<div id="rellenoCarga" class="progress-bar"></div>
	</div>
	
</div>


<!--=====================================
HEADER
======================================-->

<header>

	<div class="container-fluid">
		
		<div class="container p-0">

			<div class="row">

				<!-- LOGO -->
			
				<div class="col-7 col-sm-5 col-md-4 col-lg-2 col-xl-3 my-3 d-flex mt-lg-3 logotipo">

					<i class="fas fa-bars d-block d-lg-none text-white pt-2 pr-2"></i>
					
					<a href="index.html">
						<!--<img data-nite-src="img/logo.png" class="img-fluid pt-1">-->
					</a>

				</div>

				<!-- BARRA DE MENU -->

				<div class="d-none d-lg-block col-lg-8 col-xl-6 p-0 pt-lg-2 mt-lg-1 pt-xl-4 botonera">
					
					<ul class="nav justify-content-lg-left justify-content-xl-end">
						
						<li class="nav-item">
							<a class="nav-link text-white" href="#cursos">Beneficios</a>
						</li>

						<li class="nav-item">
							<a class="nav-link text-white" href="#nosotros">Objetivos</a>
						</li>

						<li class="nav-item">
							<a class="nav-link text-white" href="#testimonios">Testimonios</a>
						</li>

						<li class="nav-item">
							<a class="nav-link text-white" href="#planes">Planes</a>
						</li>

						<li class="nav-item">
							<a class="nav-link text-white" href="#faq">Preguntas</a>
						</li>

						<!--<li class="nav-item">
							<a class="nav-link text-white" href="#">Blog</a>
						</li>-->

						<li class="nav-item">
							<a class="nav-link text-white" href="#contactenos">Contacto</a>
						</li>

					</ul>

				</div>	

				<!-- IDIOMA E INGRESO -->

				 <div class="col-5 col-sm-7 col-md-8 col-lg-2 col-xl-3 p-0 pt-4 pt-lg-2 mt-lg-1 pt-xl-4"> 

					<!-- IDIOMA -->
					
					<div class="ml-xl-4 float-left mt-lg-1 d-none d-lg-block">

						<div class="dropdown">

							<!--<button type="button" class="btn btn-light btn-sm dropdown-toggle" data-toggle="dropdown">
							ES
							</button>-->

							<div class="dropdown-menu">

								<a class="dropdown-item" href="#">EN</a>

							</div>

						</div>

					</div> 

					<!-- INGRESO -->

					<div class="mr-2 mr-lg-0 float-right pt-1 ingresos">
						
						<button class="btn btn-info btn-sm d-flex">
							
							<a href="ingreso.html" class="text-white">Ingresar</a>

							<span class="text-white mx-2">|</span>

							<a href="registro.html" class="text-white">Crear Cuenta</a>

						</button>

					</div>

				</div>	

			</div>

		</div>

	</div>

</header>

<!--=====================================
MENÚ MÓVIL
======================================-->

<div class="menuMovil">
	
	<ul class="p-0 m-0 py-4 d-flex justify-content-center">	
		
		<li>
			<i class="fas fa-times lead text-white mr-5"></i>
		</li>

		<li>
			<a href="#" target="_blank"><i class="fab fa-facebook-f lead text-white ml-5 mx-2"></i></a>
		</li>

		<li>
			<a href="#" target="_blank"><i class="fab fa-instagram lead text-white mx-2"></i></a>
		</li>	
		
		<li>
			<a href="#" target="_blank"><i class="fab fa-linkedin lead text-white mx-2"></i></a>
		</li>

		<li>
			<a href="#" target="_blank"><i class="fab fa-twitter lead text-white mx-2"></i></a>
		</li>

		<li>
			<a href="#" target="_blank"><i class="fab fa-youtube lead text-white mx-2"></i></a>
		</li>

	</ul>

	<div class="text-center">

		<div class="dropdown">

			<button type="button" class="btn btn-light btn-sm dropdown-toggle" data-toggle="dropdown">
			ES
			</button>

			<div class="dropdown-menu">

				<a class="dropdown-item " href="#">EN</a>

			</div>

		</div>

	</div>

	<ul class="nav flex-column text-center mt-3">
						
		<li class="nav-item py-3">
			<a class="nav-link text-white" href="#cursos">Cursos</a>
		</li>

		<li class="nav-item py-3">
			<a class="nav-link text-white" href="#nosotros">Nosotros</a>
		</li>

		<li class="nav-item py-3">
			<a class="nav-link text-white" href="#testimonios">Testimonios</a>
		</li>

		<li class="nav-item py-3">
			<a class="nav-link text-white" href="#planes">Planes</a>
		</li>

		<li class="nav-item py-3">
			<a class="nav-link text-white" href="#faq">FAQ</a>
		</li>

		<li class="nav-item py-3">
			<a class="nav-link text-white" href="#">Blog</a>
		</li>

		<li class="nav-item py-3">
			<a class="nav-link text-white" href="#contactenos">Contáctenos</a>
		</li>

	</ul>

</div>

<!--=====================================
DISEÑO HERO - CINEMAGRAPH
======================================-->

<div class="container-fluid vistaVideo p-0">
	
	<video class="d-none d-lg-block" id="videoPresentacion" muted="muted" autoplay loop preload="auto" width="100%">
		
		<source data-nite-src="videos/video02.mp4" type="video/mp4">

	</video>	
	
	<div class="filtroVideo"></div>

	<div class="container">

		<h2 style="font-weight: bold; font-size: 50px;" class="text-center text-white pb-1">CashTrap</h2> <!-- pb-lg-4 -->
		
		<div class="row">
			
			<div class="col-12 col-lg-4 p-3 p-sm-4">

				<div class="bg-white text-center py-5 px-4">
					
					<h4>Ayudamos</h4>

					<p>Date la confianza para perseguir el estilo de vida que deseas</p>

					<i class="fas fa-heart rounded rounded-circle text-white" style="background:#C1AA92"></i>

				</div>			

			</div>

			<div class="col-12 col-lg-4 p-3 p-sm-4">

				<div class="bg-white text-center py-5 px-4">
					
					<h4>Educamos</h4>

					<p>Información correcta y segura para tu aprendizaje</p>

					<i class="fas fa-puzzle-piece rounded rounded-circle text-white" style="background:#A17A8C"></i>

				</div>			

			</div>

			<div class="col-12 col-lg-4 p-3 p-sm-4">

				<div class="bg-white text-center py-5 px-4">
					
					<h4>Enriquecemos</h4>

					<p>Explora diferentes formas de generar y diversificar tu vida financiera</p>

					<i class="fas fa-wind rounded rounded-circle text-white" style="background:#A1B287"></i>

				</div>			

			</div>

		</div>
		
		<div class="mx-auto text-center py-3 py-lg-5">
			
			<a href="registro.html"><button class="btn btn-info btn-lg mb-5">Crear cuenta gratis</button></a>

		</div>	
		
	</div>	

</div>

<!--=====================================
BENEFICIOS
======================================-->

<div class="container-fluid cursos" id="cursos">
	
	<div class="container my-3">
		
		<!-- VIDEO 1  -->

		<div class="row video1">
			
			<div class="col-12 col-lg-5 mt-lg-5 p-1 p-lg-5 bg-white">
				
				<h3 class="text-center text-lg-left">Beneficio 1</h3>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque perferendis ad ab dignissimos iste autem consequatur beatae ducimus, ullam eligendi officia alias nesciunt laudantium consequuntur recusandae quisquam saepe, modi accusantium!</p>

				<a href="registro.html"><button class="btn btn-info btn-lg mt-1 mt-lg-3 d-none d-lg-block">Crear cuenta gratis</button></a>

			</div>

			<div class="col-12 col-lg-7 p-2 p-lg-5 bg-white">
				
				<video width="100%" poster="img/video01.jpg">
					
					<source data-nite-src="videos/video01.mp4" type="video/mp4">

				</video>

			</div>

		</div>

		<!-- VIDEO 2 -->

		<div class="row video2">
						
			<div class="d-none d-lg-block col-12 col-lg-7 p-2 p-lg-5 bg-white">
				
				<video width="100%" poster="img/video02.jpg">
					
					<source data-nite-src="videos/video02.mp4" type="video/mp4">

				</video>

			</div>

			<div class="col-12 col-lg-5 mt-lg-5 p-1 p-lg-5 bg-white">
				
				<h3 class="text-center text-lg-right">Beneficio 2</h3>

				<p class="text-left text-lg-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque perferendis ad ab dignissimos iste autem consequatur beatae ducimus, ullam eligendi officia alias nesciunt laudantium consequuntur recusandae quisquam saepe, modi accusantium!</p>

				<a href="registro.html"><button class="float-right btn btn-info btn-lg mt-1 mt-lg-3 text-right d-none d-lg-block">Crear cuenta gratis</button></a>

			</div>

			<div class="d-block d-lg-none col-12 col-lg-7 p-2 p-lg-5 bg-white">
				
				<video width="100%" poster="img/video02.jpg">
					
					<source data-nite-src="videos/video02.mp4" type="video/mp4">

				</video>

			</div>

		</div>

		<!-- VIDEO 3 -->

		<div class="row video3">
			
			<div class="col-12 col-lg-5 mt-lg-5 p-1 p-lg-5 bg-white">
				
				<h3 class="text-center text-lg-left">Beneficio 3</h3>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque perferendis ad ab dignissimos iste autem consequatur beatae ducimus, ullam eligendi officia alias nesciunt laudantium consequuntur recusandae quisquam saepe, modi accusantium!</p>

				<a href="registro.html"><button class="btn btn-info btn-lg mt-1 mt-lg-3 d-none d-lg-block">Crear cuenta gratis</button></a>

			</div>

			<div class="col-12 col-lg-7 p-2 p-lg-5 bg-white">
				
				<video width="100%" poster="img/video03.jpg">
					
					<source data-nite-src="videos/video03.mp4" type="video/mp4">

				</video>

			</div>

			<div class="d-block d-lg-none mx-auto text-center pt-3">
			
				<a href="registro.html"><button class="btn btn-info btn-lg mb-5">Crear cuenta gratis</button></a>

			</div>	

		</div>

	</div>

</div>

<!--=====================================
OBJETIVOS
======================================-->

<div class="container-fluid nosotros py-2 py-lg-5" id="nosotros">
	
	<div class="container py-5">
		
		<div class="row">

			<div class="col-12 col-md-6 col-lg-3 text-center">
				
				<i class="fas fa-users rounded-circle text-white"></i>

				<p class="py-3">Objetivo 1</p>

			</div>

			<div class="col-12 col-md-6 col-lg-3 text-center">
				
				<i class="fas fa-graduation-cap rounded-circle text-white"></i>

				<p class="py-3">Objetivo 2 </p>

			</div>

			<div class="col-12 col-md-6 col-lg-3 text-center">

				<i class="fas fa-laptop rounded-circle text-white"></i>

				<p class="py-3">Objetivo 3 </p>

			</div>

			<div class="col-12 col-md-6 col-lg-3 text-center">

				<i class="fas fa-check rounded-circle text-white"></i>

				<p class="py-3">Objetivo 4 </p>

			</div>
			
		</div>

	</div>

</div>

<!--=====================================
TESTIMONIOS
======================================-->

<div class="container-fluid testimonios py-2 py-lg-3" id="testimonios">
	
	<div class="container py-5">
		
		<div class="row">

			<div class="col-12 col-lg-4 pb-3">
				
				<figure class="text-center">
					<img data-nite-src="img/testimonio01.jpg" alt="Lorem ipsum dolor sit amet" class="img-fluid">
				</figure>

				<h4 class="pt-4"><strong>Testimonio 1</strong></h4>

				<p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipi sicing elit. Itaque perferendis ad ab dignissimos iste autem consequatur beatae ducimus.</p>

			</div>

			<div class="col-12 col-lg-4 pb-3">
				
				<figure class="text-center">
					<img data-nite-src="img/testimonio02.jpg" alt="Lorem ipsum dolor sit amet" class="img-fluid">
				</figure>

				<h4 class="pt-4"><strong>Testimonio 2</strong></h4>

				<p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipi sicing elit. Itaque perferendis ad ab dignissimos iste autem consequatur beatae ducimus.</p>

			</div>

			<div class="col-12 col-lg-4 pb-3">
				
				<figure class="text-center">
					<img data-nite-src="img/testimonio03.jpg" alt="Lorem ipsum dolor sit amet" class="img-fluid">
				</figure>

				<h4 class="pt-4"><strong>Testimonio 3</strong></h4>

				<p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipi sicing elit. Itaque perferendis ad ab dignissimos iste autem consequatur beatae ducimus.</p>

			</div>

		</div>

	</div>

</div>

<!--=====================================
PLANES
======================================-->

<div class="container-fluid planes py-5" id="planes">

	<div class="container">

		<p class="text-center text-white lead mx-auto w-50 justify-content-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam deleniti nisi, praesentium, quibusdam porro ab eius voluptatem necessitatibus enim</p>
	
		 <div class="d-flex flex-column flex-md-row justify-content-center">
	    	
	    	<div class="p-2 bg-white pt-5 pb-4 px-5 border text-center">
	    		
	    		<h4 class="py-3">Prueba</h4>

				<h1>
					<span class="small">
						<strong>$</strong>
					</span> 
					0
					<span class="small decimal" style="">.00</span>
				</h1>

				<ul class="py-3 px-0">
					<li>10 Clases</li>
					<li>5 Descargas</li>
					<li>24/7 soporte</li>

					<a href="registro.html"><button class="btn btn-info btn-sm px-5 mt-5">Elegir</button></a>
				</ul>

	    	</div>

	    	<div class="p-2 bg-white pt-5 pb-4 px-5 border text-center ">
	    		
				<h4 class="py-3">Premium</h4>

				<h1>
					<span class="small">
						<strong>$</strong>
					</span> 
					10
					<span class="small decimal" style="">.00</span>
				</h1>

				<ul class="py-3 px-0">
					<li>Clases ilimitadas</li>
					<li>5 Descargas</li>
					<li>24/7 soporte</li>

					<a href="registro.html"><button class="btn btn-info btn-sm px-5 mt-5">Elegir</button></a>
				</ul>

	    	</div>
	  
	  </div>

	</div>

</div>

<!--=====================================
FAQ
======================================-->

<div class="container-fluid faq py-5" id="faq">
	
	<div class="container">
		
		<div class="row">
			
			<div class="col-12 col-lg-5 p-4">
				
				<ul class="nav flex-column">

					<li class="border pt-3 text-white text-center tituloFaq">

						<!--<img data-nite-src="img/triangulo.jpg">-->
						<p class="lead">Preguntas frecuentes</p>
					</li>

					<li class="nav-item border p-2 bg-light" respuesta="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, ex, quidem distinctio tempore quos, molestias unde error facilis soluta reprehenderit alias id temporibus eum ipsum numquam non ipsa libero possimus!<br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique provident omnis optio nisi officiis, consequuntur illum. Blanditiis doloremque facilis sunt repellendus eveniet reiciendis voluptatem, autem dolorum nesciunt praesentium, nobis consequuntur.">
						<a class="nav-link text-muted">¿Pregunta 1? <i class="fas fa-chevron-left float-right pt-1"></i></a>
					</li>

					<li class="nav-item border p-2" respuesta="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, ex, quidem distinctio tempore quos, molestias unde error facilis soluta reprehenderit alias id temporibus eum ipsum numquam non ipsa libero possimus!<br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo dicta blanditiis dolor doloremque, minima fugiat incidunt quia molestias numquam impedit est magni, tempora aliquam, debitis praesentium necessitatibus perspiciatis reprehenderit delectus.">
						<a class="nav-link text-muted" >¿Pregunta 2? <i class="fas fa-chevron-right float-right pt-1"></i></a>

					</li>

					<li class="nav-item border p-2" respuesta="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae neque fugit necessitatibus dolore ad eaque facere, voluptate quo totam alias, nobis nisi voluptas sequi, earum temporibus id exercitationem. Natus, quibusdam.<br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel corrupti incidunt iusto reiciendis officia excepturi veritatis ratione commodi! Libero illum veniam, sapiente eum cum debitis nemo obcaecati voluptatum perspiciatis ducimus.">
						<a class="nav-link text-muted">¿Pregunta 3? <i class="fas fa-chevron-right float-right pt-1"></i></a>
					</li>

					<li class="nav-item border p-2"  respuesta="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil officia, voluptate alias, accusantium assumenda vitae similique odio, veniam nisi rerum incidunt doloribus aliquam explicabo. Quod vero iusto distinctio impedit magnam.<br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit cumque, nam. Nihil repellat, officiis. Eius laborum ad cumque libero ratione neque numquam veritatis, quam recusandae voluptate possimus magni ipsum harum.">
						<a class="nav-link text-muted">¿Pregunta 4? <i class="fas fa-chevron-right float-right pt-1"></i></a>
					</li>

					<li class="nav-item border p-2" respuesta="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor eveniet sunt culpa architecto error, doloremque, aliquam repudiandae sapiente asperiores. Distinctio dicta labore asperiores repellat impedit corporis eos, dolorem iste tempora.<br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat reiciendis dolorum aperiam culpa nobis quaerat vel, nam aliquam praesentium accusantium, a eos corporis obcaecati asperiores beatae suscipit. Sit, odit, fugiat?">
						<a class="nav-link text-muted" >¿Pregunta 5? <i class="fas fa-chevron-right float-right pt-1"></i></a>
					</li>

					<li class="nav-item border p-2" respuesta="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio minima asperiores qui aut, tempora velit sunt dolorem, optio illum porro, sequi sapiente laborum nam eligendi labore quos accusamus illo harum.<br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est tempore et doloribus iusto eaque ducimus sit, blanditiis eveniet molestiae cupiditate dolor tempora nulla quis aperiam fuga provident fugit porro unde!">
						<a class="nav-link text-muted">¿Pregunta 6? <i class="fas fa-chevron-right float-right pt-1"></i></a>
					</li>

				</ul>

			</div>

			<div class="col-12 col-lg-7 p-5 respuestas">
				
				<p class="pt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, ex, quidem distinctio tempore quos, molestias unde error facilis soluta reprehenderit alias id temporibus eum ipsum numquam non ipsa libero possimus!<br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique provident omnis optio nisi officiis, consequuntur illum. Blanditiis doloremque facilis sunt repellendus eveniet reiciendis voluptatem, autem dolorum nesciunt praesentium, nobis consequuntur.</p>

			</div>

		</div>

		<!--=====================================
		FAQ MÓVIL
		======================================-->

		<div id="accordion" class="d-block d-lg-none">

			<div class="border pt-3 text-white text-center tituloFaq">

				<img data-nite-src="img/triangulo.jpg">
				<p class="lead">FAQ</p>
			</div>

		  <div class="card">
		    <div class="card-header">
		      <a class="card-link" data-toggle="collapse" href="#collapseOne">
		        ¿Lorem ipsum dolor sit amet? 
		      </a>
		    </div>
		    <div id="collapseOne" class="collapse show" data-parent="#accordion">
		      <div class="card-body">
		        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor eveniet sunt culpa architecto error, doloremque, aliquam repudiandae sapiente asperiores. Distinctio dicta labore asperiores repellat impedit corporis eos, dolorem iste tempora.<br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat reiciendis dolorum aperiam culpa nobis quaerat vel, nam aliquam praesentium accusantium, a eos corporis obcaecati asperiores beatae suscipit. Sit, odit, fugiat?
		      </div>
		    </div>
		  </div>

		  <div class="card">
		    <div class="card-header">
		      <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
		       ¿Lorem ipsum dolor sit amet? 
		      </a>
		    </div>
		    <div id="collapseTwo" class="collapse" data-parent="#accordion">
		      <div class="card-body">
		        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor eveniet sunt culpa architecto error, doloremque, aliquam repudiandae sapiente asperiores. Distinctio dicta labore asperiores repellat impedit corporis eos, dolorem iste tempora.<br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat reiciendis dolorum aperiam culpa nobis quaerat vel, nam aliquam praesentium accusantium, a eos corporis obcaecati asperiores beatae suscipit. Sit, odit, fugiat?
		      </div>
		    </div>
		  </div>

		  <div class="card">
		    <div class="card-header">
		      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
		        ¿Lorem ipsum dolor sit amet? 
		      </a>
		    </div>
		    <div id="collapseThree" class="collapse" data-parent="#accordion">
		      <div class="card-body">
		       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor eveniet sunt culpa architecto error, doloremque, aliquam repudiandae sapiente asperiores. Distinctio dicta labore asperiores repellat impedit corporis eos, dolorem iste tempora.<br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat reiciendis dolorum aperiam culpa nobis quaerat vel, nam aliquam praesentium accusantium, a eos corporis obcaecati asperiores beatae suscipit. Sit, odit, fugiat?
		      </div>

		    </div>

		  </div>

		</div>

	</div>

</div>

<!--=====================================
FOOTER
======================================-->

<footer class="container-fluid bg-dark contactenos" id="contactenos">
	
	<div class="container">
		
		<div class="d-flex flex-column-reverse flex-lg-row">			

			<div class="pt-3 pt-lg-5 pr-lg-5 flex-fill">

				<p class="lead text-white text-center text-lg-left">CONTÁCTENOS</p>
				
				<form>

					<div class="form-group">
					
						<input type="text" class="form-control form-control-lg" placeholder="Nombre">

					</div>

					<div class="form-group">
						
						<input type="text" class="form-control form-control-lg" placeholder="Correo electrónico">
					</div>

					<div class="form-group">
						
						<textarea class="form-control form-control-lg" rows="3" placeholder="Escribe aquí tu mensaje"></textarea>

					</div>

					<button type="submit" class="btn btn-info btn-block btn-lg">Enviar</button>

				</form>

				<ul class="p-0 m-0 py-4 d-flex justify-content-center">

					<li>
						<a href="#" target="_blank"><i class="fab fa-facebook-f lead text-white mx-4"></i></a>
					</li>

					<li>
						<a href="#" target="_blank"><i class="fab fa-instagram lead text-white mx-4"></i></a>
					</li>	

					
					<li>
						<a href="#" target="_blank"><i class="fab fa-linkedin lead text-white mx-4"></i></a>
					</li>

					<li>
						<a href="#" target="_blank"><i class="fab fa-twitter lead text-white mx-4"></i></a>
					</li>

					<li>
						<a href="#" target="_blank"><i class="fab fa-youtube lead text-white mx-4"></i></a>
					</li>
	
				</ul>

			</div>

			<!--<div class="pt-lg-5 px-lg-5">

				<div class="p-5 visitanos">
				
					<h1 class="mt-5">Visítanos</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

					<p>
					Apple inc.<br>
					Infinte Loop.<br>
					Cupertino, CA 95014<br>
					408-996-1010
					</p>
			
					<p class="pb-lg-5">Email: info@apple.com<br>
					Tel: 1-800-676-2775</p>

				</div>

			</div> -->

		</div>

	</div>

</footer>



<script src="js/script.js"></script>

</body>

</html>
