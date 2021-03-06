<?php
    session_start();
    require("conexion.php");
?>
<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>La Terapia</title>
    <meta name="description" content="Resto">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- External CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/brands.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Josefin+Sans:300,400,700">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.min.css">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

</head>
<body data-spy="scroll" data-target="#navbar" class="static-layout">
	<div id="side-nav" class="sidenav">
	<a href="javascript:void(0)" id="side-nav-close">&times;</a>
	
	
</div>	<div id="side-search" class="sidenav">
	<a href="javascript:void(0)" id="side-search-close">&times;</a>
	<div class="sidenav-content">
		<form action="">

			<div class="input-group md-form form-sm form-2 pl-0">
			  <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
			  <div class="input-group-append">
			    <button class="input-group-text red lighten-3" id="basic-text1">
			    	<i class="fas fa-search text-grey" aria-hidden="true"></i>
			    </button>
			  </div>
			</div>

		</form>
	</div>
	
 	
</div>	<div id="canvas-overlay"></div>
	<div class="boxed-page">
		<nav id="navbar-header" class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand navbar-brand-center d-flex align-items-center p-0 only-mobile" href="/">
            <img src="img/logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-menu"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex justify-content-between">
                <li class="nav-item only-desktop">
                    <a class="nav-link" id="side-nav-open" href="#">
                        <span class="lnr lnr-menu"></span>
                    </a>
                </li>
                <div class="d-flex flex-lg-row flex-column">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">sobre nosotros</a>
                    </li>

                    
                        
                        </div>
                    </li>
                </div>
            </ul>
            
            <a class="navbar-brand navbar-brand-center d-flex align-items-center only-desktop" href="#">
                <img src="img/logo.png" alt="">
            </a>
            <ul class="navbar-nav d-flex justify-content-between">
                <div class="d-flex flex-lg-row flex-column">
                    <li class="nav-item active">
                        <a class="nav-link" href="menu.html">Colaboradores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="team.html">CEO</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="formulariodatos.php">Reservar cita</a>
                    </li>
                </div>
                <li class="nav-item">
                    <a id="side-search-open" class="nav-link" href="#">
                        <span class="lnr lnr-magnifier"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>	
	<div class="hero">
  <div class="container">
	<div class="row d-flex align-items-center">
		<div class="col-lg-6 hero-left">
            
		    <h1 class="display-4 mb-5"><br>Nosotros te escuch??mos</h1>
		    <div class="mb-2">
		    	
			    <a class="btn btn-icon btn-lg" href="" data-featherlight="iframe" data-featherlight-iframe-allowfullscreen="true">
			    
			    	
			    </a>
		    </div>
		   
		    <ul class="hero-info list-unstyled d-flex text-center mb-0">
		    	<li class="border-right">
		    		<span class="lnr lnr-rocket"></span>
		    		<h5>
		    			Nuevas Experiencias
		    		</h5>
		    	</li>
		    	<li class="border-right">
		    		<span class="lnr lnr-leaf"></span>
		    		<h5>
		    			Metodos de relajaci??n
		    		</h5>
		    	</li>
		    	<li class="">
		    		<span class="lnr lnr-bubble"></span>
		    		<h5>
		    			Atenci??n 24h
		    		</h5>
		    	</li>
		    </ul>

	    </div>
	    <div class="col-lg-6 hero-right">
	    	<div class="owl-carousel owl-theme hero-carousel">
			    <div class="item">
			    	<img class="img-fluid" src="img/hero-1.jpg" alt="">
			    </div>
			    <div class="item">
			    	<img class="img-fluid" src="img/hero-2.jpg" alt="">
			    </div>
			    <div class="item">
			    	<img class="img-fluid" src="img/hero-3.jpg" alt="">
			    </div>
			</div>
	    </div>
	</div>
  </div>
</div>		<!-- Welcome Section -->
<section id="gtco-welcome" class="bg-white section-padding">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-sm-5 img-bg d-flex shadow align-items-center justify-content-center justify-content-md-end img-2" style="background-image: url(img/victor.png);">
                    
                </div>
                <div class="col-sm-7 py-5 pl-md-0 pl-4">
                    <div class="heading-section pl-lg-5 ml-md-5">
                        <span class="subheading">
                            Sobre
                        </span>
                        <h2>
                            Victor Lop??z-Brea
                        </h2>
                    </div>
                    <div class="pl-lg-5 ml-md-5">
                        <p>Soy V??ctor L??pez-Brea Germ??n, Psic??logo profesional capacitado para ayudarte, orientarte y escucharte en aquellas inquietudes que puedas tener, estar?? a la mano contigo para que al final de los d??as seas capaz de enfrentarte al mundo
                        </p>
                        <h3 class="mt-5">Charlas implementadas</h3>
                        <div class="row">
                            <div class="col-4">
                                
                                    <img class="img-fluid img-cover" src="img/cruz_roja.jpg" />
                                    
                                    <h6>Cruz Roja Espa??ola</h6>
                                </a>
                            </div>
                            <div class="col-4">
                                
                                    <img class="img-fluid img-cover" src="img/us.jpg" />
                                    <p></p> 
                                    <p></p> 
                                    <p></p> 
                                    <p></p>
                                    <p></p>
                                    <p></p>
                                    <h6>Universidad de San Jorge</h6>
                                </a>
                            </div>
                            <div class="col-4">
                              
                                    <img class="img-fluid img-cover" src="img/uned.jpg"/>
                                    <p></p> 
                                    <p></p> 
                                    <p></p> 
                                    <p></p>
                                    <p></p>
                                    <p></p>
                                    <h6>UNED-Universidad Nacional de Educaci??n a Distancia </h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Welcome Section -->		<!-- Special Dishes Section -->
