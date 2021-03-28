<?php
    
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor inicia sesión");
                window.location = "log_reg/iniciar.php";
            </script>
        ';
        session_destroy();
        die();
    }
 
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Empleatec</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon3.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="assets/css/styleE.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/de1a5bf6e5.js" crossorigin="anonymous"></script>
</head>

<body>
  <!--==========================
  Header
  ============================-->
  <header id="header">


    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
       <!-- <h1 class="text-light"><a href="#intro" class="scrollto"><span>Rapid</span></a></h1>-->
         <a href="#header" class="scrollto"><img src="img/empleatec2.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
  

        <ul>
          <li class="active"><a href="#intro">Inicio</a></li>
          
          <li><a href="#services">Servicios</a></li>
          
          
          <li class="drop-down" style="color: #fff;"><a ><i class="fas fa-user" style="margin-right:10px; color: #fff;"></i><?php echo $_SESSION['usuario']?></a>
              <ul>
              <li>
                 <li><a href="php/cerrar_conexion.php">Cerrar Sesion</a></li>
              </li>
              </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2>Elije en que <br>te podemos <span>ayudar!</span></h2>
          <div>
          <a href="index.html" class="btn-get-started scrollto">REGRESAR</a>
            <a href="#services" class="btn-get-started scrollto">VER SERVICIOS</a>
          </div>
        </div>
  
        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="img/intro-img.svg" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">


    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Servicios</h3>
          <p>Los principales servicios que ofrece EMPLEATEC.</p>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fceef3;"><i class="ion-briefcase" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Consigue empleo:</a></h4>
              <p class="description">Ingresa para seleccionar el empleo de tu eleccion y presentar tus documentos.</p>
              <form action="admin/index.php">
              <button type="submit" class="btn btn-info" style="margin-top: 10px; width: 200px;">Ver Empleos</button>
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fff0da;"><i class="ion-social-chrome" style="color: #e98e06;"></i></div>
              <h4 class="title"><a href="">Diseñamos tu pagina web</a></h4>
              <p class="description">Podremos diseñar tu pagina web con tus caracteristicas y necesidades.</p>
              <form action="web/index.html">
              <button type="submit" class="btn btn-info" style="margin-top: 10px;">Contactar con un Diseñador</button>
              </form>
            </div>
          </div>

          <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-photos-outline" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Diseño Grafico</a></h4>
              <p class="description">Diseñamos tu logo para tu empresa local o cualquier tipo de diseño.</p>
              <form action="grafico/grafico/index.html">
              <button type="submit" class="btn btn-info" style="margin-top: 10px;">Contactar con un Diseñador</button>
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #eafde7;"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Foro de tu comunidad</a></h4>
              <p class="description">Mantente al tanto de lo que esta pasando en tu comunidad.</p>
              <button type="button" class="btn btn-info" style="margin-top: 10px; width:200px;">Entrar al Chat</button>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Locales Afiliados:</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="img/clients/client-1.png" alt="">
          <img src="img/clients/client-2.png" alt="">
          <img src="img/clients/client-3.png" alt="">
          <img src="img/clients/client-4.png" alt="">
          <img src="img/clients/client-5.png" alt="">
          <img src="img/clients/client-6.png" alt="">
          <img src="img/clients/client-7.png" alt="">
          <img src="img/clients/client-8.png" alt="">
        </div>

      </div>
    </section><!-- #clients -->


    <!--==========================
      Pricing Section
    ============================-->
    <!--
    <section id="pricing" class="wow fadeInUp section-bg">

      <div class="container">

        <header class="section-header">
          <h3>Pricing</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </header>

        <div class="row flex-items-xs-middle flex-items-xs-center">
      
           Basic Plan  
          <div class="col-xs-12 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3><span class="currency">$</span>19<span class="period">/month</span></h3>
              </div>
              <div class="card-block">
                <h4 class="card-title"> 
                  Basic Plan
                </h4>
                <ul class="list-group">
                  <li class="list-group-item">Odio animi voluptates</li>
                  <li class="list-group-item">Inventore quisquam et</li>
                  <li class="list-group-item">Et perspiciatis suscipit</li>
                  <li class="list-group-item">24/7 Support System</li>
                </ul>
                <a href="#" class="btn">Choose Plan</a>
              </div>
            </div>
          </div>
      
          Regular Plan 
          <div class="col-xs-12 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3><span class="currency">$</span>29<span class="period">/month</span></h3>
              </div>
              <div class="card-block">
                <h4 class="card-title"> 
                  Regular Plan
                </h4>
                <ul class="list-group">
                  <li class="list-group-item">Odio animi voluptates</li>
                  <li class="list-group-item">Inventore quisquam et</li>
                  <li class="list-group-item">Et perspiciatis suscipit</li>
                  <li class="list-group-item">24/7 Support System</li>
                </ul>
                <a href="#" class="btn">Choose Plan</a>
              </div>
            </div>
          </div>
      
      Premium Plan 
          <div class="col-xs-12 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3><span class="currency">$</span>39<span class="period">/month</span></h3>
              </div>
              <div class="card-block">
                <h4 class="card-title"> 
                  Premium Plan
                </h4>
                <ul class="list-group">
                  <li class="list-group-item">Odio animi voluptates</li>
                  <li class="list-group-item">Inventore quisquam et</li>
                  <li class="list-group-item">Et perspiciatis suscipit</li>
                  <li class="list-group-item">24/7 Support System</li>
                </ul>
                <a href="#" class="btn">Choose Plan</a>
              </div>
            </div>
          </div>
      
        </div>
      </div>

    </section>
    -->
    <!-- #pricing -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">

                <div class="col-sm-6">

                  <div class="footer-info">
                    <h3>Empleatec</h3>
                    <p>Nuestra misión principal es brindar una variedad de servicios a las personas que se encuentran en las diferentes comunidades de Villahermosa, Tabasco. Esto se realizará por medio de nuestro sitio web en el cual les mostraremos dichos servicios.</p>
                  </div>
                </div>

                <div class="col-sm-6">
                  

                  <div class="footer-links">
                    <h4>Contactanos:</h4>
                    <p>
                      Calle: Gregorio Mendez<br>
                      Villahermosa, Centro <br>
                      Mexico <br>
                      <strong>Celular:</strong> +52 9999999999<br>
                      <strong>Correo:</strong> info@example.com<br>
                    </p>
                  </div>

                </div>

            </div>

          </div>

          <div class="col-lg-6">

            <div class="form">
              
              <h4>Envianos un Mensaje</h4>
              
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Su Nombre:" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Su Correo:" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto del mensaje:" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje:"></textarea>
                  <div class="validation"></div>
                </div>

                <div id="sendmessage">Tu mesaje a sido enviado, Gracias!</div>
                <div id="errormessage"></div>

                <div class="text-center"><button type="submit" title="Send Message">Enviar Mensaje</button></div>
              </form>
            </div>

          </div>

          

        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Empleatec</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Diseñado por <a href="https://bootstrapmade.com/">Empleatec</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="assets/js/main.js"></script>

</body>
</html>