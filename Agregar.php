<?php
/*Abre la Conexion a la base de datos usando el codigo del archivo conexion.php */ 
include_once "Conexion.php";

/*Recoge los datos de los TextBox del archivo Agregar-Libro.php y los iguala a una variable*/
$nombre = $_POST["nombre"];
$autor = $_POST["autor"];
$año = $_POST["año"];
$categoria = $_POST["categoria"];
$editorial = $_POST["editorial"];


// Se usa la consulta INSERT INTO para poder insertar datos a la tabla libros 
// El signo de interrogación es el dato que se agregara

$sentencia = $base_de_datos->prepare("INSERT INTO Libro2(Nombre, Autor, Año, Categoria, Editorial, Estado) VALUES (?, ?, ?, ?, ?, 'Disponible');");

// Cada ? es cambiado por la variable igualada al método POST del formulario 
// las variables se pasan en el mismo orden
$resultado = $sentencia->execute([$nombre, $autor, $año, $categoria, $editorial]); 

//Redirecciona de nuevo a la pantalla Agregar libro
	header("Location: Agregar-libro.php");
