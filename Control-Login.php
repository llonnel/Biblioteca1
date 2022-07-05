<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Css/Tabla.css" rel="stylesheet">
    <title></title>

    <h1 class="ERROR" >ERROR</h1>

</head>
<body>  
<?php

// Se le llama al archivo Conexion-Login.php
require_once 'Conexion-Login.php';

// Se instancia el objeto model a partir de la clase del archivo Conexion-Login.php
$model = new Model();


// Le damos los valores traídos del form a los atributos de la clase model
// Se está utilizando el método POST para recoger valores
$model->usuario=$_POST['txtUsuario'];
$model->clave=$_POST['txtClave'];

// Se le llama al método creado en la clase
$filaController=$model->Logear();

// Si el resultado del select es que existe una fila  
if($filaController>0){
    // Si se encuentran coincidencias en los datos
    header("Location:Menu-Principal.php");
}

// Si no encuentra nada se queda en este archivo e imprime un mensaje de ERROR

?>

</body>
</html>