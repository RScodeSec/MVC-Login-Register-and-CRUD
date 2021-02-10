<?php


require_once '../controller/staterController.php';
$redirect = new StaterController();
require_once 'header.php';

if(empty($_SESSION['username'])){

    $redirect->redireccionar();    
    

}
//

?>

<h1><?php echo $_SESSION['username']; ?></h1>
<h1><?php echo $_SESSION['nombres']; ?></h1>
<h1><?php echo $_SESSION['rol']; ?></h1>
<h1>haaaaaaaaaaaaaaaaaaaaaa</h1>


