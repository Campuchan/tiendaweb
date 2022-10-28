<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQLScript</title>
    <link rel="icon" href="img/icono.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<?php
$mysqli = new mysqli("localhost", "root", "", "mysqlasir");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
else{
	echo $mysqli->host_info . "<br> <p> se conecto a la base de datos.";
}

//insertandovalores
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$id_persona=rand(10,9999999999)

$query = "INSERT INTO Persona (id_persona, Nombre, Apellidos, Edad)
             VALUES (20,$nombre,$apellido,$edad)"; 
$stmt = $mysqli->prepare($query);
$stmt->bind_param("iss", $edad, $nombre, $apellido, );
$stmt->execute();


$mysqli->query("INSERT INTO Persona (id_persona, Nombre, Apellidos, Edad)
                             VALUES (20,$nombre,$apellido,$edad)");  
  
echo $nombre . " ha sido dado de alta <br> ";


$mysqli->close();
echo "Cerrada la conexión";
?>
</body>
</html>