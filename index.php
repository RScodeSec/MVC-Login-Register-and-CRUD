<?php

require_once 'core/database.php';
require_once 'controller/userControllers.php';
$control = new UsuarioController();
$control->index();


?>