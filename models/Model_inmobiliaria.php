<?php
require_once 'config/conexion.php';

class Model_inmobiliaria extends connection
{

    private $con;
    private $viviendas;

    public function __construct()
    {
        $this->con = parent::Conexion();
        $this->viviendas = array();
    }


    public function get_viviendas()
    {
        try {
            $query = "SELECT * FROM viviendas LIMIT 3";
            $resultado = $this->con->query($query);
            $resultado = $this->con->prepare($query);
            $resultado->execute();
            error_reporting(0); // Desactivar toda las notificaciónes del PHP porque se duplica el session estar y aparece un warning
            session_start();

            while ($row = $resultado->fetchAll()) {
                $this->viviendas[] = $row;
            }

            return $this->viviendas;
        } catch (Exception $e) {
            print "Error!: " . $e->getMessage();
        }
    }

    public function Iniciar($emailI, $passI)
    {
        try {

            $query = "SELECT * FROM usuarios WHERE email= ? and password= ?";
            $stmt = $this->con->prepare($query);

            $stmt->bindParam(1, $emailI);
            $pass = md5($passI);
            $stmt->bindParam(2, $pass);
            $stmt->execute();

            if ($stmt->rowCount() == 0) {
                echo "<script>window.onload = function() {window.alert('Email o contrasenia incorrecta'); }; </script>";
                return false;
            } else {
                if ($stmt->rowCount() == 1) {
                    $fila = $stmt->fetch();
                    session_start();
                    $_SESSION['email'] = $fila['email'];
                    $_SESSION['nombre'] = $fila['nombre'];
                    $_SESSION['tipo'] = $fila['tipo'];
                    $_SESSION['apellidos'] = $fila['apellidos'];
                    $_SESSION['telefono'] = $fila['telefono'];

                    return true;
                }
            }
        } catch (Exception $e) {
            print "Error!: " . $e->getMessage();
        }
    }


    public function CerrarSesion()
    {
        session_start();
        session_destroy();
        header('Location: index.php');
        exit;
    }

    public function Compra()
    {
        try {
            $query = "SELECT * FROM viviendas WHERE tipo='0'";
            $resultado = $this->con->query($query);
            $resultado = $this->con->prepare($query);
            $resultado->execute();

            while ($row = $resultado->fetchAll()) {
                $this->viviendas[] = $row;
            }

            return $this->viviendas;
        } catch (Exception $e) {
            print "Error!: " . $e->getMessage();
        }
    }



    public function Alquiler()
    {
        try {
            $query = "SELECT * FROM viviendas WHERE tipo='1'";
            $resultado = $this->con->query($query);
            $resultado = $this->con->prepare($query);
            $resultado->execute();

            while ($row = $resultado->fetchAll()) {
                $this->viviendas[] = $row;
            }
            return $this->viviendas;
        } catch (Exception $e) {
            print "Error!: " . $e->getMessage();
        }
    }

    public function DatosUsuarios()
    {
        try {
            $query = "SELECT * FROM usuarios";
            $resultado = $this->con->query($query);
            $resultado = $this->con->prepare($query);
            $resultado->execute();
        } catch (Exception $e) {
            print "Error!: " . $e->getMessage();
        }
    }


    public function Registrarse($nombre, $apellidos, $email, $passwd, $telefono)
    {

        $query2 = "SELECT * FROM usuarios WHERE email='$email'";
        $resultado = $this->con->query($query2);

        if ($resultado->rowCount() == 0) {
            $query = "INSERT INTO usuarios(nombre,apellidos,email,password,telefono,tipo) 
               VALUES (:n,:a,:ema,:p,:t,1)";

            $resultado = $this->con->prepare($query);
            $passwd_nueva = md5($passwd);
            $parametro = array('n' => $nombre, 'a' => $apellidos, 'ema' => $email, 'p' => $passwd_nueva, 't' => $telefono);

            $resultado->execute($parametro);


            echo "<script>window.onload = function() {window.alert('usuario registrado'); }; </script>";
            return true;
        } else {
            echo "<script>window.onload = function() {window.alert('Ya existe un usuario registrado con ese email.'); }; </script>";
            return false;
        }
    }

    public function Contactar($nombre, $apellidos, $email, $telefono, $asunto, $mjs)
    {
        try {

            $query = "INSERT INTO contacto(nombre,apellidos,email,telefono,asunto,mensaje) 
            VALUES (:n,:a,:ema,:t,:asu,:mjs)";
            $resultado = $this->con->prepare($query);
            $parametro = array('n' => $nombre, 'a' => $apellidos, 'ema' => $email, 'asu' => $asunto, 't' => $telefono, 'mjs' => $mjs);
            $resultado->execute($parametro);
            echo "<script>window.onload = function() {window.alert('Mensaje enviado'); }; </script>";
        } catch (Exception $e) {
            print "Error!: " . $e->getMessage();
        }
    }


    public function get_usuarios()
    {
        try {
            $query = "SELECT * FROM usuarios";
            $resultado = $this->con->query($query);
            $resultado = $this->con->prepare($query);
            $resultado->execute();
            /* error_reporting(0);// Desactivar toda las notificaciónes del PHP porque se duplica el session estar y aparece un warning
       /* session_start();*/

            while ($row = $resultado->fetchAll()) {
                $this->usuarios[] = $row;
            }

            return $this->usuarios;
        } catch (Exception $e) {
            print "Error!: " . $e->getMessage();
        }
    }




