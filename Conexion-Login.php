<?php

class Model 
{
    // Propiedades de la clase (son los valores de los campos)
    var $id;
    var $usuario;
    var $clave;
    // Se declara un constructor
    function __construct(){
    }
    function Logear(){
        // Cadena de conexión a la base de datos 
        // Nombre del servidor
        $cadenaCnx="sqlsrv:Server=DESKTOP-E6FOGBF\SQLEXPRESS;Database=Biblioteca";
          // Usuario
        $user="Bibl";
          // Contraseña
        $pass="123";

        // Se instancia el objeto cnx de la classe PDO se ingresan como parámetros las variables de conexion
        $cnx= new PDO($cadenaCnx , $user, $pass); 

        try{
            // Prepare es una sentencia SQL para ser ejecutada por el método PDOStatement::execute()
            // La sentencia SQL puede contener cero o más marcadores de parámetros con nombre (:name) 
            $consulta=$cnx->prepare("Select * from usuarios Where usuarios=:parametro1 AND 
            contraseña=(Select dbo.funcion_encriptar(:parametro2))");

            // Le damos valores a los parámetros usando el método bindValue 
            // los valores se recogen de las propiedades de la clase
            $consulta->bindValue(":parametro1",$this->usuario);
            $consulta->bindValue(":parametro2",$this->clave);

            //Se ejecuta la consulta
            $consulta->execute();

            // Se recoge es una fila
            $filaModel=$consulta->fetch();

           // Se retorna la fila
            return $filaModel;

            // Representa un error generado por PDO
        }  catch(PDOException)  {

        }
    }
}
?>