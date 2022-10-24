<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css?<?php echo time(); ?>" />
    <!-- para que no haga cache del css -->
    <title>Formularios PHP</title>
</head>
<body>
    <h1> Página de formularios </h1>
    <div class="formemail">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="username"> Nombre de Usuario: </label> 
        <input type="text" name="username"><br>
        <label for="password"> Contraseña: </label>
        <input type="password" name="password"><br>
        <label for="email"> E-mail: </label>
        <input type="text" name="email"><br>
        <input type="submit">
    </form>
    </div>
</body>
</html>