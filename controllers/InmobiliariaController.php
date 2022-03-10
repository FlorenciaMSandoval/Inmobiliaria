<?php

class InmobiliariaController
{

    public function __construct()
    {
        require_once "models/Model_inmobiliaria.php";
    }

    public function index()
    {
        require_once "models/Model_inmobiliaria.php";
        $viviendas = new Model_inmobiliaria();
        $data["viviendas"] = $viviendas->get_viviendas();

        if ((isset($_SESSION['email']))) {
            $data["favoritos"] = $viviendas->get_favorito($_SESSION['email']);
        } else {
            $data["favoritos"] = null;
        }
        require_once "view/inmobiliaria/home.php";
    }

    public function Login()
    {

        require_once "view/inmobiliaria/login.php";
    }

    public function IniciarSesion()
    {
        if (isset($_POST['iniciar'])) {
            require_once 'models/Model_inmobiliaria.php';
            $emailI = $_POST['emailI'];
            $passI = $_POST['passI'];
            $viviendas = new Model_inmobiliaria();
            $aux = $viviendas->Iniciar($emailI, $passI);
            $this->index();
            if ($aux) {
                //header("Location: index.php");
                // header( "home.php");

            }
            // require_once "view/inmobiliaria/home.php";

        }
    }


    public function Compra($r_busqueda = null)
    {
        session_start();
        require_once 'models/Model_inmobiliaria.php';
        $viviendas = new Model_inmobiliaria();
        if (is_array($r_busqueda)) {
            $data = $r_busqueda;
        } else {
            $data["viviendas"] = $viviendas->Compra();
        }

        if ((isset($_SESSION['email']))) {
            $data["favoritos"] = $viviendas->get_favorito($_SESSION['email']);
        } else {
            $data["favoritos"] = null;
        }
        require_once "view/inmobiliaria/comprar.php";
    }

    /*public funcion MostrarCompra(){
    
    }*/

    public function Alquiler($r_busqueda = null)
    {
        session_start();
        require_once 'models/Model_inmobiliaria.php';
        $viviendas = new Model_inmobiliaria();
        if (is_array($r_busqueda)) {
            $data = $r_busqueda;
        } else {
            $data["viviendas"] = $viviendas->Alquiler();
        }
        if ((isset($_SESSION['email']))) {
            $data["favoritos"] = $viviendas->get_favorito($_SESSION['email']);
        } else {
            $data["favoritos"] = null;
        }

        require_once "view/inmobiliaria/alquiler.php";
    }

    public function Contacto()
    {
        require_once "view/inmobiliaria/contacto.php";
    }

    public function EnviarContacto()
    {
        if (isset($_POST['enviar_comentario'])) {
            require_once 'models/Model_inmobiliaria.php';
            $nombre = $_POST['nombreC'];
            $apellidos = $_POST['apellidoC'];
            $email = $_POST['emailC'];
            $asunto = $_POST['asuntoC'];
            $telefono = $_POST['telC'];
            $mjs = $_POST['mjsC'];
            $usuario = new Model_inmobiliaria();
            $aux = $usuario->Contactar($nombre, $apellidos, $email, $telefono, $asunto, $mjs);
            $this->index();
            if ($aux) {
            }
        }
    }

    public function Perfil($id_usuario)
    {
        session_start();
        require_once "models/Model_inmobiliaria.php";
        $usuarios = new Model_inmobiliaria();
        $id_usuario = $_SESSION['email'];
        $data["usuarios"] = $usuarios->get_usuarios();
        $data["viviendas"] = $usuarios->get_favorito($id_usuario);
        require_once "view/inmobiliaria/perfil.php";
    }

    public function Registrar()
    {
        require_once "view/inmobiliaria/registrar.php";
    }