<section id="gtco-special-dishes" class="bg-grey section-padding">
    <div class="container">
        <div class="section-content">
            <div class="heading-section text-center">
                <span class="subheading">
                    Otros Colaboradores:
                </span>
                <h2>
                    Escoge el que mejor se adapte a ti:
                </h2>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center py-5">
                    <h2 class="special-number">Psic??logo en desarrollo</h2>
                    <div class="dishes-text">
                        <h3><span></span><br>Elias Herrera Nu??ez</h3>
                        <p class="pt-3">psic??logo profesional capacitado para poder llevar a las personas de mi mano en cualquier momento, tengo experiencia en sectores cl??nicos y educativos.
                            La vida es una sola, si no eres capaz de enfrentarla entonces nadie lo har?? por ti y para ello toma una botella y pa'lante</p>
                        <h3 class="special-dishes-price">???50/h</h3>
                       
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                    <img src="img/elias.png" alt="" class="img-fluid shadow w-100">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0">
                    <img src="img/guillermo.png" alt="" class="img-fluid shadow w-100">
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2 py-5">
                    <h2 class="special-number">Psic??logo organizacional y del trabajo</h2>
                    <div class="dishes-text">
                        <h3><span>Guillermo Andr??s</span><br> Herrera Padilla</h3>
                        <p class="pt-3">Mi nombre es Doctor psic??logo Guillermo pa ti menol , na broma ...
                            Mi nombre es Guillermo Andr??s herrera padilla y soy psic??logo profesional en el sector laboral, mi trabajo es darte los mejores tips y estar velar por tu salud mental y f??sica en tu desarrollo laboral</p>
                        <h3 class="special-dishes-price">???30/h</h3>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Special Dishes Section -->		<!-- Menu Section -->
<section id="gtco-menu" class="section-padding">
    <div class="container">
        <div class="section-content">
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="heading-section text-center">
                        <span class="subheading">
                            Tarifas:
                        </span>
                        <h2>
                            Escoge a tu psic??logo de preferencia:
                        </h2>
                    </div>  
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 menu-wrap">
                    <div class="heading-menu">
                        <h3 class="text-center mb-5">Nuestros principales: </h3>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/victor.png" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>V??ctor L??pez-brea Germ??n</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">???70/h</h4>
                                </div>
                            </div>
                            <p>Especialista en psicologia: forence,cl??nicos,desarrollo y sex??logo</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/elias.png" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Elias Herrera Nu??ez</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">???50/h</h4>
                                </div>
                            </div>
                            <p>Especialista en psicologia: sex??logo,deportivo,criminal??stico y forence</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/guillermo.png" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Guillermo Andr??s Herrera Padilla</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">???30/h</h4>
                                </div>
                            </div>
                            <p>Especialista en psicologia: organizacional y del trabajo , social y del desarrollo ademas de los educativos</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 menu-wrap">
                    <div class="heading-menu">
                        <h3 class="text-center mb-5">Nuestros otros Colaboradores como:</h3>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/aristoteles.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>aristoteles</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">???150/h</h4>
                                </div>
                            </div>
                            <p>Especialista en los diversos campos de la psicologia y filosofia , escritor y cientifico </p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/sigmu.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Sigmund Freud</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">???90/h</h4>
                                </div>
                            </div>
                            <p>m??dico neur??logo austriaco de origen jud??o, padre del psicoan??lisis y una de las mayores figuras intelectuales del siglo XX</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/abraham.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Abraham Maslow</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">???80/h</h4>
                                </div>
                            </div>
                            <p>psic??logo humanista , formul?? la teor??a de la pir??mide de Maslow que, llegado hasta nuestros d??as, apareci?? por primera vez en 1943 en su A Theory of Human Motivatio. En ella da respuesta a las cuestiones sobre la motivaci??n y las necesidades del ser humano</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 menu-wrap">
                    <div class="heading-menu">
                        <h3 class="text-center mb-5">Otros:</h3>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/virginia.jpeg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Virginia Satir</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">???20/h</h4>
                                </div>
                            </div>
                            <p> autora, trabajadora social y psicoterapeuta estadounidense, conocida especialmente por su enfoque de terapia familiar</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/jean2.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Jean Piaget</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">???15/h</h4>
                                </div>
                            </div>
                            <p> psic??logo, epistem??logo y bi??logo, generando nuevos conocimientos, fruto del desarrollo de estructuras y a partir del mecanismos funcionales que se mantienen a lo largo de todo el desarrollo, reconocido por sus aportes al estudio de la infancia y por su teor??a constructivista del desarrollo de la inteligencia, a partir de una propuesta evolutiva de interacci??n entre el sujeto y objeto.</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/steven.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Steven Pinker</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">???30/h</h4>
                                </div>
                            </div>
                            <p>psic??logo experimental, cient??fico cognitivo, ling??ista y escritor canadiense. Es profesor en el Harvard College y titular del ???Johnstone Family Professorship??? en el Departamento de Psicolog??a de la Universidad de Harvard.Sus especializaciones acad??micas son la percepci??n y el desarrollo del lenguaje en ni??os; es conocido por argumentar que el lenguaje es un "instinto" o una adaptaci??n biol??gica modelada por la selecci??n natural</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of menu Section -->		<!-- Testimonial Section-->
