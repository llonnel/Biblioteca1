<?php
/*Este archivo se encarga de conectar a la base de datos
y traer un objeto PDO*/


/*Contraseña de SQL*/
$contraseña = "123";

/*Usuario de SQL*/ 
$usuario = "Bibl";

/*Nombre de la base de datos*/
$nombreBaseDeDatos = "Biblioteca";

/*Nombre del servidor de la base de datos*/
$rutaServidor = "DESKTOP-E6FOGBF\SQLEXPRESS";


$base_de_datos = new PDO("sqlsrv:server=$rutaServidor;database=$nombreBaseDeDatos", $usuario, $contraseña);
