<?php
// Se recoge la variable ID del método GET
$id = $_GET["id"];

/*Abre la Conexión a la base de datos usando el código del archivo conexion.php */ 
include_once "conexion.php";

// Se usa una consulta con un DELETE y recoge el ID 
//del método GET como referencia para eliminar un libro
$sentencia = $base_de_datos->prepare("DELETE FROM Libro2 WHERE id = ?;");
$resultado = $sentencia->execute([$id]);

//Redirecciona de nuevo a la pantalla Eliminar libro
    header("Location: Eliminar-libro.php");
?>