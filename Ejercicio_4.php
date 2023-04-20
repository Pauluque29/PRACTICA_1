<?php 
echo "<b>INSTITUTO TECNOLOGICO ESCUELA INDUSTRIAL SUPERIOR</b><br>";
echo "<b>PEDRO DOMINGO MURILLO</b><br>";
echo "<b>SUB SEDE - TAJANI</b><br>";
echo "<b>INFORMATICA - INDUSTRIAL</b><br>";
echo "<b>DOCENTE:</b>ERIK HUALLPA ARUQUIPA<br>";
echo "<b>ESTUDIANTE:</b>LUZ NATALIA PARADA MAMANI<br>";
echo "<b>PRACTICA # 1</b><br>";
echo "------------------------------------------------------------------------------<br>";
echo "<h1><b>EJERCICIO - 4</b></h1>";
echo "<b>Crear un arreglo para mostrar el abecedario.</b><br>";

//Llenado de arreglo de abecedario
$abecedario = [
    'a', 'b', 'c', 'd', 'e',
    'f', 'g', 'h', 'i', 'j',
    'k', 'l', 'm', 'n', 'o',
    'p', 'q', 'r', 's', 't',
    'u', 'v', 'w', 'x', 'y', 'z'
];

//Imprimiendo los elementos
foreach ($abecedario as $letras) {
    echo "$letras, ";
}