<section id="gtco-testimonial" class="overlay bg-fixed section-padding" style="background-image: url(img/laterapia.jpg);">
    <div class="container">
        <div class="section-content">
            <div class="heading-section text-center">
                <span class="subheading">
                    Opiniones
                </span>
                <h2>
                    Pacientes:
                </h2>
            </div>
            <div class="row">
                <!-- Testimonial -->
                <div class="testi-content testi-carousel owl-carousel">
                    <div class="testi-item">
                        <i class="testi-icon fa fa-3x fa-quote-left"></i>
                        <p class="testi-text">Estaba buscando ayuda profesional dado que mi estado de ansiedad y estr??s llegaron a afectarme en todos los ??mbitos de mi vida, cuando conoc?? a la empresa junto con el psic??logo que escog?? mi vida cambio.
                            Ahora gestiono mejor los problemas, tengo mejor aspecto y tengo nuevas metas y prop??sitos que me he propuesto para mejorar</p>
                        <p class="testi-author">Rub??n Ledesma</p>
                        <p class="testi-desc">Paciente de : <span>Elias Herrera Nu??ez</span></p>
                    </div>
                    <div class="testi-item">
                        <i class="testi-icon fa fa-3x fa-quote-left"></i>
                        <p class="testi-text">Estaba pasando por un mal momento en mi vida, emocional, personal y laboralmente, cuando conoc?? a mi psic??logo mi vida dio un giro radical. Lo que una vez en mi vida no ten??a sentido ni motivaci??n paso a ser nuevas experiencias y ganas de seguir.</p>
                        <p class="testi-author">Jesus Ayala</p>
                        <p class="testi-desc">Paciente de:<span>Guillermo Andr??s Herrera Padilla</span></p>
                    </div>
                </div>
                <!-- End of Testimonial -->
            </div>
        </div>
    </div>
</section>
<!-- End of Testimonial Section-->		<!-- Team Section -->
<section id="gtco-team" class="bg-white section-padding">
    <div class="container">
        <div class="section-content">
            <div class="heading-section text-center">
                <span class="subheading">
                    Integrantes de la empresa:
                </span>
                <h2>
                    Ceo
                </h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="team-card mb-5">
                        <img class="img-fluid" src="img/santiago.png" alt="">
                        <div class="team-desc">
                            <h4 class="mb-0">Santiago Peralta</h4>
                            <p class="mb-1">CEO</p>
                            <ul class="list-inline mb-0 team-social-links">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card mb-5">
                        <img class="img-fluid" src="img/evelyn.png" alt="">
                        <div class="team-desc">
                            <h4 class="mb-0">Evelyn Naileth Gomez Mu??oz</h4>
                            <p class="mb-1">CEO</p>
                            <ul class="list-inline mb-0 team-social-links">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card mb-5">
                        <img class="img-fluid" src="img/stefan.png" alt="">
                        <div class="team-desc">
                            <h4 class="mb-0">Stefan Vlad</h4>
                            <p class="mb-1">CEO</p>
                            <ul class="list-inline mb-0 team-social-links">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
                    <div>
                        <p><h2>PULSA AQUI PARA UNA CITA</h2> <a href='formulariodatos.php'>PULSA AQUI</a></p>
                    </div>
</section>               
<!-- End of Team Section -->		<!-- Reservation Section -->
<section id="gtco-reservation" class="bg-fixed bg-white section-padding overlay" style="background-image: url(img/laterapia2.jpg);">
</footer>	</div>
</div>
	<!-- External JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
	<script src="vendor/bootstrap/popper.min.js"></script>
	<script src="vendor/bootstrap/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js "></script>
	<script src="vendor/owlcarousel/owl.carousel.min.js"></script>
	<script src="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js"></script>
	<script src="vendor/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>

	<!-- Main JS -->
	<script src="js/app.min.js "></script>
</body>
</html>