    public function Busqueda_inicio($tipo, $busqueda)
    {
        try {
            $query = "SELECT * FROM viviendas ";
            $query .= "WHERE 1=1 ";
            if ($tipo != '')
                $query .= " AND tipo = '$tipo'";
            if ($busqueda != '')
                $query .= " AND zona LIKE '%$busqueda%'";
            else {
                $query .= " AND tipo = '$tipo'";
            }

            $resultado = $this->con->query($query);
            $resultado = $this->con->prepare($query);
            $resultado->execute();


            while ($row = $resultado->fetchAll()) {

                $this->viviendas[] = $row;
            }

            return $this->viviendas;
        } catch (Exception $e) {
            print "Error!: " . $e->getMessage();
        }
    }


    public function Ver($id)
    {
        $query = "SELECT * FROM viviendas WHERE id=$id";
        $resultado = $this->con->query($query);
        $resultado = $this->con->prepare($query);
        $resultado->execute();

        $aux = $resultado->fetchAll();
        return $aux;
    }

    public function Buscador_filtro($habitacion, $busqueda, $precio, $banio)
    {

        $query = "SELECT * FROM viviendas ";
        $query .= "WHERE 1=1 AND tipo=0";
        if ($busqueda != '')
            $query .= " AND zona LIKE '%$busqueda%'";
        if ($habitacion != '')
            $query .= " AND nhabitacion  $habitacion";
        if ($banio != '')
            $query .= " AND banio  $banio";
        if ($precio != '')
            $query .= " AND precio $precio";


        if ($habitacion = '') {
            $query .= " AND precio $precio";
        }
        if ($precio = '') {
            $query .= " AND nhabitacion  $habitacion";
        }

        $resultado = $this->con->query($query);
        $resultado = $this->con->prepare($query);
        $resultado->execute();
        error_reporting(0);
        while ($row = $resultado->fetchAll()) {

            $this->viviendas[] = $row;
        }

        return $this->viviendas;
    }

    public function Buscador_filtroAlquiler($habitacion, $busqueda, $precio, $banio)
    {

        $query = "SELECT * FROM viviendas ";
        $query .= "WHERE 1=1 AND tipo=1";
        if ($busqueda != '')
            $query .= " AND zona LIKE '%$busqueda%'";
        if ($habitacion != '')
            $query .= " AND nhabitacion  $habitacion";
        if ($banio != '')
            $query .= " AND banio  $banio";
        if ($precio != '')
            $query .= " AND precio $precio";


        if ($habitacion = '') {
            $query .= " AND precio $precio";
        }
        if ($precio = '') {
            $query .= " AND nhabitacion  $habitacion";
        }

        $resultado = $this->con->query($query);
        $resultado = $this->con->prepare($query);
        $resultado->execute();
        error_reporting(0);
        while ($row = $resultado->fetchAll()) {

            $this->viviendas[] = $row;
        }

        return $this->viviendas;
    }

    public function guardarfavorito($id_vivienda, $id_usuario)
    {

        $query2 = "SELECT * FROM favoritos WHERE id_viviendas='$id_vivienda' and id_usuario='$id_usuario'";

        $resultado = $this->con->query($query2);


        if ($resultado->rowCount() != 0) {

            $query = "DELETE  FROM favoritos WHERE id_usuario='$id_usuario' AND id_viviendas='$id_vivienda'";
            $resultado = $this->con->query($query);
            $resultado = $this->con->prepare($query);
            $resultado->execute();

            while ($row = $resultado->fetchAll()) {

                $this->viviendas[] = $row;
            }

            return $this->viviendas;
        } else {
            $query = "INSERT INTO favoritos (id_usuario, id_viviendas)
        VALUES ('$id_usuario','$id_vivienda')";
            $resultado = $this->con->query($query);
            $resultado = $this->con->prepare($query);
            $resultado->execute();
        }
    }


    public function get_favorito($id_usuario)
    {
        $query = "SELECT *  FROM viviendas as v, favoritos as f ,usuarios as u WHERE v.id=f.id_viviendas and '$id_usuario'=f.id_usuario  and u.email=f.id_usuario";
        $resultado = $this->con->query($query);
        $resultado = $this->con->prepare($query);
        $resultado->execute();

        $viviendas = $resultado->fetchAll();

        return $viviendas;
    }

    public function propietario()
    {
        $query = "SELECT * FROM usuarios as u, propietarios as p , viviendas as v WHERE v.id=p.id_viviendas and u.email=p.id_usuarios;";
        $resultado = $this->con->query($query);
        $resultado = $this->con->prepare($query);
        $resultado->execute();

        while ($row = $resultado->fetchAll()) {

            $this->usuario[] = $row;
        }

        return $this->usuario;
    }


    /* public function sacarfavorito($id_viviendas, $id_usuario)
    {


        $query = "DELETE  FROM favoritos WHERE id_usuario=$id_usuario AND id_viviendas=$id_viviendas";
        $resultado = $this->con->query($query);
        $resultado = $this->con->prepare($query);
        $resultado->execute();



        return $this->viviendas;
    }*/

    public function GestionarUsu()
    {
        $query = "SELECT id, nombre, apellidos,email,telefono FROM usuarios";
        $resultado = $this->con->query($query);
        $resultado = $this->con->prepare($query);
        $resultado->execute();

        while ($row = $resultado->fetchAll()) {

            $this->usuario[] = $row;
        }

        return $this->usuario;
    }

    public function EliminarUsu($id)
    {
        $query = "DELETE * FROM usuario WHERE id=$id";
        $resultado = $this->con->query($query);
        $resultado = $this->con->prepare($query);
        $resultado->execute();
        $aux = $resultado->fetchAll();
        return $aux;
    }
}
/**/
