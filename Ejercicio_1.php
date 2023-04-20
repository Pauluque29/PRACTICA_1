<?php
//1 CREAR UN ARREGLO DE NOTAS CON LOS SIGUIENTES ELEMENTOS 65,45,75,98,32 E IMPRIMIRLOS
echo "<b>Instituto Tecnologico Escuela Indistrial Superior</b><br>";
echo "<b>Pedro Domingo Murillo</b><br>";
echo "<b>Sub Sede - Tajani</b><br>";
echo "<b>Informatica - Industrial</b><br>";
echo "<b>Docente:</b>Erik Huallpa Aruquipa<br>";
echo "<b>Estudiante:</b> Nombre del Estudiante<br>";
echo "<b>PRACTICA # 1</b><br>";
echo "------------------------------------------------<br>";
echo "<b>Ejercicio - 1</b><br>";
echo "Crear un arrerglo de notas con los siguientes elementos 65, 45, 75, 98 32 e imprimirlos. <br>";
//LLENADO DE ARREGLO DE NOTAS
$notas = array(65, 45, 75, 98, 32);
//IMPRIMIR LOS ELEMENTOS
echo 'Las notas son: <br>';
foreach ($notas as $n){
    print "[ $n ]";
}
?>