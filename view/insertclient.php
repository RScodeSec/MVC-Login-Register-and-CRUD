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
                <input type="text" name="dni" placeholder="Ingrese numero DNI de 8 digitos" pattern="[0-9]{8}" title="debe conter numeros" required>
            </div>
            
            <div class="field">
                <input type="text" name="nombres" placeholder="Ingresa Nombre Completo"  pattern="[a-zA-Z ]{2,254}" title="debe conter solo letras eg. juan" required>
            </div>
            
            <div class="field">
                <input type="text" name="apellidos" placeholder="Ingresa Apellido Completo" pattern="[a-zA-Z ]{2,254}" title="debe conter solo letras eg. juanes" required>
            </div>
            <div class="field">
                <input type="text" name="email" placeholder="Ingresa Email" placeholder=" Ingrese su Nombre de Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="e.g. aso@gmail.com" required>
            </div>
        </div>
  </div>

  <div class="field">
    <label>Informacion Requerido Adiccional</label>
    <div class="fields">
      <div class="four wide field">
        <input type="text" name="celular" placeholder="Ingrese numero de 9 digitos" pattern="[0-9]{9}" title="debe conter numeros" required>
      </div>
      <div class="six wide field">
        <input type="text" name="ciudad" placeholder="Ingresa ciudad de residencia" pattern="[a-zA-Z0-9 ]{2,254}" title=" e.g. Lima" required>
      </div>
      <div class="six wide field">
        <input type="text" name="direccion" placeholder="Ingresa direccion de residencia" pattern="[a-zA-Z0-9 ]{2,254}" title=" e.g. Av. Lima" required>
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

