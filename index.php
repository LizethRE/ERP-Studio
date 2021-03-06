 <!-- FlatFy Theme - Andrea Galanti /-->
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<?php require_once('Studio_modals/modal_login.php'); ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Flatfy Free Flat and Responsive HTML5 Template ">
    <meta name="author" content="">

    <title>Studio Princess</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Custom Google Web Font -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
	
    <!-- Custom CSS-->
    <link href="css/general.css" rel="stylesheet">
	
	 <!-- Owl-Carousel -->
    <link href="css/custom.css" rel="stylesheet">
	<link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	
	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="css/magnific-popup.css"> 
	
	<script src="js/modernizr-2.8.3.min.js"></script>  <!-- Modernizr /-->
	<!--[if IE 9]>
		<script src="js/PIE_IE9.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="js/PIE_IE678.js"></script>
	<![endif]-->

	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]-->

</head>

<body id="home">

	<!-- Preloader -->
	<div id="preloader">
		<div id="status"></div>
	</div>
	
	<!-- FullScreen -->
    <div class="intro-header">
		<div class="col-xs-12 text-center abcen1">
			<h1 class="h1_home wow fadeIn" data-wow-delay="0.4s">Studio Princes</h1>
			<h3 class="h3_home wow fadeIn" data-wow-delay="0.6s">Moda & Confort</h3>
			<ul class="list-inline intro-social-buttons">
				<li><a href="" class="btn  btn-lg mybutton_cyano wow fadeIn" data-wow-delay="0.8s"  data-toggle="modal" data-target="#modal_login"><span class="network-name">Iniciar Sesion</span></a>
				</li><br><br>
				<li id="download" ><a href="#downloadlink" class="btn  btn-lg mybutton_standard wow swing wow fadeIn" data-toggle="modal" data-target="#recuperarContraseña" data-wow-delay="1.2s"><span class="network-name">Olvide la contraseña</span></a>
				</li>
			</ul>
		</div>    
        <!-- /.container -->
		<div class="col-xs-12 text-center abcen wow fadeIn">
			<div class="button_down "> 
				<a class="imgcircle wow bounceInUp" data-wow-duration="1.5s"  href="#whatis"> <img class="img_scroll" src="img/icon/circle.png" alt=""> </a>
			</div>
		</div>
    </div> 
	
	<!-- NavBar-->
	<nav class="navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#home">S. Princes</a>
			</div>

			<div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					
					<li class="menuItem"><a href="#whatis">De que trata?</a></li>
					<!-- <li class="menuItem"><a href="#useit">Use It</a></li> -->
					<li class="menuItem"><a href="#screen">Imagenes</a></li>
					<li class="menuItem"><a href="#credits">Grupo</a></li>
					<li class="menuItem"><a href="#contact">Contacto</a></li>
				</ul>
			</div>
		</div>
	</nav> 


	
	<!-- What is -->
	<div id="whatis" class="content-section-b" style="border-top: 0">
		<div class="container">

			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>De que trata?</h2>
				<p class="lead" style="margin-top:0">Studio Princes Boutique</p>
				
			</div>
			
			<div class="row">
			
				<div class="col-sm-4 wow fadeInDown text-center">
				  <img class="rotate" src="img/icon/tweet.svg" alt="Generic placeholder image">
				  <h3>Sigueme</h3>
				  <p class="lead">Sigueme en mis redes sociales donde publicamos contenido acerca de nuestros productos. </p>

				  <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
				<div class="col-sm-4 wow fadeInDown text-center">
				  <img  class="rotate" src="img/icon/picture.svg" alt="Generic placeholder image">
				   <h3>Galeria</h3>
				   <p class="lead">Dentro de nuestra boutique encontraras todo tipo de prendas </p>
				   <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
				<div class="col-sm-4 wow fadeInDown text-center">
				  <img  class="rotate" src="img/icon/retina.svg" alt="Generic placeholder image">
				   <h3>Ventas</h3>
					<p class="lead">Contamos con todo tipo de ventas en nuestras sucursales donde podras elegir como llevar tus productos. </p>
				  <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
			</div><!-- /.row -->
				
			<div class="row tworow">
			
				<div class="col-sm-4  wow fadeInDown text-center" style="">
				  <img class="rotate" src="img/icon/polaroid.svg" alt="Generic placeholder image">
				  <h3>Estilos</h3>
				  <p class="lead">Los mejores estilos que podras encontrar en una varacion de prendas de vestir! </p>
				 <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
				<div class="col-sm-4 wow fadeInDown text-center">
				  <img  class="rotate" src="img/icon/map.svg" alt="Generic placeholder image">
				   <h3>Encuentranos</h3>
				   <p class="lead">Encuentranos con la ubicacion de Google maps, en la seccion de contactos nos encontraras!</p>
				   <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
				<div class="col-sm-4 wow fadeInDown text-center" style="">
				  <img  class="rotate" src="img/icon/browser.svg" alt="Generic placeholder image">
				   <h3>WWW</h3>
				 <p class="lead">En nuestra App web encontraras lo que buscas a muy buenos precios y muchas maneras de obtenerlos</p>
				  <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
			</div><!-- /.row -->
		</div>
	</div>
	
	<!-- Use it -->
    <div id ="useit" class="content-section-a" style="display:none;">

        <div class="container">
			
            <div class="row">
			
				<div class="col-sm-6 pull-right wow fadeInRightBig">
                    <img class="img-responsive " src="img/ipad.png" alt="">
                </div>
				
                <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
                    <h3 class="section-heading">Full Responsive</h3>
					<div class="sub-title lead3">Lorem ipsum dolor sit atmet sit dolor greand fdanrh<br> sdfs sit atmet sit dolor greand fdanrh sdfs</div>
                    <p class="lead">
						In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. 
						Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, 
						uam non erat mirum sapientiae lorem cupido
						patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.
					</p>

					 <p><a class="btn btn-embossed btn-primary" href="#" role="button">View Details</a> 
					 <a class="btn btn-embossed btn-info" href="#" role="button">Visit Website</a></p>
				</div>   
            </div>
        </div>
        <!-- /.container -->
    </div>

    <div class="content-section-b" style="display:none;"> 
		
		<div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInLeftBig">
                     <div id="owl-demo-1" class="owl-carousel">
						<a href="img/iphone.png" class="image-link">
							<div class="item">
								<img  class="img-responsive img-rounded" src="img/iphone.png" alt="">
							</div>
						</a>
						<a href="img/iphone.png" class="image-link">
							<div class="item">
								<img  class="img-responsive img-rounded" src="img/iphone.png" alt="">
							</div>
						</a>
						<a href="img/iphone.png" class="image-link">
							<div class="item">
								<img  class="img-responsive img-rounded" src="img/iphone.png" alt="">
							</div>
						</a>
					</div>       
                </div>
				
                <div class="col-sm-6 wow fadeInRightBig"  data-animation-delay="200">   
                    <h3 class="section-heading">Drag Gallery</h3>
					<div class="sub-title lead3">Lorem ipsum dolor sit atmet sit dolor greand fdanrh<br> sdfs sit atmet sit dolor greand fdanrh sdfs</div>
                    <p class="lead">
						In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. 
						Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, 
						uam non erat mirum sapientiae lorem cupido
						patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.
					</p>

					 <p><a class="btn btn-embossed btn-primary" href="#" role="button">View Details</a> 
					 <a class="btn btn-embossed btn-info" href="#" role="button">Visit Website</a></p>
				</div>  			
			</div>
        </div>
    </div>

    <div class="content-section-a" style="display:none;">

        <div class="container">

             <div class="row">
			 
				<div class="col-sm-6 pull-right wow fadeInRightBig">
                    <img class="img-responsive " src="img/doge.png" alt="">
                </div>
			 
                <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
                    <h3 class="section-heading">Font Awesome & Glyphicon</h3>
                    <p class="lead">A special thanks to Death to the Stock Photo for 
					providing the photographs that you see in this template. 
					</p>
					
					<ul class="descp lead2">
						<li><i class="glyphicon glyphicon-signal"></i> Reliable and Secure Platform</li>
						<li><i class="glyphicon glyphicon-refresh"></i> Everything is perfectly orgainized for future</li>
						<li><i class="glyphicon glyphicon-headphones"></i> Attach large file easily</li>
					</ul>
				</div>           
            </div>
        </div>

    </div>

	<!-- Screenshot -->
	<div id="screen" class="content-section-b">
        <div class="container">
          <div class="row" >
			 <div class="col-md-6 col-md-offset-3 text-center wrap_title ">
				<h2> Imagenes </h2>
				<p class="lead" style="margin-top:0">Boutique.</p>
			 </div>
		  </div>
		    <div class="row wow bounceInUp" >
              <div id="owl-demo" class="owl-carousel">
				
				<a href="img/slide/m1.jpg" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="img/slide/m1.jpg" alt="Owl Image">
					</div>
				</a>
				
               <a href="img/slide/m2.jpg" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="img/slide/m2.jpg" alt="Owl Image">
					</div>
				</a>
				
				<a href="img/slide/m3.jpg" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="img/slide/m3.jpg" alt="Owl Image">
					</div>
				</a>
				
				<a href="img/slide/m1.jpg" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="img/slide/m1.jpg" alt="Owl Image">
					</div>
				</a>
				
               <a href="img/slide/m2.jpg" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="img/slide/m2.jpg" alt="Owl Image">
					</div>
				</a>
				
				<a href="img/slide/m3.jpg" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="img/slide/m3.jpg" alt="Owl Image">
					</div>
				</a>
              </div>       
          </div>
        </div>


	</div>
	
	<div  class="content-section-c " style="display:none;">
		<div class="container">
			<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center white">
				<h2>Get Live Updates</h2>
				<p class="lead" style="margin-top:0">A special thanks to Death.</p>
			 </div>
			<div class="col-md-6 col-md-offset-3 text-center">
				<div class="mockup-content">
						<div class="morph-button wow pulse morph-button-inflow morph-button-inflow-1">
							<button type="button "><span>Subscribe to our Newsletter</span></button>
							<div class="morph-content">
								<div>
									<div class="content-style-form content-style-form-4 ">
										<h2 class="morph-clone">Subscribe to our Newsletter</h2>
										<form>
											<p><label>Your Email Address</label><input type="text"/></p>
											<p><button>Subscribe me</button></p>
										</form>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>	
			</div>>
		</div>
	</div>	
	
	<!-- Credits -->
	<div id="credits" class="content-section-a" style="">
		<div class="container">
			<div class="row">
			
			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>Grupo</h2>
				<p class="lead" style="margin-top:0">Un grupo profesional te atendera y ayudara.</p>
			 </div>
			 
				<div class="col-sm-6  block wow bounceIn">
					<div class="row">
						<div class="col-md-4 box-icon rotate"> 
						<i class="fa fa-user fa-4x "> </i> 
						</div>
						<div class="col-md-8 box-ct">
							<h3> Clientes </h3>
							<p> Servicio especializado al momento de atenderte. </p>
						</div>
				  </div>
			  </div>
			  <div class="col-sm-6 block wow bounceIn">
					<div class="row">
					  <div class="col-md-4 box-icon rotate"> 
						<i class="fa fa-users fa-4x ">  </i> 
					  </div>
					  <div class="col-md-8 box-ct">
						<h3> Comodas forma de pagos </h3>
						<p> Dentro de nuestras sucursales podras encontrar comodas formas de pagos que se adapten a ti.</p> 
					  </div>
					</div>
			  </div>
		  </div>
		  
		  <!-- <div class="row tworow">
				<div class="col-sm-6  block wow bounceIn">
					<div class="row">
						<div class="col-md-4 box-icon rotate"> 
							<i class="fa fa-magic fa-4x "> </i> 
						</div>
						<div class="col-md-8 box-ct">
							<h3> Codrops </h3>
							<p> Lorem ipsum dolor sit ametconsectetur adipiscing elit. Suspendisse orci quam. </p>
						</div>
				  </div>
			  </div>
			  <div class="col-sm-6 block wow bounceIn">
					<div class="row">
					  <div class="col-md-4 box-icon rotate"> 
						<i class="fa fa-heart fa-4x "> </i> 
					  </div>
					  <div class="col-md-8 box-ct">
						<h3> Lorem Ipsum</h3>
						<p> Nullam mo  arcu ac molestie scelerisqu vulputate, molestie ligula gravida, tempus ipsum.</p> 
					  </div>
					</div>
			  </div>
		  </div> -->
		</div>
	</div>
	
	
	<!-- Contact -->
	<div id="contact" class="content-section-a">
		<div class="container">
			<div class="row">
			
			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>Contactanos</h2>
				<!-- <p class="lead" style="margin-top:0">A special thanks to Death.</p> -->
			</div>
			
			<form role="form" action="" method="post" >
				<div class="col-md-6">
					<div class="form-group">
						<label for="InputName">Tu nombre</label>
						<div class="input-group">
							<input type="text" class="form-control" name="InputName" id="InputName" placeholder="Nombre" required>
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
						</div>
					</div>
					
					<div class="form-group">
						<label for="InputEmail">Tu Email</label>
						<div class="input-group">
							<input type="email" class="form-control" id="InputEmailForm" name="InputEmailForm" placeholder="Correo electronico" required  >
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
						</div>
					</div>
					
					<div class="form-group">
						<label for="InputMessage">Mensaje</label>
						<div class="input-group">
							<textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
						</div>
					</div>

					<input type="submit" name="submit" id="submit" value="Enviar" class="btn wow tada btn-embossed btn-primary pull-right">
				</div>
			</form>
			
			<hr class="featurette-divider hidden-lg">
				<div class="col-md-5 col-md-push-1 address">
					<address>
					<h3>Localizacion</h3>
					<p class="lead"><a href="https://www.google.com.co/maps/place/studio+princess,+C%C3%BAcuta,+Norte+de+Santander/@7.9052916,-72.4892246,17z/data=!4m13!1m7!3m6!1s0x8e664517a6671b25:0xf3836c60e472f42e!2sstudio+princess,+C%C3%BAcuta,+Norte+de+Santander!3b1!8m2!3d7.9052916!4d-72.4870359!3m4!1s0x8e664517a6671b25:0xf3836c60e472f42e!8m2!3d7.9052916!4d-72.4870359" target="_blank">Studio Princes<br>
					Cucuta - Norte de Santander</a><br>
					Phone: 301 123-4568<br>
					<!-- Fax: XXX-XXX-YYYY -->
					</p>
					</address>

					<h3>Social</h3>
					<li class="social"> 
					<a href="#"><i class="fa fa-facebook-square fa-size"> </i></a>
					<a href="#"><i class="fa  fa-twitter-square fa-size"> </i> </a> 
					<a href="#"><i class="fa fa-google-plus-square fa-size"> </i></a>
					<a href="#"><i class="fa fa-flickr fa-size"> </i> </a>
					</li>
				</div>
			</div>
		</div>
	</div>
	
	
	
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h3 class="footer-title">Boutique</h3>
            <p>Studio Princes 2018  <br/>
              Todos los derechos reservados<br/>
            </p>
          </div> 

          <div class="col-md-5">
            <div class="footer-banner">
              <h3 class="footer-title">Studio Princes</h3>
              <ul>
                <li>Contactanos si tienes alguna duda</li>
                <li>Visualiza nuestra galeria</li>
                <li>Muchos diseños a tu alcance</li>
                <li>Visita nuestra tienda fisica</li>
              </ul>
              Visitanos: <a href="http://www.studioprinces.com" target="_blank">studioprincess.com</a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/script.js"></script>
	<!-- StikyMenu -->
	<script src="js/stickUp.min.js"></script>
	<script type="text/javascript">
	  jQuery(function($) {
		$(document).ready( function() {
		  $('.navbar-default').stickUp();
		  
		});
	  });
	
	</script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="js/jquery.corner.js"></script> 
	<script src="js/wow.min.js"></script>
	<script>
	 new WOW().init();
	</script>
	<script src="js/classie.js"></script>
	<script src="js/uiMorphingButton_inflow.js"></script>
	<!-- Magnific Popup core JS file -->
	<script src="js/jquery.magnific-popup.js"></script> 
	<script src="js/jquery.validate.js"></script> 
	<script src="js/app.js"></script> 

</body>

</html>
