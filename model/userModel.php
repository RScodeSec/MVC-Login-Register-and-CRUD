<?php

require_once dirname(dirname(__FILE__)). '\core\database.php';
class Usuario{ 
      
    protected $id;
    protected $nombres;
    protected $username;
    protected $passwords;
    protected $email;
    

    

    protected function InsertUsuario()
    {
        $ic = new Conexion();
        
        $sql = "INSERT INTO users(nombres,username,passwords,email) VALUES(?,?,?,?)";
        $insertar = $ic->db->prepare($sql);
        $insertar->bindParam(1, $this->nombres);
        $insertar->bindParam(2, $this->username);
        $insertar->bindParam(3, $this->passwords);
        $insertar->bindParam(4, $this->email);
        $insertar->execute();
        
        
    }
    

    protected function SearchUsuario()
    {
        $ic = new Conexion();
        $sql = "SELECT * FROM users WHERE username='$this->username'";
        $consulta = $ic->db->prepare($sql);
        $consulta->execute();
        $objetoConsulta = $consulta->fetchAll(PDO::FETCH_OBJ);
        return $objetoConsulta;


    }








}


?>