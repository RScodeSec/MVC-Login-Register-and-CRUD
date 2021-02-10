<?php

require_once dirname(dirname(__FILE__)). '\core\database.php';

class Cliente{

    protected $id;
    protected $dni;
    protected $nombres;
    protected $apellidos;
    protected $celular;
    protected $email;
    protected $ciudad;
    protected $direccion;

    protected function InserCliente()
    {

        $ic = new Conexion();
        
        $sql = "INSERT INTO clients(dni,nombres,apellidos,celular,email,ciudad,direccion) VALUES(?,?,?,?,?,?,?)";
        $insertar = $ic->db->prepare($sql);
        $insertar->bindParam(1, $this->dni);
        $insertar->bindParam(2, $this->nombres);
        $insertar->bindParam(3, $this->apellidos);
        $insertar->bindParam(4, $this->celular);
        $insertar->bindParam(5, $this->email);
        $insertar->bindParam(6, $this->ciudad);
        $insertar->bindParam(7, $this->direccion);
        $insertar->execute();
       
    }

}

?>
