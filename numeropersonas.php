<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $mysqli = new mysqli("localhost", "root", "", "mysqlasir");
        if ($mysqli->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        Else {
        // Ejecución de la consulta  
        $resultado = $mysqli->query('SELECT * FROM Persona'); 
        if ($resultado == FALSE) {  
            echo "Error en la ejecución de la consulta.<br />"; 
        }     
        else {  
            // Examinar el número de registros 
            echo 'Número de personas: '.$resultado->num_rows .'<br />'; 
        }  
            
        $mysqli->close(); 
        echo 'Desconexión realizada.<br /';  
        }  
  
?>  
</body>
</html>