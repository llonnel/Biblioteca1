
<?php

include("master.php");

function contenedor(){
  ?><br>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="Css/Tabla.css" rel="stylesheet">
</head>
<body>
	
<?php

?>
<?php

// Se abre la conexión de la base de datos
include_once "conexion.php";

/*Lista todos los datos de la tabla
Se coloca la consulta de SQL que sirve para listar datos de una tabla*/
$sentencia = $base_de_datos->query("select id, nombre, autor, año, categoria, editorial from Libro2");
$Libro2 = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<center> 
<div id="main-container">
	<table>
				<thead>
				 <!-- 
					Nombre de las columnas de la tabla de los libros 
                    -->
				     <tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Autor</th>
						<th>Año</th>
						<th>Categoria</th>
						<th>Editorial</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				
					<?php foreach($Libro2 as $Libro){ ?>
						<tr>

				<!-- Se llena la tabla con la variable Libro la cual fue igualada a la 
					 variable sentencia la cual recoge los datos de la consulta -->
							<td><?php echo $Libro->id ?></td>
							<td><?php echo $Libro->nombre ?></td>
							<td><?php echo $Libro->autor ?></td>
							<td><?php echo $Libro->año ?></td>
							<td><?php echo $Libro->categoria ?></td>
							<td><?php echo $Libro->editorial ?></td>

                   <!-- Se hace referencia al archivo Eliminar.php Y a la variable ID 
						    Para poder identificar cada libro por separado  -->
							<td><a href="<?php echo "Eliminar.php?id=" . $Libro->id?>">
							
							<!-- Imagen Botón de Eliminar -->
							<?xml version="1.0" ?><svg height="30" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg"><path d="M12 38c0 2.21 1.79 4 4 4h16c2.21 0 4-1.79 4-4V14H12v24zM38 8h-7l-2-2H19l-2 2h-7v4h28V8z"/><path d="M0 0h48v48H0z" fill="none"/></svg></a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>







<?php

};


?>


</body>
</html>