    public function Register()
    {
        $error="";
        if (isset($_POST['registro'])) {
            require_once 'models/Model_inmobiliaria.php';
           
            
           $nombre=$_POST['nombre'];
          //  $nombre = filter_var($nombre, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
          if( preg_match('/^[a-zA-ZÀ-ÿ\s]{1,40}$/', $nombre) && ($nombre!='')){
              echo "El campo es valido ";
          }else{
            $error.='<span style="color:red;">LOS CAMPOS NO SON VALIDOS</span>';
           
           require_once "view/inmobiliaria/registrar.php";
           die();
          }

          $apellidos=$_POST['apellidos'];

            if( preg_match('/^[a-zA-ZÀ-ÿ\s]{1,40}$/', $apellidos) && ($apellidos!='')){
                echo "El campo es valido ";
            }else{
            $error.='<span style="color:red;">LOS CAMPOS NO SON VALIDOS</span>';
            
            require_once "view/inmobiliaria/registrar.php";
            die();
            }

            $telefono = $_POST['telefono'];
            if( preg_match('/^[\d]{3}[-]*([\d]{2}[-]*){2}[\d]{2}$/', $telefono) && ($telefono!='')){
                echo "El campo es valido ";
            }else{
            $error.='<span style="color:red;">LOS CAMPOS NO SON VALIDOS</span>';
            
            require_once "view/inmobiliaria/registrar.php";
            die();
            }




          $email = $_POST['email'];
          if( preg_match('/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/', $email) && ($email!='')){
            echo "El campo es valido ";
        }else{
          $error='<span style="color:red;">LOS CAMPOS NO SON VALIDOS</span>';
         require_once "view/inmobiliaria/registrar.php";
         die();

        }
           
          
           $passwd = $_POST['contrasenia'];
           if( preg_match('/^.{4,12}$/', $passwd) && ($passwd!='')){
            echo "El campo es valido ";
        }else{
          $error='<span style="color:red;">LOS CAMPOS NO SON VALIDOS</span>';
         require_once "view/inmobiliaria/registrar.php";
         die();

        }
            

           
            /* Validate e-mail
            if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                $error.=$email ."is a valid email address";
            } else {
                $error.=$email ."is not valid email address";
            }


          /*  $apellidos =  filter_var($apellidos, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $telefono=filter_var($telefono,FILTER_SANITIZE_NUMBER_INT );
            $email=filter_var($email,FILTER_SANITIZE_EMAIL);

            if(empty($nombre)){
                $error.="Introduzca su nombre";
            }
            if(empty($telefono)){
                $error.="Introduzca su telefono";
            }  
             if($email!=""){
                 if(filter_var($email,FILTER_VALIDATE_EMAIL)==false){
                    $error.="NO ES UN EMAIL VALIDO";
                 }else{
                    $usuario = new Model_inmobiliaria();
                    $aux = $usuario->Registrarse($nombre, $apellidos, $email, $passwd, $telefono);
        
                   if ($aux) {
                        $this->login();
                    } else
                        $this->Registrar(); 
                 }
             }
            
          
            $passwd = $_POST['contrasenia'];

            if(empty($apellido)){
                $error.="Introduzca su apellido";
            }

           
            die();*/
           
           $usuario = new Model_inmobiliaria();
            $aux = $usuario->Registrarse($nombre, $apellidos, $email, $passwd, $telefono);

           if ($aux) {
                $this->login();
            } else
                $this->Registrar();
                //require_once "view/inmobiliaria/registrar.php";
        } 
    }


    public function logout()
    {
        require_once 'models/Model_inmobiliaria.php';
        $viviendas = new Model_inmobiliaria();
        $aux = $viviendas->CerrarSesion();
    }

    public function BuscadorPrincipal()
    {

        if (isset($_POST['buscador'])) {
            $tipo = $_POST["tipo"];
            $busqueda = $_POST['busqueda'];
            $viviendas = new Model_inmobiliaria();
            $r_busqueda["viviendas"] = $viviendas->Busqueda_inicio($tipo, $busqueda);

            if ($tipo == 1)
                $this->Alquiler($r_busqueda);
            else
                $this->Compra($r_busqueda);
        }
    }

