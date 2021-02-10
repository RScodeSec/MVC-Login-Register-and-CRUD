<?php
require_once '../controller/staterController.php';
$redirect = new StaterController();
require_once 'header.php';

if(empty($_SESSION['username'])){

    $redirect->redireccionar();
}
?>
<?php foreach($objetretornClientsUpdate as $cliente) {}



?>

    

 <br>

 <form  action="../controller/clienteController.php" method="POST" enctype="multipart/form-data" class="ui form">
  <h4 class="ui dividing header">Actualizar Datos del  Cliente</h4>
  <div class="field">
  <input type="hidden" name="action" value="update">
        <label>Datos Personales del Cliente</label>
        <input type="hidden" name="id" value="<?php echo $cliente->id; ?>">

        <div class="four fields">
            
            <div class="field">
                <input type="text" name="dni" value="<?php echo $cliente->dni; ?>">
            </div>
            
            <div class="field">
                <input type="text" name="nombres" value="<?php echo $cliente->nombres; ?>">
            </div>
            
            <div class="field">
                <input type="text" name="apellidos" value="<?php echo $cliente->apellidos; ?>">
            </div>
            <div class="field">
                <input type="text" name="email" value="<?php echo $cliente->email; ?>">
            </div>
        </div>
  </div>

  <div class="field">
    <label>Informacion Requerido Adiccional</label>
    <div class="fields">
      <div class="four wide field">
        <input type="text" name="celular" value="<?php echo $cliente->celular; ?>">
      </div>
      <div class="six wide field">
        <input type="text" name="ciudad" value="<?php echo $cliente->ciudad; ?>">
      </div>
      <div class="six wide field">
        <input type="text" name="direccion" value="<?php echo $cliente->direccion; ?>">
      </div>
    </div>
  </div>
  
   <br>
   <div class="five field">
       <div class="field"></div>
       <div class="field"></div>
       <div class="field">
       <button class="ui primary  button">ACTUALIZAR</button>
       </div>
       <div class="field"></div>
       <div class="field"></div>

   </div>
</form>
