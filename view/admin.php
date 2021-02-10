<?php


require_once '../controller/staterController.php';
$redirect = new StaterController();
require_once 'header.php';

if(empty($_SESSION['username'])){

    $redirect->redireccionar();    
    

}
//

?>
<br>
<div class="container-fluid">

<h1>BIENVENIDO !!... @RsCodeSec</h1>

</div>


