<?php

//recopy para redireccionar

require_once 'staterController.php';
$redirect = new StaterController();

if(empty($_SESSION['username'])){

    $redirect->redireccionar();    
    

}
//termina aqui redeirect

?>