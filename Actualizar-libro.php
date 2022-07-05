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
                       <!-- Se hace referencia al archivo Actualizar.php Y a la variable ID 
						    Para poder identificar cada libro por separado  -->
							<td><a href="<?php echo "Actualizar.php?id=" . $Libro->id?>"> 
							<!-- Imagen Botón de actualizar -->
							<center> <?xml version="1.0" ?><svg height="16px" version="1.1" viewBox="0 0 16 16" width="30px" xmlns="http://www.w3.org/2000/svg" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns:xlink="http://www.w3.org/1999/xlink"><title/><defs/><g fill="none" fill-rule="evenodd" id="Icons with numbers" stroke="none" stroke-width="1"><g fill="#000000" id="Group" transform="translate(-288.000000, -144.000000)"><path d="M296,158 C298.973001,158 301.440972,155.837706 301.917042,153 L303.938106,153 C303.446016,156.946304 300.079623,160 296,160 C293.310983,160 290.931833,158.673299 289.481412,156.63876 L288,158 L288,153 L288.061894,153 L290.082958,153 L293.441406,153 L290.969469,155.271414 C292.039897,156.914078 293.893133,158 296,158 Z M301.917042,151 L301,151 L299,151 L301.123754,148.876298 C300.069891,147.151341 298.169401,146 296,146 C293.026999,146 290.559028,148.162294 290.082958,151 L288.061894,151 C288.553984,147.053696 291.920377,144 296,144 C298.719979,144 301.122913,145.357428 302.568307,147.43178 L304,146.000122 L304,151 L303.938106,151 Z M301.917042,151" id="Oval 191 copy 2"/></g></g></svg> </td> </a> </center>
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
