<?php
require_once '../controller/staterController.php';
$redirect = new StaterController();
require_once 'header.php';

if(empty($_SESSION['username'])){

    $redirect->redireccionar();
}
?>

    

 <br>

 <form  action="../controller/clienteController.php" method="POST" enctype="multipart/form-data" class="ui form">
  <h4 class="ui dividing header">Dar de Alta Nuevo Cliente</h4>
  <div class="field">
  <input type="hidden" name="action" value="insert">
        <label>Datos Personales del Cliente</label>

        <div class="four fields">
            
            <div class="field">
                <input type="text" name="dni" placeholder="Ingrese numero de 8 digitos">
            </div>
            
            <div class="field">
                <input type="text" name="nombres" placeholder="Ingresa Nombre Completo">
            </div>
            
            <div class="field">
                <input type="text" name="apellidos" placeholder="Ingresa Apellido Completo">
            </div>
            <div class="field">
                <input type="text" name="email" placeholder="Ingresa Email">
            </div>
        </div>
  </div>

  <div class="field">
    <label>Informacion Requerido Adiccional</label>
    <div class="fields">
      <div class="four wide field">
        <input type="text" name="celular" placeholder="Ingrese numero de 9 digitos">
      </div>
      <div class="six wide field">
        <input type="text" name="ciudad" placeholder="Ingresa ciudad de residencia">
      </div>
      <div class="six wide field">
        <input type="text" name="direccion" placeholder="Ingresa direccion de residencia">
      </div>
    </div>
  </div>
  
   <br>
   <div class="five field">
       <div class="field"></div>
       <div class="field"></div>
       <div class="field">
       <button class="ui primary  button">GUARDAR</button>
       </div>
       <div class="field"></div>
       <div class="field"></div>

   </div>
</form>

