<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <div class="resultados">
                <p> El nombre es <?php echo $_POST["name"]. " " . $_POST["surname"];?>
                <p> Su género es <?php if($_POST["genero"]=="Otro"){
                    echo $_POST["otrotexto"];}?>
                <p> Nació el día <?php echo $_POST["nacimiento"]; ?>
                <p> Vive en <?php echo $_POST["ciudad"]; ?>
            </div>
                    <p> Hay que acabar esta parte
</body>
</html>