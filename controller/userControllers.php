<?php

require_once dirname(dirname(__FILE__)) .'\model\userModel.php';
require_once 'staterController.php';
$sesion = new StaterController();

class UsuarioController extends Usuario{

    public function index(){            
        
        require_once 'view/user/login.php';
    }


    // clse session here

    public function CloseSession()
    {
        session_destroy();
        header("location: ./../index.php");
    }




    public function SaveInfoModel($nombres,$username, $password, $email)
    {
        $redi = new StaterController();

        $this->nombres = $nombres;
        $this->username = $username;
        $this->passwords = $password;        
        $this->email = $email;
        $this->InsertUsuario();
        //aquiiiii redirecccionar
        $redi->redireccionar();

    }

    public function VerifyLogin($username, $password)
    {
        $this->username = $username;
        $this->passwords = $password;
        $infoUsuario = $this->SearchUsuario();
        
        foreach($infoUsuario as $usuario){}
        if(password_verify($password,$usuario->passwords)){

            $_SESSION['username'] = $usuario->username;
            $_SESSION['nombres'] = $usuario->nombres;
            $_SESSION['rol'] = $usuario->rol;
            //aqui session foto
            header("location: ./../view/admin.php");
            
        }
        else
        {
            header("location: ./../index.php");
            echo "<p>Esta es mi quinta frase hecha con Php!</p>";

        }
        
        
    }

}

if(isset($_POST['action']) && $_POST['action']=='insert'){
    $instanciaController = new UsuarioController();
    $password = password_hash($_POST['pass'], PASSWORD_BCRYPT);
    $instanciaController->SaveInfoModel(
        $_POST['nombres'],
        $_POST['user'],
        $password,        
        $_POST['email']

    );
}

if(isset($_POST['action']) && $_POST['action']=='login')
{
    $instanciaController = new UsuarioController();
    $instanciaController->VerifyLogin($_POST['user'],$_POST['pass']);

}

if(isset($_GET['action']) && $_GET['action']=='logout')
{
    $instanciaController = new UsuarioController();
    $instanciaController->CloseSession();

}



?>