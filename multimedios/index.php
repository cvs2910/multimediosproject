<?php 
$pages = 'index'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>Multimedios|Project</title>
  <!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="./assets/animate/animate.css" />
<link rel="stylesheet" href="./assets/animate/set.css" />

<!-- gallery -->
<link rel="stylesheet" href="./assets/gallery/blueimp-gallery.min.css">

<!-- favicon -->
<link rel="shortcut icon" href="./images/logo-icono.png" type="image/x-icon">
<link rel="icon" href="./images/favicon.ico" type="image/x-icon">


<link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
	
</head>
<body>
    <?php include_once("analyticstracking.php") ?>
<?php include('menu.php');?>
    
    <div id="home">
<!-- Slider Starts -->
        <div id="myCarousel" class="carousel slide banner-slider animated bounceInDown" data-ride="carousel">     
            <div class="carousel-inner">
        <!-- Item 1 -->
                <div class="item active">
                        <img src="./images/gallery1.jpg" alt="banner">
                </div>
        <!-- #Item 1 -->

        <!-- Item 2 -->
                <div class="item">
                    <img src="./images/gallery2.jpg" alt="banner">
                </div>
        <!-- #Item 2 -->

        <!-- Item 3 -->
                <div class="item">
                    <img src="./images/gallery4.jpg" alt="banner">
                </div>
        <!-- #Item 3 -->
            </div>
            <a class="left carousel-control" href="#myCarousel" onclick="ga('send', 'event', 'Index', 'click','btnSliderLeft')" data-slide="prev"><span class="glyphicon-chevron-left"><i class="fa fa-angle-left"></i></span></a>
            <a class="right carousel-control" href="#myCarousel" onclick="ga('send', 'event', 'Index', 'click','btnSliderRigth')"  data-slide="next"><span class="glyphicon-chevron-right"><i class="fa fa-angle-right"></i></span></a>
        </div>
<!-- #Slider Ends -->
</div>
    
    
<!-- Cirlce Starts -->
<div id="nosotros"  class="container spacer about">
<br><br><br><br>
<h2 class="text-center wowload fadeInUp">Empresarios Unidos de Puntarenas S.A.</h2>  
  <div class="row">
  <div class="col-sm-6 wowload fadeInLeft">
    <h4><i class="fa fa-bus"></i> Ideales </h4>
    <p>“Transportamos Personas”, nos caracterizamos por nuestro compromiso de brindar el mejor y más eficiente servicio de transporte en nuestro país; brindamos nuestro servicio a Puntarenas, Esparza, El Roble y San Ramón. Nuestro objetivo es facilitar a los ciudadanos el desplazamiento hacia su lugar de descanso, trabajo, ocio o de negocios.</p>
    

  </div>
  <div class="col-sm-6 wowload fadeInRight">
  <h4><i class="fa fa-thumbs-up"></i> Pasión</h4>
  <p>Siempre fiel a nuestros principios de calidad y atención al cliente, con un compromiso constante en el mejoramiento de los autobuses, de la gestión empresarial y del mantenimiento de nuestra flota. En Empresarios Unidos Puntarenas, brindamos al público en general la excelencia de viajar, ofreciendo el mejor trato hacia nuestros usuarios.</p>    
  </div>
  </div>

  
