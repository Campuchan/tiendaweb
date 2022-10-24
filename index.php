<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola</title>
    <link rel="icon" href="icono.ico">
    <link rel="stylesheet" type="text/css" href="style.css?<?php echo time(); ?>" />
    <!-- echo time() es para que no haga cache del css -->
</head>
<body>
    <h1>Ejercicios PHP</h1>
    <a href="ejercicios.php">Para ir a ejercicios de arrays</a>
    <h2>Hola <?php 
    if (isset($_POST["name"]) && isset($_POST["surname"])){
    echo $_POST["name"]. " " . $_POST["surname"];} ?></h1>
    <h3> ¿Cómo te llamas? </h3>
    <div class="formularionombre">
    <form action="index.php" method="post"> 
        <label for="name"> Nombre:
            <input type="text" name="name"> </label> <br>
        <label for="surname"> Apellidos:
            <input type="text" name="surname"> </label> <br>
        <label for="genero"> Género: <br>
            <label> Masculino:
            <input type="radio" value="Masculino" name="genero"> </label> <br>
            <label> Femenino:
            <input type="radio" value="femenino" name="genero"> </label> <br>
            <label> Otro:
            <input type="radio" id="otro" name="genero">
            <input type="text" id="otrotext" name="genero"> </label> <br>
        </label>
        <label for="ciudad"> Ciudad: 
            <select id="ciudad" name="ciudad">
                <option value="ninguna"> </option>
                <option value="Palencia">Palencia</option>
                <option value="Alguna peor">Alguna peor</option>
                <option value="Madrid (aun peor)">Madrid (aun peor) </option>
        </label>
        <label for="nacimiento"> Nacimiento:
            <input type="date" name="nacimiento"> </label> <br>
        <input type="submit" value="Enviar">
    </form>
    <img src="img\skeleton-dancing.gif">
    <p>feliz halloween gente</p>
    </div>
    <div class="resultados">
        <p> El nombre es <?php echo $_POST["name"]. " " . $_POST["surname"];?>
        <p> Su género es <?php if($_POST["genero"]=="Otro"){
            echo $_POST["otrotexto"];}
            echo $_POST["genero"];?>
    </div>
</body>
</html>