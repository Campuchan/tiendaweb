<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL</title>
</head>
<body>
<?php
$mysqli = new mysqli("localhost", "root", "", "mysqlasir");
if ($mysqli->connect_errno) {
echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
else{
echo $mysqli->host_info . "<br>";
}
$mysqli->close();
echo "Cerrada la conexión";
?>
</body>
</html>