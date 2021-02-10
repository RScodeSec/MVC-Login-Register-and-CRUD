<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="semantic/dist/semantic.min.js"></script>

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
      
        <li><a class="active" href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Crud</a></li>
        <li><a href="../controller/userControllers.php?action=logout">Cerrar Sesion</a></li>               
        
            
        <li><img src="cat.jpg" width="40" height="40"></li>
        
           
            
      
        
      </ul>
      
    </div>

    </nav>

    <?php }?>
   
   
    
    </body>
</html>