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
	

<div class="row">
		<form action="Agregar.php" method="POST">
		
				<p>Nombre: </p>
				<input required name="nombre" type="text" id="nombre"  class="field">
		    	<br><br>

			
				<p>Autor:</p>
				<input required name="autor" type="text" id="autor" class="field">
				<br><br>

		
				<p>Año</p>
				<input required name="año" type="number" id="año" class="field">
				<br><br>

			
				<p>Categoria</p>
				<input required name="categoria" type="text" id="categotia" class="field">
				<br><br>

	
				<p>Editorial</p>
				<input required name="editorial" type="text" id="editorial" class="field">
				<br><br>

				

			<center>
			<button type="submit" class="btn btn-green">Guardar</button>
			<button onclick="location.href='Menu-Principal.php'" class="btn btn-green">Cancelar</button>
			</center>
		</form>
	</div>
</div>


</body>
</html>









