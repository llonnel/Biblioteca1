<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Css/Agregar.css" rel="stylesheet">
	<title>Document</title>
</head>
<body>
<?php
// Se recoge la variable ID del método GET
$id = $_GET["id"];

// Se abre la conexion a la base de datos 
include_once "conexion.php";

// Con esta consulta le decimos que busque el libro por el ID que fue recogido 
// por el método GET y así llenara los TextBox con los datos del libro elegido con el ID 
$sentencia = $base_de_datos->prepare("Select id, nombre, autor, año, categoria, editorial FROM Libro2 WHERE id = ?;");
$sentencia->execute([$id]);
$Libro = $sentencia->fetchObject();
if (!$Libro) {
}
?>

		<form action="Guardar-Datos-Actualizados.php" method="POST">
            <!-- Se imprime el ID en un input de tipo hideen para que no se visible para el usuario ya que 
			será un dato que no se modificara (El ID es necesario para poder guardar los datos actualizados)-->
			<input type="hidden" name="id" value="<?php echo $Libro->id; ?>">


				<p>Nombre</p>
			<!--Se llena el TextBox con el dato recogido de la base de datos -->
				<input value="<?php echo $Libro->nombre; ?>" required name="nombre" type="text" id="nombre"  class="field">
		    </div>
			

				<p>Autor</p>
				<!--Se llena el TextBox con el dato recogido de la base de datos -->
				<input value="<?php echo $Libro->autor; ?>" required name="autor" type="text" id="autor"  class="field">
			</div>
  

				<p>Año</p>
        		<!--Se llena el TextBox con el dato recogido de la base de datos -->
				<input value="<?php echo $Libro->año; ?>" required name="año" type="number" id="año"  class="field">
			</div>

	
				<p>Categoria</p>
				<!--Se llena el TextBox con el dato recogido de la base de datos -->
				<input value="<?php echo $Libro->categoria; ?>" required name="categoria" type="text" id="categoria"  class="field">
			</div>


				<p>Editorial</p>
				<!--Se llena el TextBox con el dato recogido de la base de datos -->
				<input value="<?php echo $Libro->editorial; ?>" required name="editorial" type="text" id="editorial"  class="field">
			</div>
<br>
<br>

			<center>
			<button type="submit" class="btn btn-green">Guardar</button>
			<button onclick="location.href='Actualizar-libro.php'" class="btn btn-green">Cancelar</button>
</center>
			
		</form>
	</div>
</div>

</body>
</html>