    public function BusquedaFiltros_Compra()
    {
        session_start();
        if (isset($_POST['busqueda_filtro'])) {
            //  error_reporting(0);
            $busqueda = $_POST['buscador'];
            $habitacion = (isset($_POST['habitacion'])) ? $_POST['habitacion'] : '';
            $precio = (isset($_POST['precio'])) ? $_POST['precio'] : '';
            $banio = (isset($_POST['banio'])) ? $_POST['banio'] : '';
            $viviendas = new Model_inmobiliaria();
            $r_busqueda["viviendas"] = $viviendas->Buscador_filtro($habitacion, $busqueda, $precio, $banio);

            $this->Compra($r_busqueda);
        }
    }



    public function BusquedaFiltros_Alquiler()
    {
        if (isset($_POST['busqueda_filtroAlquier'])) {
            //error_reporting(0);
            $busqueda = $_POST['buscador'];
            $habitacion = (isset($_POST['habitacion'])) ? $_POST['habitacion'] : '';
            $precio = (isset($_POST['precio'])) ? $_POST['precio'] : '';
            $banio = (isset($_POST['banio'])) ? $_POST['banio'] : '';
            $viviendas = new Model_inmobiliaria();
            $r_busqueda["viviendas"] = $viviendas->Buscador_filtroAlquiler($habitacion, $busqueda, $precio, $banio);
            $this->Alquiler($r_busqueda);
        }
    }


    public function VerInfo($id)
    {
        session_start();
        require_once 'models/Model_inmobiliaria.php';
        
        $viviendas = new Model_inmobiliaria();
        $aux = $viviendas->Ver($id);
        
        if ((isset($_SESSION['email']))) {
            $data["favoritos"] = $viviendas->get_favorito($_SESSION['email']);
        } else {
            $data["favoritos"] = null;
        }
        // $aux = $id;
        require_once "view/inmobiliaria/ver.php";
    }


    public function gfavorito()
    {

        session_start();

        if (isset($_GET['idcasa'])) {
            $id_usuario = $_SESSION['email'];
            $id_vivienda = $_GET['idcasa'];
            $data["viviendas"] = $viviendas = new Model_inmobiliaria();
            $viviendas->guardarfavorito($id_vivienda, $id_usuario);
        }
    }


    public function ver_propietario($id)
    {
        require_once 'models/Model_inmobiliaria.php';
        $viviendas = new Model_inmobiliaria();

        $data["usuario"] = $viviendas->propietario($id);
        $aux = $id;
        require_once "view/inmobiliaria/contactar_propietario.php";
    }

    public function Gestion()
    { 

        require_once "view/inmobiliaria/gestion.php";
    }

    public function GestionarUsu(){
        
        require_once "models/Model_inmobiliaria.php";
        $usuario = new Model_inmobiliaria();
        $data["usuario"] = $usuario->GestionarUsu();
        echo'<table class="table">
        <tr>
        <th>id</th>
          <th>Nombre</th>
          <th>Apellidos</th>
          <th>Telefono</th>
          <th>Email</th>
        </tr>'
;
        foreach( $data["usuario"][0] as $dato){
       
            echo'
            <tr>
             <td>' .$dato["id"].'</td>
               <td>' .$dato["nombre"].'</td>
               <td>' .$dato["apellidos"].'</td>
               <td>' .$dato["telefono"].'</td>
               <td>' .$dato["email"].'</td>
               
               <td><a href="index.php?c=Inmobiliaria&a=EliminarUsuario&id='.$dato["id"].'" class="btn btn-warning">Eliminar</a></td>
               
               <td>   <button id="eliminar">Eliminar</button>
               </td></tr>'
             
             ;
              }
              
           echo'<td></td>';
        require_once "view/inmobiliaria/gestion_usuario.php";
    }


    public function EliminarUsuario($id){
        require_once 'models/Model_inmobiliaria.php';
        
        $usuario = new Model_inmobiliaria();
        $aux = $usuario->EliminarUsu($id);
       
        // $aux = $id;
        require_once "view/inmobiliaria/gestion_usuario.php";
    }
  
}
