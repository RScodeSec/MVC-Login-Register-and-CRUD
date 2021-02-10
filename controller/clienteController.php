<?php


require_once dirname(dirname(__FILE__)) .'\model\clienteModel.php';




class CientesController extends Cliente{

    public function ViewInsert()
    {
        require  '../view/insertclient.php';
    }

    //TO OBTAIN FROM MYSQL ----------------------------------------------------------------
    //---------------------------------------------------------------------------------

    public function SaveInforModelUpdateFinal($id,$dni,$nombres,$apellidos,$celular,$email,$ciudad,$direccion)
    {
        $this->id = $id;
        $this->dni = $dni;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;        
        $this->celular = $celular;
        $this->email = $email;
        $this->ciudad = $ciudad;        
        $this->direccion = $direccion;
        $this->InsertClienteUpdateFinal();
        header("location: ./../view/viewCliente.php");
        
    }



    //TO OBTAIN FROM MYSQL---------------------------------
    //-------------------------------------------------------------------------------------

    public function UpdateInfoClient($id)
    {
        $this->id = $id;        
        $objetretornClientsUpdate = $this->SearchAllClientUpdate();
        require  '../view/updateClient.php';

    }

    public function DeleteInfoClient($id)
    {
        $this->id = $id;
        $this->DeleteClient();
        header("location: ./../view/admin.php");

        
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

    public function ListClientView()
    {
        $objetretornClient = $this->SearchAllClients();
        require  '../view/viewCliente.php';
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

if(isset($_GET['action']) && $_GET['action']=='view')
{
    $instanciaClientes = new CientesController();
    $instanciaClientes->ListClientView();
}

if(isset($_GET['action']) && $_GET['action']=='delete')
{
    $instanciaClientes = new CientesController();
    $instanciaClientes->DeleteInfoClient($_GET['id']);
    
}

if(isset($_GET['action']) && $_GET['action']=='update')
{
    $instanciaClientes = new CientesController();
    $instanciaClientes->UpdateInfoClient($_GET['id']);
    
}


if(isset($_POST['action']) && $_POST['action']=='update')
{
    $instanciaClientes = new CientesController();
    
    $instanciaClientes->SaveInforModelUpdateFinal(
        $_POST['id'],
        $_POST['dni'],
        $_POST['nombres'],
        $_POST['apellidos'],
        $_POST['email'],
        $_POST['celular'],
        $_POST['ciudad'],
        $_POST['direccion']);        


}


?>