
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
$sentencia = $base_de_datos->query("select id, nombre, autor, año, categoria, editorial, Estado from Libro2");
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
						<th>Estado</th>
                        
					</tr>
				</thead>
				<tbody>
	                 <!-- Se llena la tabla con la variable Libro la cual fue igualada a la 
					 variable sentencia la cual recoge los datos de la consulta -->
					<?php foreach($Libro2 as $Libro){ ?>
						<tr>
							<td><?php echo $Libro->id ?></td>
							<td><?php echo $Libro->nombre ?></td>
							<td><?php echo $Libro->autor ?></td>
							<td><?php echo $Libro->año ?></td>
							<td><?php echo $Libro->categoria ?></td>
							<td><?php echo $Libro->editorial ?></td>
                            <td class="Estado" ><?php echo $Libro->Estado ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div><
</div>
<?php
};
?>
</body>
</html>





 