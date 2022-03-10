
 <?php
 /*class GestionController
{

    public function __construct()
    {
        require_once "models/Model_inmobiliaria.php";
    }

 public function Gestion()
    { 

        require_once "view/inmobiliaria/gestion.php";
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
}
*/
?>