

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


    <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.php" class="logo me-auto">TOP HOUSE</a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Inicio</a></li>
          <li><a class="nav-link scrollto" href="index.php?c=Inmobiliaria&a=compra">Compra</a></li>
          <li><a class="nav-link scrollto" href="index.php?c=Inmobiliaria&a=alquiler">Alquiler</a></li>
          <li><a class="nav-link scrollto" href="index.php?c=Inmobiliaria&a=contacto">Contacto</a></li>


          <?php
                        if(isset($_SESSION['email'])){
                            ?>
                            <li class="scroll-to-section dropdown">
                            <a href="#perfil" class=" nav-link scrollto dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Perfil</span> <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="index.php?c=Inmobiliaria&a=perfil">DATOS</a></li>
              
              
               

                <li><a class="nav-link scrollto logout" href="index.php?c=Inmobiliaria&a=logout">CERRAR SESION</a></li>
            </ul>    
                       <?php
                        }else{
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
   
  


<div id="carouselExampleSlidesOnly" class="carousel slide position-absolute w-100" data-bs-ride="carousel">
  <div class="carousel-inner ">
   
  

    <div class="carousel-item active">
      
      <img src="assets/images/inicio_imagen.jpg" class="d-block w-100" alt="Foto1">
      <!---->
    </div>
    <div class="carousel-item">
      <img src="assets/images/inicio_imagen2.jpg" class="d-block w-100" alt="Foto2">
    </div>
    <div class="carousel-item">
      <img src="assets/images/inicio_imagen3.jpg" class="d-block w-100" alt="Foto3">
    </div>
  </div>

  
</div>

<div class="formu-buscador col-auto">
  <form class="form-contacto buscador" action="index.php?c=Inmobiliaria&a=BuscadorPrincipal" method="post">
        <label>Elije la opciones:   </label>
        <select name="tipo" required aria-required="true">
          <option value="" selected="true" disabled="disabled">---</option>
          <option value="0">Compra</option>
          <option value="1">Alquiler</option>
        </select>
        <input type="search" name="busqueda" placeholder="Buscar vivienda en municipio, barrio...">
        <input type="submit"  value="Buscar" name="buscador">
      </form>
      </div>
   
    <main>
  
    <section id="featured-services" class="featured-services d-flex justify-content-center">
    <div class="container" data-aos="fade-up">
    <div class="section-title">
          <h2>Servicios</h2>
        </div>
      <div class="container d-flex justify-content-center" data-aos="fade-up">
    

        <div class="row d-flex justify-content-center">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 justify-content-center">
            <div class="icon-box  justify-content-center" data-aos="fade-up" data-aos-delay="100">
              <div class="icon justify-content-center d-flex"><i class="fas fa-handshake-o"></i></div>
              <h4 class="title justify-content-center">Inquilinos perfectos</h4>
              <p class="description ">Nos encargamos de encontrar el perfil de arrendatario que se amolde a las necesidades de cada cliente.</p>
            </div>
          </div>
          

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 justify-content-center">
            <div class="icon-box  justify-content-center" data-aos="fade-up" data-aos-delay="200">
              <div class="icon justify-content-center d-flex"><i class="fas fa-home"></i></div>
              <h4 class="title justify-content-center">Servicios de compraventa a medida</h4>
              <p class="description">En TOP HOUSE apostamos por ofrecer a cada uno de nuestros clientes un servicio de asesoramiento en compraventa personalizado.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 justify-content-center">
            <div class="icon-box  justify-content-center" data-aos="fade-up" data-aos-delay="300">
              <div class="icon justify-content-center d-flex"><i class="fas fa-money"></i></div>
              <h4 class="title justify-content-center">Garantía de pago</h4>
              <p class="description">Nuestro servicio se hace cargo de los posibles impagos de la renta mensual, además contamos con un servicio jurídico para posibles conflictos legales.</p>
            </div>
          </div>

        </div>
      </div>
      </div>
    </section>

    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Nosotros</h2>
          <p>Desde 1994 ayudándote a encontrar la casa de tus sueños.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="assets/images/nosotros.jpg" class="img-fluid" alt="foto4">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>En INMOBILIARIA </h3>
            <p class="fst-italic">
            Nos dedicamos a la intermediación en la compra, venta y alquiler de inmuebles situados en una selección de las mejores zonas residenciales de España.
            </p>
            
            <p>
            Nuestras principales líneas de especialización se encuentran en el mercado residencial, promociones de obra nueva, locales comerciales, inversiones, fincas rústicas e inmuebles bancarios. Le damos un valor añadido a cada operación de compra, venta o alquiler. Te ahorramos problemas, tiempo, gestión documental… y contamos con los servicios posventa que necesites.


            </p>
          </div>
        </div>

      </div>
    </section>

  
    <section id="novedades" class="about">
      <div class="container" data-aos="fade-up">

     
        <div id="card">
          <div class="container-md">
            <div class="row pt-5">
            <div class="section-title">
          <h2>Novedades</h2>
        </div>
        <div class="row">
            <?php 
            foreach($data["viviendas"][0] as $dato){
              if ($dato["tipo"]==0){ $tipo="Venta"; 
              }else{
                $tipo="Alquiler"; 
              }

              if ($dato["opcion"]==0){ $opcion="Casa"; 
              }
              else if ($dato["opcion"]==1){
                $opcion="Piso";
                
              }else{
                $opcion="Local"; 
              }


                echo ' <div class="col-sm">
                <div class="card w-100 card-border mb-5" style="width: 50rem;">
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
                  if (isset($_SESSION['email'])) {
                        
                    if (!is_null($data["favoritos"])) {
                      $flag = false;

                      foreach ($data["favoritos"] as $value) {
                        
                        if ($value["id"] == $dato["id"])
                          $flag = true;
                      }
                      if ($flag) {
                        echo '
                <button  class="fav" id="fav" onclick="guardarfavorito(' . $dato["id"] . ')" ><i  id="corazon' . $dato["id"] . '" class="fa fa-heart fa-2x" aria-hidden="true"></i></button>';
                      } else {
                        echo '
                <button  class="fav" id="fav" onclick="guardarfavorito(' . $dato["id"] . ')" ><i  id="corazon' . $dato["id"] . '" class="fa fa-heart-o fa-2x" aria-hidden="true"></i></button>';
                      }
                    } else {
                      echo '
          <button  class="fav" id="fav" onclick="guardarfavorito(' . $dato["id"] . ')" ><i  id="corazon' . $dato["id"] . '" class="fa fa-heart-o fa-2x" aria-hidden="true"></i></button>';
                    }
                  }
                  echo '</div>
            </div>
          </div>';
            }
            
            ?>
         


      


        </div>
            </div>
          </div>
        </div>
  

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
  <script src="assets/js/favorito.js"></script>
    <!--script src="assets/js/modal.js"></script-->

    <!-- Bootstrap -->
    
  
 

  </body>
</html>
