<?php
//EJERCICIO10
echo "<b>Instituto Tecnologico Escuela Industrial Superior</b><br>";
echo "<b>Pedro Domingo murillo</b><br>";
echo "<b>Sub sede - tajani</b><br>";
echo "<b>Informatica - Industrial</b><br>";
echo "<b>Docente:</b> Erik Huallpa Aruquipa<br>";
echo "<b>Estudiante:</b> LUQUE LLUTA JUAN PAUL<br>";
echo "<b>PRACTICA # 1 </b><br>";
echo "-------------------------------------------------------------<br>";
echo "<h1>Ejercicio - 10</h1>";
echo "Crear una funcion con valores inicializados.</b><br>";


function Saludar($nombre = 'Carlos')
{
    return "¿Como estas $nombre? <br>";
}

echo "<pre>";
echo Saludar();
echo Saludar('Boris Cristhian');
echo Saludar('Claudia Marisol');
echo Saludar('Martin');
echo Saludar('Jhessica');
echo Saludar('Erika Amanda');
echo Saludar('Joel');
echo Saludar('Yola');
echo Saludar('Juan Paul');
echo Saludar('Luz Natalia');
echo Saludar('Juan Ronaldo');
echo Saludar('Rosse Mary');
echo Saludar('Ever');
echo "</pre>";
?>
