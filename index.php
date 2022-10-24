<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola</title>
</head>
<body>
    <h1>Hola <?php $name="" ;echo $_POST["name"] ?></h1>
    <h3> ¿Cómo te llamas? </h3>
    <form action="index.php" method="post"> 
        <label for="name"> Nombre: </label>
        <input type="text" name="name">
        <input type="submit">
    </form>
</body>
</html>