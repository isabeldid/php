<!DOCTYPE html>
<html>
<heand>
    <meta charset= "UTF-8"/>
    <title>Array</title>
</head>
<body>
<?php
    $dia[0] = "domingo";
    $dia[1] = "lunes";
    $dia[2] = "martes";
    $dia[3] = "miercoles";
    $dia[4] = "jueves";
    $dia[5] = "viernes";
    $dia[6] = "sabado";

    $mes = array("enero","febrero","marzo");
    //mostrar el viernes
    echo "El primer Dia es ". $dia[5];
    echo "<br>";

    //imprimir febrero
    echo "Del mes de ".$mes[1];
    echo "<hr>";
?>
<?php
$autos = array("Volvo" , "BMW" , "Toyota");
$arraylongitud = count ($autos);
for($x = 0; $x < $arraylongitud; $x++) {
  echo $autos[$x];
  echo "<br>";
}
?>
</body>
</html>