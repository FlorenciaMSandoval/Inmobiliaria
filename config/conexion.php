<?php
class connection{
    protected $con_bd;

    public function Conexion(){
        try{
            $this->con_bd=new PDO('mysql:host=localhost; dbname=Inmobiliaria','root','');
            
            return $this->con_bd;
        }catch(Exception $e){
            echo "no se ha podido realizar la conexion";
        }
    }
}
?>