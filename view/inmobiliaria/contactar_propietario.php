<?php
session_start();
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

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
          <li><a class="nav-link scrollto active" href="index.php?c=Inmobiliaria&a=alquiler">Alquiler</a></li>
          <li><a class="nav-link scrollto" href="index.php?c=Inmobiliaria&a=contacto">Contacto</a></li>
          <?php
          if (isset($_SESSION['email'])) {
          ?>
            <li class="scroll-to-section dropdown">
              <a href="#perfil" class=" nav-link scrollto dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Perfil</span> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="index.php?c=Inmobiliaria&a=perfil">DATOS</a></li>
                <li><a href="#">FAVORITOS</a></li>
                <li><a class="nav-link scrollto logout" href="index.php?c=Inmobiliaria&a=logout">CERRAR SESION</a></li>
              </ul>
            <?php
          } else {
            // header("location:index.php");
            ?>

            <li><a class="nav-link scrollto " href="index.php?c=Inmobiliaria&a=login">Iniciar Sesion</a></li>
          <?php
          }
          ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
  </header>

  <main>
  <main class="m-0 row justify-content-center">
            <section id="compra" class="col-auto">   
        <div>
            <h1 class="pt-5">CONTACTO</h1>
            
          <?php
            foreach($data["usuario"][0] as $dato){
               echo' <label>Nombre del propietario: '.$dato['nombre'] .'</label><br>';
               echo' <label>Telefono: '.$dato['telefono'] .'</label>';
           }
            ?>
		<form class="form-contacto" action="index.php?c=Inmobiliaria&a=EnviarContacto" method="POST">
				<fieldset>
					<legend> Completa el formulario </legend> 
				<label for="nombre">Nombre</label>
				<input type="text" name="nombreC" placeholder="Nombre">
        <label for="apellido">Apellido</label>
				<input type="text" name="apellidoC" placeholder="Apellido">
				<label for="email">Email <span style="color:red;">*</span></label>
				<input type="email" name="emailC" placeholder="Email" required>
				<label for="telefono">Teléfono <span style="color:red;">*</span></label>
				<input type="tel" name="telC" placeholder="Número" required>
        <label for="asunto">Asunto <span style="color:red;">*</span></label>
        <select name="asuntoC" required>
            <option selected="true" disabled="disabled">---</option>
            <option value="venta">Vender</option>
            <option  value="alquier">Alquier</option>
            <option  value="otros">Otros</option>
        </select>
				<label for="mensaje">Mensaje <span style="color:red;">*</span></label>
				<textarea id="mensaje" name="mjsC"></textarea>
        
				</fieldset>
				<input type="submit" id="boton" name=enviar_comentario value="Enviar" class="btn btn-warning d-flex justify-content-center"><!--ESTE ES EL BOTON QUE NUNCA ME ACUERDO!!!!el value es lo importante aqui D;-->
		</form>
	</main>

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
  <script src="assets/js/favorito.js"></script>

  <!-- Bootstrap -->




</body>

</html>