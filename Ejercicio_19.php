<?php
$Listado = [];
echo "<b>Instituto Tecnologico Escuela Industrial Superior </b><br>";
echo "<b>Pedro Domingo Murillo</b><br>";
echo "<b>Sub Sede - Tajani</b><br>";
echo "<b>Informatica - Industrial</b><br>";
echo "<b>Docente:</b>Erik Huallpa Aruquipa<br>";
echo "<b>Estudiante:</b>LUQUE LLUTA JUAN PAUL<br>";
echo "<b>PRACTICA # 1</b><br>";
echo "-----------------------------------------------------------------<br>";
echo "<h1>Ejercicio - 19</h1>";
echo "POO, Crear una Clase Estudiante, para Los atributos Nombre, Edad y Altura ";
echo "usar metodos GET y SET.<br>";
echo "<br><b>Crear una interfaz grafica con html</b>";
?>
<?php
class Estudiante
{
  #Atributos
  public $nombre;
  public $edad;
  public $altura;

  #Setters
  public function setNombre($value){
      $this->nombre=$value;
  }
  public function setEdad($value){
    $this->edad=$value;
}
public function setAltura($value){
    $this->altura=$value;
}

#Getters
public function getNombre(){
    return $this->nombre;
}
public function getEdad(){
    return $this->edad;
}
public function getAltura(){
    return $this->altura;
}
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejemplo 19 Listado de Estudiantes con HTML</title>
</head>
<body>
    <form action="" method="POST">
    <label>Nombre</label>
    <input type="text" name="txt-nombre">
    <label>Edad</label>
    <input type="number" name="txt-edad">
    <label>Altura</label>
    <input type="text" name="txt-altura">
    <input type="submit" value="Agregar">
    </form>
</body>
</html>

<?php
if (isset($_POST['txt-nombre'])
|| isset($_POST['txt-edad'])
|| isset($_POST['txt-altura'])) {
    //Instanciar la clase Estudiante
    $est = new Estudiante();
    //Asignar valores  las propiedades del objeto
    $est->setNombre($_POST['txt-nombre']);
    $est->setEdad($_POST['txt-edad']);
    $est->setAltura($_POST['txt-altura']);
    echo "<br><b>Nombre</b>: ".$est->getNombre();
    echo "<br><b>Edad</b>: ".$est->getEdad();
    echo "<br><b>Altura</b>: ".$est->getAltura();
}
?>