<?php
require_once '../controller/staterController.php';
$redirect = new StaterController();
require_once 'header.php';

if(empty($_SESSION['username'])){

    $redirect->redireccionar();
}
?>
<h2 class="center"> BIENBENIDO AL AREA DE EDICION DE CLIENTES</h2>



<div class="row">
  <div class="ui celled table">
    <div class="panel panel-default">
      
     <div class="panel-body">
      <table class="ui table ">
        <thead>
          <tr>

            <th class="text-center" style="width: 50px;">ID</th>
            
            <th>DNI </th>
            <th>Nombres </th>
            <th>Apellidos</th>
            <th>Celular </th>
            <th>Email</th>
            <th>Ciudad </th>
            <th>Direccion</th>            
            <th class="text-center" style="width: 100px;">Acción</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($objetretornClient as $user) {?>
          <tr>
           
           <td><?php echo $user->id?></td>
           <td><?php echo $user->dni?></td>
           <td><?php echo $user->nombres?></td>
           <td><?php echo $user->apellidos?></td>
           <td><?php echo $user->email?></td>
           <td><?php echo $user->celular?></td>
           <td><?php echo $user->ciudad?></td>
           <td><?php echo $user->direccion?></td>
           
           <!-- aqui va toda la info-->           
           <td class="text-center">
             <div class="btn-group">
                <a href="../controller/clienteController.php?action=update&id=<?php echo $user->id;?>" class="btn btn-xs btn-warning" data-toggle="tooltip" title="Editar">
                  <i class="edit icon"></i>
               </a>
                <a href="../controller/clienteController.php?action=delete&id=<?php echo $user->id;?>" class="btn btn-xs btn-danger" data-toggle="tooltip" title="Eliminar">
                  <i class="cut icon"></i>
                </a>
                </div>
           </td>
          </tr>
        <?php }?>
       </tbody>
     </table>
     </div>
    </div>
  </div>
</div>

