<?php

/*class Conectar{

public static function conexion(){

    $conexion =  new mysqli("localhost", "root", "", "crudneos");
    return $conexion;

}

}*/

class Conexion{
    public $db;

 public function __construct()
    {
        //Datos que me permiten ingresar la informacion a mi instancia PDO
    $host = "localhost";
    $dbname = "crudneos";
    $username = "root";
    $password = "";
    try {
        $this->db = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    } catch (PDOException $th) {
        echo "Error: ". $th->getMessage();
    }

    }
    //Funcion que me permite cerrar una conexion cuando yo quiera =)
    public function CloseConexion()
    {
        $this->db = null;
    }
}


?>