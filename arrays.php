<!DOCTYPE html>
<html lang="es">
<head>
    <title>PHP Campuzano</title>
    <link rel="stylesheet" type="text/css" href="style.css?<?php echo time(); ?>" />
    <!-- para que no haga cache del css -->
    <link rel="icon" href="img/icono.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <h1> Ejercicios PHP Pablo Campuzano </h1>
    <a href="../index.php">Ir a la página principal</a>
    <h2> Ejercicios Arrays 1 dimensión </h2>
    <?php
    echo "<h3> Ejercicio 1 </h3>";
    $numpar = array();
    for ($i=0; count($numpar) <= 5; $i++){
        if ($i % 2 == 0){
            array_push($numpar, $i);
        }
    };
    for ($i=0; $i < count($numpar); $i++){
        echo "Numero par: ", $numpar[$i], "<br>";
    } //reloco
    echo "<h3> Ejercicio 2 </h3>";
    $num20rand = array();
    for ($i=0; $i < 20; $i++){
        $numrand = rand(1, 100);
        array_push($num20rand, $numrand);
    };
    $nummay = 0;
    for ($o=0; $o < count($num20rand); $o++){
        if ($num20rand[$nummay] < $num20rand[$o]){
            $nummay = $o;
        }
    };
    echo "Los numeros del array son: (";
    for ($i=0; $i < count($num20rand); $i++){
        echo $num20rand[$i], ", ";
    };
    echo ") <br> El numero mas grande es ", $num20rand[$nummay] , " y se encuentra en la posicion ", $nummay+1;
    //MEGAreloco
    echo "<h3> Ejercicio 3 </h3>";
    $num5rand = array();
    for ($i=0; $i < 5; $i++){
        $numrand = rand(1, 10);
        array_push($num5rand, $numrand);
    };
    $num5ordenado = 1;
    for ($i=0; $i < count($num5rand)-1; $i++){
        $a = $i+1;
        if ($num5rand[$i] <= $numrand[$a]) {

        } else {
            $num5ordenado = 0;
        }
    }
    echo "Los numeros del array son (";
    for ($i=0; $i < count($num5rand); $i++){
        echo $num5rand[$i] . " , ";
    }
    if($num5ordenado == 1) {
        echo ") <br> esta ordenado";
    } else{
        echo ") <br> no esta ordenado";
    }
    echo "<h3> Ejercicio 4 </h3>";
    $num10rand = array();
    $num10comp = rand(1,100);
    for ($i=0; $i < 10; $i++){
        $numrand = rand(1, 100);
        array_push($num10rand, $numrand);
    };
    $num10igual = 0;
    for ($i=0; $i < count($num10rand)-1; $i++){
    }
    echo "El numero a comparar es: " . $num10comp;
    echo "<br> Los numeros del array son (";
    for ($i=0; $i < count($num10rand); $i++){
        echo $num10rand[$i] . ", ";
        if ($num10comp == $num10rand[$i]){
            $num10igual = 1;
        }
    }
    if($num10igual == 1){
        echo ") <br> El numero se encuentra en el array";
    } else {
        echo ") <br> El numero no se encuentra en el array";
    }
    echo "<h3> Ejercicio 5 </h3>";
    echo "Los numeros son los mismos que los del ejercicio anterior";
    for ($i=1; $i < count($num10rand); $i+=2){
        echo "<br> Numero en posicion par: " , $num10rand[$i];
    }
    echo "<h3> Ejercicio 6 </h3>";
    $numerosprimo = array();
    for($i=0;$i<9;$i++){
        $numrand = rand(1,100);
        $numerosprimo[$i] = $numrand;
    }

    echo "<h3> Ejercicio 7 </h3>";
    $num10rand1 = array();
    $num10rand2 = array();
    for($i=0;$i<9;$i++){
        $numrand = rand(1, 3);
        $num10rand1[$i]= $numrand;
        $numrand = rand(1, 3);
        array_push($num10rand2, $numrand);
    }
    $num10rand12igual=1;
    for($i=0;$i<count($num10rand1);$i++){
        if($num10rand1[$i] == $num10rand2[$i]){}
        else{$num10rand12igual = 0; $numdiff=$i;}
    }
    echo "La primera lista se compone de: <br> [";
    for($i=0;$i<count($num10rand1);$i++){
        echo $num10rand1[$i] . ", ";
    }
    echo "] <br>La segunda lista se compone de: <br> [";
    for($i=0;$i<count($num10rand2);$i++){
        echo $num10rand2[$i] . ", ";
    }
    if ($num10rand12igual == 1){
        echo "]<br>Los arrays son iguales.";
    }else{
        echo "]<br>Los arrays no son iguales."; 
    }
    echo "<h3> Ejercicio 8 </h3> <h4> Es una expansión del anterior </h4>";
    echo "La primera lista se compone de: <br> [";
    for($i=0;$i<count($num10rand1);$i++){
        echo $num10rand1[$i] . ", ";
    }
    echo "] <br>La segunda lista se compone de: <br> [";
    for($i=0;$i<count($num10rand2);$i++){
        echo $num10rand2[$i] . ", ";
    }
    if ($num10rand12igual == 1){
        echo "]<br>Los arrays son iguales.";
    }else{
        echo "]<br>Los arrays no son iguales, los primeros números diferentes están en la posicion " . $numdiff+1 . ", y son ". $num10rand1[$numdiff] . " y " . $num10rand2[$numdiff]; 
    }?>
    <h2>Ejercicios arrays 2 dimensiones</h2>
    <?php
    echo "<h3> Ejercicio 1 </h3>";
    $arraysuma = array();
    for($i=0;$i<9;$i++){
        $numrand = rand(1,100);
        $arraynum[$i][0] = $numrand;
        $numrand = rand(1,100);
        $arraynum[$i][1] = $numrand;
    }
    echo "Los valores del array son: <br> [";
    for($i=0;$i<9;$i++){
        echo $arraynum[$i][0] . ", ";
    }
    echo "]<br>[";
    for($i=0;$i<9;$i++){
        echo $arraynum[$i][1] . ", ";
    }
    echo "]";
    for($i=0;$i<9;$i++){
        $arraynum[$i][2] = $arraynum[$i][0] + $arraynum[$i][1];
    }
    echo "<br>Los resultados de la suma son: <br> [";
    for($i=0;$i<9;$i++){
        echo $arraynum[$i][2] . ", ";
    }
    echo "]";
    echo "<h3>Ejercicio 2 </h3>";
    $array5p5 = array(
        array(),
        array(),
    );
    for($i=0;$i<5;$i++){
        for($j=0;$j<5;$j++){
            if($i+$j==0 or $i+$j==2 or $i+$j==4 or $i+$j==6 or $i+$j==8){
                $array5p5[$i][$j] = 1;}
            else{
                $array5p5[$i][$j] = 0;}
        }
    };
    for($i=0;$i<5;$i++){
        for($j=0;$j<5;$j++){
        echo $array5p5[$i][$j] . " ";
        }
        echo "<br>";
    }
    echo "<h3>Ejercicio 3 </h3>";
    $num5p5may = 0;
    $num5p5i = 0;
    $num5p5j = 0;
    for($i=0;$i<5;$i++){
        for($j=0;$j<5;$j++){
            $numrand = rand(1,100);
            $array5p5may[$i][$j] = $numrand;
            echo $array5p5may[$i][$j] . " ";
            if ($num5p5may < $array5p5may[$i][$j]){
                $num5p5may = $array5p5may[$i][$j];
                $num5p5i = $i+1;
                $num5p5j = $j+1;
            }

        }
        echo "<br>";
    }
    echo "El numero mas grande es ". $num5p5may . " y su posicion es " . $num5p5i . " horizontal y " . $num5p5j. " vertical.";
    echo "<h2>Arrays Asociativas</h2>";
    echo "<h3>Ejercicio 1</h3>";
    echo "<h4>Temperatura en Palencia</h4>";
    $temperaturas = array(
        "Enero" => "",
        "Febrero" => "",
        "Marzo" => "",
        "Abril" => "",
        "Mayo" => "",
        "Junio" => "",
        "Julio" => "",
        "Agosto" => "",
        "Septiembre" => "",
        "Octubre" => "",
        "Noviembre" => "",
        "Diciembre" => "",
    );
    foreach($temperaturas as $mes => $temp){
        $numrand = rand(-10, 50);
        $temperaturas[$mes] = $numrand; //no se por que pero funciona
    }
    $temperaturasmax = -2000;
    $temperaturasmin = 2000;
    $temperaturasmaxmes = "";
    $temperaturasminmes = "";
    echo "<table border=1 border-collapse:collapse>";
    foreach($temperaturas as $mes => $temp){
        echo "<tr><td>". $mes . "</td> <td>" . $temp . "</td></tr>";
        if ($temp < $temperaturasmin){
            $temperaturasmin = $temp;
            $temperaturasminmes = $mes;
        }
        if ($temp > $temperaturasmax){
            $temperaturasmax = $temp;
            $temperaturasmaxmes = $mes;
        }
    }
    echo "</table>";
    echo "<h3> Ejercicio 2 </h3>";
    echo "El mes mas frío fue " . $temperaturasminmes . " con una temperatura de ". $temperaturasmin . " grados y el mas cálido fue " . $temperaturasmaxmes. " con una temperatura de " . $temperaturasmax. " grados.";

    echo "<h3> Ejercicio 3 </h3>";
    $alumnos = array(
        "David" => 0,
        "Violeta" => 0,
        "Irene" => 0,
        "Rodrigo" => 0,
        "Tomás" => 0,
        "Raquel" => 0,
        "Diego" => 0,
        "Victoria" => 0,
        "Aitor" => 0,
        "Jose Luis " => 0,
    );
    $sumnotas = 0;
    $sumnotasaprob = 0; //total para media aprobados
    $numaprob = 0; //num alumnos aprobados
    $sumnotassuspen = 0; // total para media suspensos
    $numsuspen = 0; //num alumnos suspensos
    $notasmax = 0;
    $nombrenotamax = "";
    $notasmin = 11;
    $nombrenotamin = "";
    echo "<table border=1>";
    foreach($alumnos as $nombre => $notas){
        $numrand = rand(0,10);

        $alumnos[$nombre] = $numrand;
        if ($notas < 5){
            $suspenso = "Suspende";
            $sumnotas += $notas;
            $sumnotassuspen += $notas;
            $numsuspen++;
        }else{
            $suspenso = "Aprueba";
            $sumnotas += $notas;
            $sumnotasaprob += $notas;
            $numaprob++;
        }
        if($notasmin > $notas){
            $notasmin = $notas;
            $nombrenotamin = $nombre;
        }elseif($notasmax < $notas ){
            $notasmax = $notas;
            $nombrenotamax = $nombre;
        }

        echo "<tr><td>". $nombre . "</td> <td>" . $notas . "</td> <td>". $suspenso ." </td> </tr>";
    }
    $medianotasaprob = $sumnotasaprob / $numaprob;
    $medianotassuspen = $sumnotassuspen / $numsuspen;
    $medianotas = $sumnotas / 10;
    echo "</table> <br>
    La media de la clase es " . $medianotas . ".<br>Hay " . $numaprob . " alumnos aprobados con una nota media entre ellos de " . $medianotasaprob . ". <br>Hay " . $numsuspen . " alumnos suspendidos con una nota media de " . $medianotassuspen . ". <br> El alumno con la nota mas alta es " . $nombrenotamax . " con una nota de " . $notasmax . ".<br> El alumno con la nota mas baja es ". $nombrenotamin . " con una nota media de " . $notasmin . ".";
?>

</body>
</html>