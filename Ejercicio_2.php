<?php

//2 CREAR UN ARREGLO DE ESTUDIANTES DE TEW-500

echo "<b>Instituto Tecnologico Escuela Indistrial Superior</b><br>";
echo "<b>Pedro Domingo Murillo</b><br>";
echo "<b>Sub Sede - Tajani</b><br>";
echo "<b>Informatica - Industrial</b><br>";
echo "<b>Docente:</b>Erik Huallpa Aruquipa<br>";
echo "<b>Estudiante:</b> Nombre del Estudiante<br>";
echo "<b>PRACTICA # 1</b><br>";
echo "------------------------------------------------<br>";
echo "<b>Ejercicio - 2</b><br>";
echo "Crear un arreglo de estudiantes de TEW-500. <br>";

//LLENADO DE ARREGLO DE ESTUDIANTES

$estudiantes = array(
    "Boris Cristian",
    "Claudia Marisol",
    "Martin",
    "Jhessica",
    "Erika Amanda",
    "Joel",
    "Yola",
    "Juan Paul",
    "Rodrigo",
    "Luz Natalia",
    "Juan Ronaldo",
    "Rosse Mary",
    "Ever"
);

// IMPRIMIR LOS ELEMENTOS
echo 'Los estudiantes son: <br>';
foreach ($estudiantes as $e){
    print "[ $e ]";
}

?>