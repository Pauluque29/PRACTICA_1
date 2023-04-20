<?php

echo "<b>Instituto Tecnologico Escuela Industrial Superior</b><br>";
echo "<b>Pedro Domingo Murillo</b><br>";
echo "<b>Sub Sede - Tajani</b><br>";
echo "<b>Informatica - Industrial</b><br>";
echo "<b>Docente:</b> Erik Huallpa Aruquipa<br>";
echo "<b>Estudiante:</b> Nombre del estudiante<br>";
echo "<b>PRACTICA # 1</b><br>";
echo "--------------------------------------------------------------<br>";
echo "<h1>Ejercicio - 5</h1>";
echo "Crear un arreglo multiple con niveles de carreras, semestres y estudiantes.<br>";

$tajani = [

'INFORMATICA-INDUSTRIAL' => [

'Primer Semetre' => [

'1'=>'Cachi Choque Yhamil',
'2'=>'Chura Mamani Beymar',
'3'=>'Condori Quispe Cintia Mishel',
'4'=>'Condori Torrez Marisol',
'5'=>'Coyauri MACHACA ABRAHAM',
'6'=>'Cutipa Apesticona Mario',
'7'=>'Flores Catari Angel Abel',
'8'=>'Leon Quispe Kimbal Carlos',
'9'=>'Llampaz Osco Ruben',
'10'=>'Luque Aro Cintiha',
'11'=>'Morales Patzi Sandra Lizette',
'12'=>'Moya Mamani Lizeth',
'13'=>'Patty Mejia Kanawki Jesus',
'14'=>'Ponce Portugal Andres Garbo',
'15'=>'Quispe Flores Americo',
'16'=>'Quispe Quispe Juan Gabriel',
'17'=>'Tincuta Vasquez Wilson Orlando',
'18'=>'Yujra Quispe Pablo'

], 

'Tercer Semestre' => [

'1'=>'Chiri Pachacuti Gonzalo',
'2'=>'Larico Maquera Olga',
'3'=>'Machaca Villca Jheferson',
'4'=>'Quispe Mamani Rodrigo',
'5'=>'Ticona Cruz Limbert'

], 

'Quinto Semestre' => [

'1'=>'Aro Chura Boris Cristhian',
'2'=>'Cachi Quispe Claudia Marisol',
'3'=>'Cachi Quispe Martin',
'4'=>'Choque Condori Jhessica',
'5'=>'Condori Quispe Erika Amanda',
'6'=>'Flores Mamani Joel',
'7'=>'Huanca Noa Yola',
'8'=>'Luque Lluta Juan Paul',
'9'=>'Mamani Aruquipa Rodrigo',
'10'=>'Parada Mamani Luz Natalia',
'11'=>'Quispe Mamani Juan Ronaldo',
'12'=>'Saucedo Aro Rosse Mary',
'13'=>'Tallacagua Quispe Ever'

]

],

'MECANICA AUTOMOTRIZ' => [

'Primer Semetre' => [

'1'=>'Cachi Choque Yhamil',
'2'=>'Chura Mamani Beymar',
'3'=>'Condori Quispe Cintia Mishel',
'4'=>'Condori Torrez Marisol',
'5'=>'Coyauri MACHACA ABRAHAM',
'6'=>'Cutipa Apesticona Mario',
'7'=>'Flores Catari Angel Abel',
'8'=>'Leon Quispe Kimbal Carlos',
'9'=>'Llampaz Osco Ruben',
'10'=>'Luque Aro Cintiha',
'11'=>'Morales Patzi Sandra Lizette',
'12'=>'Moya Mamani Lizeth',
'13'=>'Patty Mejia Kanawki Jesus',
'14'=>'Ponce Portugal Andres Garbo',
'15'=>'Quispe Flores Americo',
'16'=>'Quispe Quispe Juan Gabriel',
'17'=>'Tincuta Vasquez Wilson Orlando',
'18'=>'Yujra Quispe Pablo'

], 

'Tercer Semestre' => [

'1'=>'Chiri Pachacuti Gonzalo',
'2'=>'Larico Maquera Olga',
'3'=>'Machaca Villca Jheferson',
'4'=>'Quispe Mamani Rodrigo',
'5'=>'Ticona Cruz Limbert'

], 

'Quinto Semestre' => [
'1'=>'Aro Chura Boris Cristhian',
'2'=>'Cachi Quispe Claudia Marisol',
'3'=>'Cachi Quispe Martin',
'4'=>'Choque Condori Jhessica',
'5'=>'Condori Quispe Erika Amanda',
'6'=>'Flores Mamani Joel',
'7'=>'Huanca Noa Yola',
'8'=>'Luque Lluta Juan Paul',
'9'=>'Mamani Aruquipa Rodrigo',
'10'=>'Parada Mamani Luz Natalia',
'11'=>'Quispe Mamani Juan Ronaldo',
'12'=>'Saucedo Aro Rosse Mary',
'13'=>'Tallacagua Quispe Ever'

      ] 

   ]

];

foreach ($tajani as $keyC => $carrera) {
echo "<h1 style='color:orange'>$keyC</h1>";
foreach ($carrera as $keyS => $semestre){
echo "<h2 style='color:blue'>$keyS</h2>"; 
foreach($semestre as $keyE => $estudiante){
echo '<pre> '.$keyE.' - '.$estudiante.'</pre>';

             }

         }

     }

?>

