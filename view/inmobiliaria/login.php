
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <meta content="" name="keywords">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>INMOBILIARIA - Iniciar Sesion</title>

    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="assets/favicon/favicon.ico" type="image/x-icon">


    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/daw.css">
    <!--<link rel="stylesheet" type="text/css" href="assets/css/estilos.css">-->
    <link href="assets/css/style.css" rel="stylesheet">

    </head>

    <body>


    <header id="header_secciones" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.php" class="logo me-auto">TOP HOUSE</a>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto " href="index.php">Inicio</a></li>
          <li><a class="nav-link scrollto" href="index.php?c=Inmobiliaria&a=compra">Compra</a></li>
          <li><a class="nav-link scrollto" href="index.php?c=Inmobiliaria&a=alquiler">Alquiler</a></li>
          <li><a class="nav-link scrollto" href="index.php?c=Inmobiliaria&a=contacto">Contacto</a></li>
          <li><a class="nav-link scrollto active" href="index.php?c=Inmobiliaria&a=login">Iniciar Sesion</a></li>
        </ul>

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
  </header>
   
   
    <main>
  
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="assets/images/perfil.png" />
                </div>
                <form class="col-12"  action="index.php?c=Inmobiliaria&a=IniciarSesion" method="POST">
                    <div class="form-group" id="user-group">
                        <input type="email" class="form-control" placeholder="Email" name="emailI"/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                    <input type="password" class="form-control" placeholder="Contraseña" name="passI"/> 
                    </div>
                    <button  type="submit" name="iniciar" class="botoncito btn btn-warning">Ingresar </button>
                </form>
                <div class="col-12 forgot">
                    <a href="#">He olvidado mi contraseña</a>
                </div>
                <hr>

                <div class="col-12 registrar">
                  <span>Eres nuevo?</span><br>
                <button onclick="location.href='index.php?c=Inmobiliaria&a=registrar'" class="botoncito btn btn-primary">Crear cuenta</button>
                
                </div>
                
                <!--
               <div th:if="${param.error}" class="alert alert-danger" role="alert">
		            Invalid username and password.
		        </div>
		        <div th:if="${param.logout}" class="alert alert-success" role="alert">
		            You have been logged out.
		        </div>
            -->
            </div>
        </div>
    </div>


    </main>

    <footer class="footer copyright">
      <div class="credits">
        <p>© 1994 Florencia Macarena Sandoval- DAW 2.SL Todos los derechos reservados. </p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>
    <!--script src="assets/js/modal.js"></script-->

    <!-- Bootstrap -->
    
  
 

  </body>
</html>
