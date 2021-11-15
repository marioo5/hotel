<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Deluxe - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="<?= ROOT_URL;?>/public/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?= ROOT_URL;?>/public/css/animate.css">
    
    <link rel="stylesheet" href="<?= ROOT_URL;?>/public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= ROOT_URL;?>/public/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= ROOT_URL;?>/public/css/magnific-popup.css">

    <link rel="stylesheet" href="<?= ROOT_URL;?>/public/css/aos.css">

    <link rel="stylesheet" href="<?= ROOT_URL;?>/public/css/ionicons.min.css">

    <link rel="stylesheet" href="<?= ROOT_URL;?>/public/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?= ROOT_URL;?>/public/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?= ROOT_URL;?>/public/css/flaticon.css">
    <link rel="stylesheet" href="<?= ROOT_URL;?>/public/css/icomoon.css">
    <link rel="stylesheet" href="<?= ROOT_URL;?>/public/css/style.css">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="<?= ROOT_URL;?>"><img src="<?= ROOT_URL;?>/public/images/logo.png" alt="" class="img-fluid"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="<?= ROOT_URL;?>" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="<?= ROOT_URL;?>/pages/rooms" class="nav-link">Habitaciones</a></li>
	          <li class="nav-item"><a href="<?= ROOT_URL;?>/pages/restaurant" class="nav-link">Gastronomia</a></li>
	          <li class="nav-item"><a href="<?= ROOT_URL;?>/pages/bodas" class="nav-link">Bodas</a></li>
	          <li class="nav-item"><a href="<?= ROOT_URL;?>/pages/blog" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="<?= ROOT_URL;?>/pages/contact" class="nav-link">Contacto</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>

        <?php Messages::display();?> 
        <?= $content ?>

      <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <img src="<?= ROOT_URL;?>/public/images/logocartol.png" class="">
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://twitter.com/CarltonBilbao"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/HotelCarltonBilbao"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/aranzazuhoteles/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Links de interes</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Blog</a></li>
                <li><a href="#" class="py-2 d-block">Habitaciones</a></li>
                <li><a href="#" class="py-2 d-block">Gastronomia</a></li>
                <li><a href="#" class="py-2 d-block">Bodas</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Privado</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Galeria</a></li>
                <li><a href="#" class="py-2 d-block">Información</a></li>
                <li><a href="#" class="py-2 d-block">Contacto</a></li>
                <li><a href="#" class="py-2 d-block">Servicios</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Información de Contacto</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Plaza Federico Moyúa, 2, 48009 Bilbao, España</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">944 16 22 00</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">carlton@aranzazu-hoteles.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?= ROOT_URL;?>/public/js/jquery.min.js"></script>
  <script src="<?= ROOT_URL;?>/public/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?= ROOT_URL;?>/public/js/popper.min.js"></script>
  <script src="<?= ROOT_URL;?>/public/js/bootstrap.min.js"></script>
  <script src="<?= ROOT_URL;?>/public/js/jquery.easing.1.3.js"></script>
  <script src="<?= ROOT_URL;?>/public/js/jquery.waypoints.min.js"></script>
  <script src="<?= ROOT_URL;?>/public/js/jquery.stellar.min.js"></script>
  <script src="<?= ROOT_URL;?>/public/js/owl.carousel.min.js"></script>
  <script src="<?= ROOT_URL;?>/public/js/jquery.magnific-popup.min.js"></script>
  <script src="<?= ROOT_URL;?>/public/js/aos.js"></script>
  <script src="<?= ROOT_URL;?>/public/js/jquery.animateNumber.min.js"></script>
  <script src="<?= ROOT_URL;?>/public/js/bootstrap-datepicker.js"></script>
  <script src="<?= ROOT_URL;?>/public/js/jquery.timepicker.min.js"></script>
  <script src="<?= ROOT_URL;?>/public/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?= ROOT_URL;?>/public/js/google-map.js"></script>
  <script src="<?= ROOT_URL;?>/public/js/main.js"></script>
    
  </body>
</html>