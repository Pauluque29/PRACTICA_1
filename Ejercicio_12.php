<?php
echo "<b>Instituto Tecnologico Escuela Industrial Superior</b><br>";
echo "<b>Pedro Domingo Murillo</b><br>";
echo "<b>Sub Sede - Tajani</b><br>";
echo "<b>Informatica - Industrial</b><br>";
echo "<b>Docente:</b> Erik Huallpa Aruquipa<br>";
echo "<b>Estudiante:</b>LUQUE LLUTA JUAN PAUL<br>";
echo "<b>PRACTICA # 1</b><br>";
echo "--------------------------------------------------------------<br>";
echo "<h1>Ejercicio - 12</h1>";
echo "Calculo de Becas de Estudiantes.<br>";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href="estilo.css" rel="stylesheet">
<title>Pensión de estudiantes</title>
</head>
<body>
<header>
<h2 id="centrado">BECAS DE ESTUDIANTES</h2>
<h3 id="centrado">Simulador de cuotas</h3>
<img src="Carrera_Informática2021.jpg" width="700" height="182" />
</header>
<section>
<?php error_reporting(0); ?>
<form name="frmPension" method="POST">
<!--Tabla para ingreso de valores-->
<table width="700" cellspacing="5" cellpadding="1">
<tr>
<td>Alumno</td>
<td><input type="text" name="txtAlumno" size="70" value="<?php echo getAlumno(); 
?>" /></td>
<td></td>
</tr>
<tr>
<td>Promedio ponderado</td>
<td><input type="text" name="txtPromedio" value="<?php echo getPromedio(); ?>"
/></td>
<td><input type="submit" value="PROCESAR" name="btnProcesar" /></td>
</tr>
</table>
<?php
$categoria = function ($promedio) {
if ($promedio > 17)
return "A";
elseif ($promedio >= 14)
return "B";
elseif ($promedio >= 12)
return "C";
else
return "D";
};
?>
<?php if (isset($_POST["btnProcesar"])) { ?>
<!--Tabla para el resumen de categoria-->
<table width="700" cellspacing="1" cellpadding="1">
<tr>
<td width="200">Alumno</td>
<td width="200"><?php echo getAlumno(); ?></td>
<td width="200"></td>
</tr>
<tr>
<td>Promedio</td>
<td><?php echo getPromedio(); ?></td>
<td></td>
</tr>
<tr>
<td>Categoria</td>
<td><?php echo $categoria(getPromedio()); ?></td>
<td></td>
</tr>
</table>
<?php
$pension = function ($categoria) {
if ($categoria == "A")
return 550;
elseif ($categoria == "B")
return 650;
elseif ($categoria == "C")
return 750;
elseif ($categoria == "D")
return 800;
else
return '';
};
$fecha = function () {
return date('d/m/Y');
};
$cuotas = function () {
return 5;
};
?>
<!--Tabla resumen de pensión-->
<table width="700" cellspacing="1" cellpadding="1">
<tr>
<td width="200">RESUMEN DE CUOTAS</td>
<td width="200"></td>
<td width="200"></td>
</tr>
<tr>
<td>Monto Pensión</td>
<td><?php echo 'Bs. ' . number_format($pension($categoria(
getPromedio()
)), '2', '.', ''); ?>
</td>
<td></td>
</tr>
<tr>
<td>Fecha Actual</td>
<td><?php echo $fecha(); ?></td>
<td></td>
</tr>
<tr>
<td>Número de Cuotas</td>
<td><?php echo $cuotas(); ?></td>
<td></td>
</tr>
</table>
<!--Tabla para las posibles fechas y cuotas-->
<table width="700" cellspacing="1" cellpadding="1">
<tr>
<td colspan="2">RESUMEN DE FECHAS Y CUOTAS</td>
</tr>
<tr>
<td>Fechas</td>
<td>Monto por cuota</td>
</tr>
<?php
for ($i = 1; $i <= $cuotas(); $i++) {
$montoTotal += $pension($categoria(getPromedio()));
?>
<tr>
<td>
<?php
$f = $fecha();
echo date('d/m/Y', strtotime("$f +$i month"));
?>
</td>
<td>
    <?php echo 'Bs. ' . number_format($pension($categoria(
getPromedio()
)), '2', '.', ''); ?>
</td>
</tr>
<?php } ?>
<tr>
<td>Total por semestre</td>
<td><?php echo 'Bs. ' . number_format($montoTotal, '2', '.', ''); ?>
</td>
</tr>
</table>
<?php } ?>
</form>
</section>
<footer>
<h3 id="centrado">Todos los derechos reservados - By Erik Huallpa</h3>
</footer>
<?php
function getAlumno(){
return $_POST['txtAlumno'];
}
function getPromedio(){
return $_POST['txtPromedio'];
}
?>
</body>
</html>