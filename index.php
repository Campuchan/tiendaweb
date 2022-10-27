<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola</title>
    <link rel="icon" href="icono.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <?php session_start();?>
</head>
<body style="height:100vh">
    <main>
        <header class="p-3 text-bg-dark">
            <div class="container">
              <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                  <li><a href="index.php" class="nav-link px-2 text-secondary">Principal</a></li>
                  <li><a href="arrays.php" class="nav-link px-2 text-white">Arrays</a></li>
                  <li><a href="mysql.php" class="nav-link px-2 text-white">MySQL</a></li>
                </ul>
        
                <div class="text-end">
                    <?php if (!isset($_SESSION['contador'])){
                        echo "Bienvenido por primera vez";
                        $_SESSION['contador']=1;
                    }else{
                        $_SESSION['contador']++;
                        echo "Nos has visitado " . $_SESSION['contador'] . " veces.";}?>
                </div>
              </div>
            </div>
          </header>
        </div>
            <div class="modal position-static d-block bg-secondary py-5">
                <div class="modal-dialog">
                    <div class="modal-content rounded-4 shadow">
                        <img src=img/skeleton-dancing.gif style="border-radius: var(--bs-border-radius-xl) var(--bs-border-radius-xl) 0 0 !important;">
                        <div class="modal-header p-5 pb-4 border-bottom-0">
                            <h2 class="fw-bold mb-0 fs-2">Crear tremenda carta de halloween</h2>
                          </div>
                        <div class="modal-body p-5 pt-0">
                            <form action="resultado.php" method="post">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control rounded-3" id="name" placeholder="Spooky" name="name" required>
                                    <label for="name">Nombre</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control rounded-3" id="surname" placeholder="Scary Skeleton" name="surname" required>
                                    <label for="surname">Apellidos</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genero" value="Masculino" required>
                                    <label class="form-check-label" for="Masculino">
                                        Masculino
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genero" value="Femenino">
                                    <label class="form-check-label" for="Femenino">
                                        Femenino
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genero" id="Otro" value="Otro">
                                    <label class="form-check-label" for="Otro">
                                        Otro
                                    </label>
                                    <input type="text" class="form-control rounded-3" style="width:60%" id="otrotext" name="otrotexto"> </label>
                                </div>
                                <div class="form-group">
                                    <label for="nacimiento"> Nacimiento <br>
                                    <input type="date" class="form-control rounded-3" name="nacimiento" required> </label>
                                </div>
                                    <div class="form-group">
                                        <label for="ciudad">Ciudad</label>
                                        <select class="form-control" id="ciudad" name="ciudad">
                                            <option value="" selected disabled style="display:none;">Elija </option>
                                            <option value="Palencia" >Palencia</option>
                                            <option value="Alguna peor" >Alguna peor</option>
                                            <option value="Madrid (aun peor)" >Madrid (aun peor) </option>
                                        </select>
                                    </div>
                                    <br>
                                </label>
                                <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Enviar</button>
                            </form>
                            <hr>
                            <p>feliz halloween gente</p>
                        </div>
                    </div> 
                </div>
            </div>
</main>
</body>
</html>