<?php 
echo "<b>INSTITUTO TECNOLOGICO ESCUELA INDUSTRIAL SUPERIOR</b><br>";
echo "<b>PEDRO DOMINGO MURILLO</b><br>";
echo "<b>SUB SEDE - TAJANI</b><br>";
echo "<b>INFORMATICA - INDUSTRIAL</b><br>";
echo "<b>DOCENTE:</b>ERIK HUALLPA ARUQUIPA<br>";
echo "<b>ESTUDIANTE:</b>LUQUE LLUTA JUAN PAUL<br>";
echo "<b>PRACTICA # 1</b><br>";
echo "------------------------------------------------------------------------------<br>";
echo "<h1><b>EJERCICIO - 3</b></h1>";
echo "<b>Crear un arreglo en el cual se pueda almacenar el las notas
 finales obtenidas, tambien el nombre de cada estudiante.</b><br>";

//Llenado de arreglo de asociativo
$nombres_notas = array(
    "Boris Cristhian" => 51,
    "Claudia Marisol" => 61,
    "Martin" => 65,
    "Jhessica" => 61,
    "Erika Amanda" => 61,
    "Joel" => 61,
    "Yola" => 88,
    "Juan Paul" => 88,
    "Rodrigo" => 61,
    "Luz Natalia" => 88,
    "Juan Ronaldo" => 70,
    "Rosse Mary" => 65,
    "Ever" => 88, 
);

//Imprimiendo los elementos
foreach ($nombres_notas as $estudiante => $nota) {
     echo 'Estudiante <b>' .$estudiante. '</b> tiene una nota de <b>' .$nota.'</b><br>';
}
?>
