<?php

echo "<b>Instituto Tecnologico Escuela Industrial Superior</b><br>";
echo "<b>Pedro Domingo Murillo</b><br>";
echo "<b>Sub Sede - Tajani</b><br>";
echo "<b>Informatica - Industrial</b><br>";
echo "<b>Docente:</b> Erik Huallpa Aruquipa<br>";
echo "<b>Estudiante:</b> LUQUE LLUTA JUAN PAUL<br>";
echo "<b>PRACTICA # 1</b><br>";
echo "--------------------------------------------------------------<br>";
echo "<h1>Ejercicio - 11</h1>";
echo "Promedio de Notas de un Estudiante.<br>";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
<link href="estilo.css" rel="stylesheet">
</head>
<body>
<header>
<h2 id="centrado">Promedio de notas</h2>
<img src="Carrera_Informática2021.jpg" width="660" height="200" />
<br>
</header>
<section>
<?php
error_reporting(0);
if (isset($_POST['txtAlumno'])
|| isset($_POST['txtNota1'])
|| isset($_POST['txtNota2'])
|| isset($_POST['txtNota3'])
|| isset($_POST['txtNota4'])) {
$alumno = $_POST['txtAlumno'];
$nota1 = $_POST['txtNota1'];
$nota2 = $_POST['txtNota2'];
$nota3 = $_POST['txtNota3'];
$nota4 = $_POST['txtNota4'];
$mAlumno = '';
$permitidos = '/^[A-Z üÜáéíóúÁÉÍÓÚñÑ]{1,100}$/i';
if (!preg_match($permitidos, $alumno)||!is_string($alumno)){
$mAlumno = 'Registre nombres..!!';
}
$mNota1 = '';
$mNota2 = '';
$mNota3 = '';
$mNota4 = '';
if (empty($nota1) || !is_numeric($nota1))
$mNota1 = 'Error en Nota 1';
elseif ($nota1 < 0 || $nota1 > 20)
$mNota1 = 'Error en Nota 1';
if (empty($nota2) || !is_numeric($nota2))
$mNota2 = 'Error en Nota 2';
elseif ($nota1 < 0 || $nota2 > 20)
$mNota2 = 'Error en Nota 2';
if (empty($nota3) || !is_numeric($nota3))
$mNota3 = 'Error en Nota 3';
elseif ($nota3 < 0 || $nota3 > 20)
$mNota3 = 'Error en Nota 3';
if (empty($nota4) || !is_numeric($nota4))
$mNota4 = 'Error en Nota 4';
elseif ($nota4 < 0 || $nota4 > 20)
$mNota4 = 'Error en Nota 4';
}
?>
<form name="frmPromedio" method="post" action="Ejercicio_11.php">
<table width="650" cellspacing="3" cellpadding="3">
<tr>
<td width="80">ALUMNO</td>
<td width="457" id="error">
<input type="text" name="txtAlumno" size="60" value="<?php echo $alumno; ?>" />
<?php echo $mAlumno; ?>
</td>
</tr>
<tr>
<td>NOTAS</td>
<td></td>
</tr>
<tr>
<td colspan="2">
<table width="650" cellspacing="2" cellpadding="2">
<tr>
<td width="179">Nota 1</td>
<td width="179">
<input type="text" name="txtNota1" size="5" value="<?php echo
$nota1; ?>" />
</td>
<td width="179" id="error"><?php echo $mNota1; ?></td>
<td width="179">Nota 2</td>
<td width="179">
<input type="text" name="txtNota2" size="5" value="<?php echo
$nota2; ?>" />
</td>
<td width="179" id="error"><?php echo $mNota2; ?></td>
</tr>
<tr>
<td>Nota 3</td>
<td><input type="text" name="txtNota3" size="5" value="<?php echo
$nota3; ?>" />
</td>
<td id="error"><?php echo $mNota3; ?></td>
<td>Nota 4</td>
<td><input type="text" name="txtNota4" size="5" value="<?php echo
$nota4; ?>" />
</td>
<td id="error"><?php echo $mNota4; ?></td>
</tr>
</table>
</td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Promediar" /></td>
</tr>
<?php
$notas = array($nota1, $nota2, $nota3, $nota4);
$mayor = max($notas);
$menor = min($notas);
$promedio = round(($nota1 + $nota2 + $nota3 + $nota4 - $menor) / 3, 0);
if ($promedio >= 13){
$condicion = 'Aprobado';
}else{
$condicion = 'Reprobado';
}
?>
<tr>
<td>Alumno</td>
<td><?php echo $alumno; ?></td>
</tr>
<tr>
<td>Promedio</td>
<td><?php echo $promedio; ?></td>
</tr>
<tr>
<td>Nota más alta</td>
<td><?php echo $mayor; ?></td>
</tr>
<tr>
<td>Nota más baja</td>
<td><?php echo $menor; ?></td>
</tr>
<tr>
<td>Condicion</td>
<td><?php echo $condicion; ?></td>
</tr>
</table>
</form>
</section>
<footer>
<h3 id="centrado">Todos los derechos reservados - By Erik Huallpa</h3>
</footer>
</body>
</html>