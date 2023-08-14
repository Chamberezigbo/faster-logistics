     <?php
     function isActive($page)
     {
          $currentURI = trim(str_replace('faster-logistics/', '', $_SERVER['REQUEST_URI']), '/');
          $isActive = ($currentURI == $page) ? 'active' : '';
          return $isActive;
     }

     ?>
     <!DOCTYPE html>
     <html lang="en">

     <head>
          <meta charset="utf-8" />
          <title>FASTER - Logistics Company</title>
          <meta content="width=device-width, initial-scale=1.0" name="viewport" />
          <meta content="Free HTML Templates" name="keywords" />
          <meta content="Free HTML Templates" name="description" />

          <!-- Favicon -->
          <link href="img/favicon.ico" rel="icon" />
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqhmdN7U9cLCvALzm7jd6o9LT8fa-SFqE&libraries=geometry,places"></script>

          <!-- Google Web Fonts -->
          <link rel="preconnect" href="https://fonts.gstatic.com" />
          <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

          <!-- Font Awesome -->
          <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />

          <!-- Libraries Stylesheet -->
          <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

          <!-- Customized Bootstrap Stylesheet -->
          <link href="css/style.css" rel="stylesheet" />

          <!-- alert -->
          <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
          <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
     </head>

     <body>
          <!-- Topbar Start -->
          <div class="container-fluid bg-dark">
               <div class="row py-2 px-lg-5">
                    <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                         <div class="d-inline-flex align-items-center text-white">
                              <small><i class="fa fa-phone-alt mr-2"></i>+131 5325 009</small>
                              <small class="px-3">|</small>
                              <small><i class="fa fa-envelope mr-2"></i>info@faster-247.com</small>
                         </div>
                    </div>
                    <div class="col-lg-6 text-center text-lg-right">
                         <div class="d-inline-flex align-items-center">
                              <a href="#" class="" id="google_translate_element"></a>
                         </div>
                    </div>
               </div>
          </div>
          <!-- Topbar End -->

          <!-- Navbar Start -->
          <div class="container-fluid p-0">
               <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
                    <a href="index.php" class="navbar-brand ml-lg-3">
                         <h1 class="m-0 display-5 text-uppercase text-primary">
                              <i class="fa fa-plane mr-2"></i>Faster Express
                         </h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                         <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                         <div class="navbar-nav m-auto py-0">
                              <a href="index.php" class="nav-item nav-link <?php echo isActive('index.php'); ?>">Home</a>
                              <a href="about.php" class="nav-item nav-link <?php echo isActive('about.php'); ?>">About</a>
                              <a href="service.php" class="nav-item nav-link <?php echo isActive('service.php'); ?>">Service</a>
                              <a href="price.php" class="nav-item nav-link <?php echo isActive('price.php'); ?>">Price</a>
                              <a href="contact.php" class="nav-item nav-link <?php echo isActive('contact.php'); ?>">Contact</a>
                         </div>
                         <a href="price.php" class="btn btn-primary py-2 px-4 d-none d-lg-block">Get A Quote</a>
                    </div>
               </nav>
          </div>
          <!-- Navbar End -->