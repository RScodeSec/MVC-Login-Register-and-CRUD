<?php

class StaterController{
    public function __construct()
    {
        session_start();
        
    }

    public function redireccionar()
    {
        //modify login
        //:usuarioController.php?='login'
        header("location: ./../index.php");
        
    }





}

?>