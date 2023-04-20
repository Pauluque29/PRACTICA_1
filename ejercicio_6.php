<?php

echo "<b>Instituto Tecnologico Escuela Industrial Superior</b><br>";
echo "<b>Pedro Domingo Murillo</b><br>";
echo "<b>Sub Sede - Tajani</b><br>";
echo "<b>Informatica - Industrial</b><br>";
echo "<b>Docente:</b> Erik Huallpa Aruquipa<br>";
echo "<b>Estudiante:</b> Nombre del estudiante<br>";
echo "<b>PRACTICA # 1</b><br>";
echo "--------------------------------------------------------------<br>";
echo "<h1>Ejercicio - 6</h1>";
echo "Crear un vector aplicando HTML y PHP, realizar el promedio de 5 notas.<br>";

//Variable

$sumaNotas = 0;
$promedio = 0;
$i = 0;

//Arreglos

$n = array();
if (isset($_POST["btnCalcular"])) {
//Entrada


  $n[0] = (int)$_POST["txtn1"];
  $n[1] = (int)$_POST["txtn2"];
  $n[2] = (int)$_POST["txtn3"];
  $n[3] = (int)$_POST["txtn4"];
  $n[4] = (int)$_POST["txtn5"];

//Proceso

for ($i = 0; $i < count($n); $i++) {
  $sumaNotas = $sumaNotas + $n[$i];
}
       $promedio = $sumaNotas / count($n);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo vectores</title>
</head>
<body>
    <form method="post" action="Ejercicio_6.php">
    <h2>Ejemplo de Vectores</h2>
    <label>Ingrese Numero 1</label>
    <input type="text" name="txtn1"><br>
    <label>Ingrese Numero 2</label>
    <input type="text" name="txtn2"><br>
    <label>Ingrese Numero 3</label>
    <input type="text" name="txtn3"><br>
    <label>Ingrese Numero 4</label>
    <input type="text" name="txtn4"><br>
    <label>Ingrese Numero 5</label>
    <input type="text" name="txtn5"><br>
    <label>El promedio es: </label>
    <input type="text" name="resultado" style="background-color: #CCFFFF" readonly value="<?=

$promedio ?>" />

          <input type="submit" name="btnCalcular" value="Calcular" />
  </from>
</body>
</html>

