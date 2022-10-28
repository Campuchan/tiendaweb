<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL</title>
    <link rel="icon" href="img/icono.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

    <h3> Bonjourn </h3>
    <a href="numeropersonas.php">Comprobar numero de personas </a>
    <form method="post" action="mysqlscript.php">
        <label for="name"> Nombre: 
        <input type="text" name="nombre"> </label> <br>
        <label for="name"> Apellidos: 
        <input type="text" name="apellido"> </label> <br>
        <label for="name"> Edad (años): 
        <input type="text" name="edad"> </label> <br>
        <input type="submit" value="Enviar">
        </form>

<?php

?>
</body>
</html>