<?php
// Se abre la conexión de la base de datos
include_once "conexion.php";

// Los datos recogidos de los TextBox se igual a una variable 
// Los cuales serán modificados para hacer la actualización de un libro
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$autor = $_POST["autor"];
$año = $_POST["año"];
$categoria = $_POST["categoria"];
$editorial = $_POST["editorial"];


// Se usará una consulta con un update usando como referencia el ID de cada libro
$sentencia = $base_de_datos->prepare("UPDATE Libro2 SET nombre = ?, autor = ?, año = ?, categoria =?, editorial =? WHERE id = ?;");

// Cada ? es cambiado por la variable igualada al método POST del formulario 
// las variables se pasan en el mismo orden
$resultado = $sentencia->execute([$nombre, $autor, $año, $categoria, $editorial, $id]); 

//Redirecciona de nuevo a la pantalla Actualizar libro
    header("Location: Actualizar-libro.php");

