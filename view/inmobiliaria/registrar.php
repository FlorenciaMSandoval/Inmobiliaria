<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta content="" name="keywords">

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

  <title>INMOBILIARIA</title>

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
          <li><a class="nav-link scrollto " href="index.php?c=Inmobiliaria&a=contacto">Contacto</a></li>
          <li><a class="nav-link scrollto " href="index.php?c=Inmobiliaria&a=login">Iniciar Sesion</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
  </header>

  <main class="m-0 row justify-content-center">
    <section id="compra" class="col-auto">
      <div>
        <h1 class="pt-5">REGISTRARSE</h1>
        
        <form class="form-contacto" id="formulario" action="index.php?c=Inmobiliaria&a=Register" method="POST">
          <fieldset>
            <legend> Completa el formulario </legend>
            
            <span style="style=color:red;"> <?php if(isset($error)) {echo $error;}else { $error = '';} ?></span>

            <div class="formulario__grupo" id="grupo_nombre">
              <label for="nombre">Nombre</label>
              <div class="formulario__grupo-input">
            
                <input type="text" id="nombre"  name="nombre" placeholder="Tu nombre">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
              </div>
              <p class="formulario__input-error">El usuario tiene quer ser A-Z o a-z</p>
            </div>



            <div class="formulario__grupo" id="grupo_apellidos">
              <label for="nombre">Apellido</label>
              <div class="formulario__grupo-input">
                <input type="text" id="apellido" name="apellidos" placeholder="Tu apellido">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
              </div>
              <p class="formulario__input-error">El usuario tiene quer ser A-Z o a-z</p>
            </div>


            <div class="formulario__grupo" id="grupo_telefono">
              <label for="telefono">Teléfono</label>
              <div class="formulario__grupo-input">
                <input type="tel" id="telefono" required name="telefono" placeholder="Tu número" >
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
              </div>
              <p class="formulario__input-error">El telefono tiene ser numerico que tener 9 cifras </p>
            </div>

            <div class="formulario__grupo" id="grupo_email">
              <label for="email">Email</label>
              <div class="formulario__grupo-input">
              
                <input type="email" id="email"  name="email" placeholder="Tu email" >
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
              </div>
              <p class="formulario__input-error">Solo puede contener letras, numeros, puntos, guiones y guion bajo </p>
            </div>



            <div class="formulario__grupo" id="grupo_contrasenia">
              <label for="pass">Contraseña</label>
              <div class="formulario__grupo-input">
                <input type="password" id="passwd" required name="contrasenia" placeholder="Nueva contraseña" >
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
              </div>
              <p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos</p>
            </div>


          </fieldset>
          <input type="submit" name="registro" value="Registrarse" class="btn btn-warning d-flex justify-content-center">
       
          <div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>

       
        </form>
  </main>


  </div>
  </section>

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
  <script src="assets/js/formulario.js"></script>
  <!--script src="assets/js/modal.js"></script-->

  <!-- Bootstrap -->




</body>

</html>