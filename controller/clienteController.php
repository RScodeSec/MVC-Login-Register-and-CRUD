<?php


require_once dirname(dirname(__FILE__)) .'\model\clienteModel.php';




class CientesController extends Cliente{

    public function ViewInsert()
    {
        require  '../view/insertclient.php';
    }
    
    public function SaveInforModel($dni,$nombres,$apellidos,$celular,$email,$ciudad,$direccion)
    {


        $this->dni = $dni;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;        
        $this->celular = $celular;
        $this->email = $email;
        $this->ciudad = $ciudad;        
        $this->direccion = $direccion;
        $this->InserCliente();
        header("location: ./../view/admin.php");

     
        
    }


}

if(isset($_GET['action']) && $_GET['action']=='insert')
{
    $instanciaClientes = new CientesController();
    $instanciaClientes->ViewInsert();

}

if(isset($_POST['action']) && $_POST['action']=='insert')
{
    $instanciaClientes = new CientesController();
    
    $instanciaClientes->SaveInforModel(
        $_POST['dni'],
        $_POST['nombres'],
        $_POST['apellidos'],
        $_POST['email'],
        $_POST['celular'],
        $_POST['ciudad'],
        $_POST['direccion']);        


}


?>