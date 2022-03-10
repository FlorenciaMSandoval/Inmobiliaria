
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
    <link href="assets/css/style.css" rel="stylesheet">

    </head>

    <body>


    <header id="header_secciones" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.php" class="logo me-auto">TOP HOUSE</a>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto " href="index.php">Inicio</a></li>
          <li><a class="nav-link scrollto " href="index.php?c=Inmobiliaria&a=compra">Compra</a></li>
          <li><a class="nav-link scrollto" href="index.php?c=Inmobiliaria&a=alquiler">Alquiler</a></li>
          <li><a class="nav-link scrollto" href="index.php?c=Inmobiliaria&a=contacto">Contacto</a></li>
          <?php
                        if(isset($_SESSION['email'])){
                            ?>
                            <li class="scroll-to-section dropdown">
                            <a href="#perfil" class=" nav-link scrollto dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Perfil</span> <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a class="active" href="index.php?c=Inmobiliaria&a=perfil">DATOS</a></li>
                          
            
   
      

                        <li><a class="nav-link scrollto logout" href="index.php?c=Inmobiliaria&a=logout">CERRAR SESION</a></li>
              </ul> 

                       <?php
                        }else{
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
   
        <table class="tabla_perfil table">

    <tr class="row">
      <td class=" table izquierda col ">
          <table class="table tabla1 ">
            <tr class="row">
                  <td>  <img src="assets/images/perfil.png" width="200" /></td>
              </tr>
                 
                              <?php
                            
                        if($_SESSION['tipo']=='0'){
                          
                            echo '
                            <tr>
                              <td><a class="textoFormulario" href="index.php?c=Inmobiliaria&a=Gestion">Gestión</a></td>
                          </tr>';

                            
                          }
                              ?>
          </table>
      </td>
            <td class="table derecha col">
                <table class="table tabla2 ">
                  <tr class="col">
                  <td class="logo"><h1>Mis Datos </h1></td>
                  </tr>
                    <tr class="col">
                        <td class="logo ">
                        <?php 
                           
                       echo' <label>Nombre: <input type="text" disabled placeholder="'.$_SESSION['nombre'].'"></label><br>
                        <label>Apellido: <input type="text" disabled placeholder="'.$_SESSION['apellidos'].'"></label><br>
                        <label>Telefono: <input type="text" disabled placeholder="'.$_SESSION['telefono'].'"></label><br>
                        <label>Email: <input type="text" disabled placeholder="'.$_SESSION['email'].'"></label>
                      <h2>Favoritos </h2>';
                      ?>


                     <?php 

                     foreach($data["viviendas"] as $dato){

                      if ($dato["tipo"]==0){ $tipo="Venta"; 
                      }else{
                        $tipo="Alquiler"; 
                      }

                        if ($dato["opcion"] == 0) {
                          $opcion = "Casa";
                        } else if ($dato["opcion"] == 1) {
                          $opcion = "Piso";
                        } else if ($dato["opcion"] == 2) {
                          $opcion = "Atico";
                        }

                       
                     echo'  <div class="col-sm">
                      <div class="card w-100 card-border mb-5" style=width: 18rem;">
                        <img class="card-img-top" src="img/'.$dato["fotos"].'.jpg" style="width: 20rem; height:20rem;" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">'.$opcion.' en ' .$tipo .' ' .$dato["zona"].
                        '</h5>
                        <p class="card-text color_precio">'.$dato["precio"].'€</p>
                        <div class="iconos-card"> 
                        <i class="fas fa-ruler-combined fa-2x">'.' '  .$dato["metros"].'m2</i>
                        <i class="fa fa-bed fa-2x" aria-hidden="true">'.' ' .$dato["nhabitacion"]. '</i>
                        <i class="fas fa-toilet fa-2x" aria-hidden="true">'.' ' .$dato["banio"].'</i>
                        </div>
                        <a href=index.php?c=Inmobiliaria&a=VerInfo&id=' .$dato["id"].' class="btn btn-warning">Ver</a>
                        <a href="index.php?c=Inmobiliaria&a=ver_propietario&id=' . $dato["id"] . '" class="btn btn-warning">Contactar</a>';

                       
                        echo '</div>
                      </div>
                    </div>';
                        
                      }
                      ?>
                        </td>
                    </tr>
                    

                </table>
            </td>
</tr>
                    

</table>
    
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