</div>
<!-- #Cirlce Ends -->
    
    <!-- terminales -->
    
    <div id="terminales"  class=" clearfix grid"> 
    
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/puntarenas.jpg" alt="img01"/>
        <figcaption>
            <h2>Puntarenas</h2><br>
            <p>Del muelle, 125 metros este.<br>Horario de oficina: 7:00 am a 6:00 pm<br><br>
            <a href="images/portfolio/puntarenas.jpg" onclick="ga('send', 'event', 'Index', 'click','btnPuntarenas')" title="1" data-gallery>Ver más</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/roble.jpg" alt="img01"/>
        <figcaption>
            <h2>El Roble</h2><br>
            <p>Frente al Polideportivo de El Roble.<br>Horario de Oficina: 7:00 am a 6:00 pm<br><br>
            <a href="images/portfolio/roble.jpg" onclick="ga('send', 'event', 'Index', 'click','btnRoble')" title="1" data-gallery>Ver más</a></p>            
        </figcaption>
    </figure>
         <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/esparza.jpg" alt="img01"/>
        <figcaption>
            <h2>Esparza</h2><br>
            <p>De la entrada principal de Esparza o del Restaurante tabaris, 50 mts este.<br>Horario de Oficina: 6:00 am a 6:00 pm<br><br>
            <a href="images/portfolio/esparza.jpg" onclick="ga('send', 'event', 'Index', 'click','btnEsparza')" title="1" data-gallery>Ver más</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/sanramon.jpg" alt="img01"/>
        <figcaption>
            <h2>San Ramón</h2><br>
            <p>Del Mercado Municpal de San Ramón, 175 mts, oeste.<br>Horario de Oficina: 5:00 am a 5:00 pm<br><br>
            <a href="images/portfolio/sanramon.jpg" onclick="ga('send', 'event', 'Index', 'click','btnSanRamon')" title="1" data-gallery>Ver más</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/alajuela.jpg" alt="img01"/>
        <figcaption>
            <h2>Alajuela</h2><br>
            <p>200 metros al norte de la entrada principal del City Mall<br>Horario de Oficina: 7:00 am a 5:00 pm<br><br>
            <a href="images/portfolio/alajuela.jpg" onclick="ga('send', 'event', 'Index', 'click','btnAlajuela')" title="1" data-gallery>Ver más</a></p>            
        </figcaption>
    </figure>   
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/sanjose.jpg" alt="img01"/>
        <figcaption>
            <h2>San José</h2><br>
            <p>Avenida 10 y 12 calle 16, Barrio Los Ángeles.<br>Horario de Oficina: 7:00 am a 5:00 pm<br><br>
            <a href="images/portfolio/sanjose.jpg" onclick="ga('send', 'event', 'Index', 'click','btnSanJose')" title="1" data-gallery>Ver más</a></p>            
        </figcaption>
    </figure>      
        <!-- terminales Ends -->
        
    </div>
    
    
    <!--  NOTICIAS -->
    
    <div id="noticias" class="container spacer ">
	<h2 class="text-center  wowload fadeInUp">Últimos acontecimientos</h2>
  <div class="clearfix">
    <div id="col-left" class="col-sm-6 partners  wowload fadeInLeft">
   
   </div>
    <div  id="col-right" class="col-sm-6">


    <div id="carousel-testimonials" class="carousel slide testimonails  wowload fadeInRight" data-ride="carousel">
    <div class="carousel-inner">  
      <div class="item active animated bounceInRight row">
      <div class="animated slideInLeft col-xs-2"><img alt="portfolio" src="images/wifi.png" width="100" class="img-circle img-responsive"></div>
      <div  class="col-xs-10">
      <p> ¡Ahora contamos con Wi-fi! <br>Todas nuestras terminales, y nuestros nuevos buses cuentan con redes Wi-fi para todos nuestros clientes.</p>        
      </div>
      </div>
      <div class="item  animated bounceInRight row">
      <div class="animated slideInLeft col-xs-2"><img alt="portfolio" src="images/2bus2.png" width="100" class="img-circle img-responsive"></div>
      <div  class="col-xs-10">
      <p> ¡Estrenamos buses de dos pisos!<br>Ahora puedes viajar hacia San José en nuetros nuevos buses de dos pisos, que cuentan con aire acondicionado y conexión Wi-fi.</p>
      </div>
      </div>
      <div class="item  animated bounceInRight row">
      <div class="animated slideInLeft  col-xs-2"><img alt="portfolio" src="images/esparza.png" width="100" class="img-circle img-responsive"></div>
      <div  class="col-xs-10">
      <p>¡Ya llegamos a Esparza!<br>Los vecinos de Esparza ya pueden utilizar nuestros buses para viajar hacia sin contratiempo, con nuestra nueva terminal 50 mts este del Restaurante Tabaris.</p>
      </div>
      </div>
  </div>

   <!-- Indicators -->
   	<ol class="carousel-indicators">
    <li data-target="#carousel-testimonials" data-slide-to="0" class="active"  onclick="ga('send', 'event', 'Index', 'click','circleLeft')"></li>
    <li data-target="#carousel-testimonials" data-slide-to="1"  onclick="ga('send', 'event', 'Index', 'click','circleMedium')"></li>
    <li data-target="#carousel-testimonials" data-slide-to="2"  onclick="ga('send', 'event', 'Index', 'click','circleRigth')"></li>
  	</ol>
  	<!-- Indicators -->
  </div>



    </div>
  </div>
</div>
<!-- FINAL NOTICIAS -->
        
        
<!-- About Starts -->
<div id="separador" class="highlight-info">
<div class="overlay spacer">
<div class="container">
<div class="row text-center  wowload fadeInDownBig">
	<div class="col-sm-3 col-xs-6">
	<i class="fa fa-smile-o  fa-5x"></i><h4>Miles de clientes satisfechos</h4>
	</div>
	<div class="col-sm-3 col-xs-6">
	<i class="fa fa-rocket  fa-5x"></i><h4>Siempre en evolución</h4>
	</div>
	<div class="col-sm-3 col-xs-6">
	<i class="fa fa-clock-o  fa-5x"></i><h4>Buses a toda hora</h4>
	</div>
	<div class="col-sm-3 col-xs-6">
	<i class="fa fa-map-marker fa-5x"></i><h4>5 terminales</h4>
	</div>
</div>
</div>
</div>
</div>
<!-- About Ends -->





<div id="contact" class="spacer">
<!--Contact Starts-->
<div id="shade" class="container contactform center">


<h2 class="text-center  wowload fadeInUp">¡Ponte en contacto con nosotros!</h2>
  <div class="row wowload fadeInLeftBig">      
      <div class="col-sm-6 col-sm-offset-3 col-xs-12">      
              <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <input type="text" placeholder="Nombre" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <input type="tel" placeholder="Telefono" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <input type="email" placeholder="Correo" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <textarea rows="10" cols="100" placeholder="Mensaje" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary" class="fa fa-paper-plane" onclick="ga('send','event','Index','click','btnEnviarContactenos')" >Enviar</button>
                </form>
  </div>



</div>
</div>



<!--Contact Ends-->
    
    
    
    <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">Title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->    
</div>

<?php include 'footer.php';?>

<script src="./js/jquery.js"></script>
<script src="./js/bootstrap.min.js"></script>

    <!-- jquery -->
<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>

<!-- custom script -->
 <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
<script src="assets/script.js"></script>
</body>
</html>		