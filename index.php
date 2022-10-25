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
    <?php session_start();?>
</head>
<body>
    <h1>Ejercicios PHP</h1>
    <a href="ejercicios.php">Para ir a ejercicios de arrays</a>
    <?php if (!isset($_SESSION['contador'])){
        echo "Bienvenido por primera vez";
        $_SESSION['contador']=1;
    }else{
        $_SESSION['contador']++;
        echo "Nos has visitado " . $_SESSION['contador'] . " veces.";}?>
    <div class="formularionombre">
    <img src=img/skeleton-dancing.gif>
    <form action="index.php" method="post"> 
        <label for="name"> Nombre:
            <input type="text" name="name" required> </label> <br>
        <label for="surname"> Apellidos:
            <input type="text" name="surname" required> </label> <br>
        <label for="genero"> Género: <br>
            <label> Masculino:
            <input type="radio" value="Masculino" name="genero" required> </label> <br>
            <label> Femenino:
            <input type="radio" value="femenino" name="genero" required> </label> <br>
            <label> Otro:
            <input type="radio" id="otro" name="genero" required>
            <input type="text" id="otrotext" name="generotext"> </label> <br>
        </label>
        <label for="nacimiento"> Nacimiento:
            <input type="date" name="nacimiento" required> </label> <br>
        <label for="ciudad"> Ciudad: 
            <select id="ciudad" name="ciudad" required>
                <option value="" selected disabled style="display:none;">Elija </option>
                <option value="Palencia" >Palencia</option>
                <option value="Alguna peor" >Alguna peor</option>
                <option value="Madrid (aun peor)" >Madrid (aun peor) </option>
            </select>
        </label><br>
        <input type="submit" value="Enviar">
    </form>
    <p>feliz halloween gente</p>
    </div>
    <div class="resultados">
        <p> El nombre es <?php echo $_POST["name"]. " " . $_POST["surname"];?>
        <p> Su género es <?php if($_POST["genero"]=="Otro"){
            echo $_POST["otrotexto"];}
            echo $_POST["genero"];?>
        <p> Nació el día <?php echo $_POST["nacimiento"]; ?>
        <p> Vive en <?php echo $_POST["ciudad"]; ?>
    </div>
</body>
</html>