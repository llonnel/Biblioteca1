<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title></title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/Master.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="wrapper">
         <input type="checkbox" id="btn" hidden>
         <label for="btn" class="menu-btn">
         <i class="fas fa-bars"></i>
         <i class="fas fa-times"></i>
         </label>
         <nav id="sidebar">
            <div class="title">
               Menu
            </div>
            <ul class="list-items">
                <h3 class="SUB" >Libros</h3>
               <li><a href="Menu-Principal.php"><i class="fas fa-home"></i>Inicio</a></li>
               <li><a href="Agregar-libro.php"><i class="fa fa-plus"></i>Agregar libro</a></li>
               <li><a href="Eliminar-libro.php"><i class="fa fa-trash"></i>Eliminar libro</a></li>
               <li><a href="Actualizar-libro.php"><i class="fa fa-pen"></i>Actualizar libro</a></li>
               <h3 class="SUB">Prestamos</h3>
               <li><a href="Prestamo-libro.php"><i class="fas fa-stream"></i>Gestion Prestamo</a></li>
               <li><a href="Devolucion-libro.php"><i class="fa fa-calendar"></i>Gestion devolucion</a></li>
               <h3 class="SUB">Reportes</h3>
               <li><a href="Control-prestamo.php"><i class="fa fa-chart-bar"></i>Control de prestamos de libros</a></li>
               <li><a href="Inventario.php"><i class="fa fa-database"></i>Inventario</a></li>

               <li><a href="Login.php"><i class="fa fa-power-off"></i>Salir</a></li>
               </div>
            </ul>
         </nav>
      </div>
     
   </body>
</html>




    <div class="contenido">
        <?php
           contenedor();
        
        ?>
    </div>
    </div>
    </div>
  
    
    </body>
</html> 