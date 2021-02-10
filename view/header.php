<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" />


    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    

  </head>
  <body>
  <?php if(isset($_SESSION['rol']) && $_SESSION['rol']=="1"){?>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">DesignX</label>
      
      
      <ul>
      
        <li><a class="active" href="../view/admin.php">INICIO</a></li>
        
        <li><a href="../controller/clienteController.php?action=view">🔍Ver Clientes</a></li>
        <li><a href="../controller/clienteController.php?action=insert">📔Añadir Cliente</a></li>
        <li><a href="../controller/userControllers.php?action=logout">Cerrar Sesion</a></li>               
        
            
        <li><img src="cat.jpg" width="40" height="40"></li>
        
           
            
      
        
      </ul>
      
    </div>

    </nav>

    <?php }?>
   
   
    
    </body>
</html>