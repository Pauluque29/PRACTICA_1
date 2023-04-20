<?php
echo "<b>Instituto Tecnologico Escuela Industrial Superior </b><br>";
echo "<b>Pedro Domingo Murillo</b><br>";
echo "<b>Sub Sede - Tajani</b><br>";
echo "<b>Informatica - Industrial</b><br>";
echo "<b>Docente:</b>Erik Huallpa Aruquipa<br>";
echo "<b>Estudiante:</b>LUQUE LLUTA JUAN PAULbr>";
echo "<b>PRACTICA # 1</b><br>";
echo "-----------------------------------------------------------------<br>";
echo "<h1>Ejercicio - 20</h1>";
echo "<h2>Calcular el IMC para una persona con POO</h2>";
echo "Crear una Clase Persona, con los atributos nombre, edad, altura y sus metodos IMC.";
echo "<br><b>Crear una interfaz grafica con html.</b>";
?>

<?php
  class Persona
  {
    #Atributos
    public $nombre;
    public $edad;
    public $altura;
    public $peso;
  
     #Getters
    public function getNombre(){
        return $this->nombre;
        }
    public function getEdad(){
        return $this->edad;
        }
     public function getPeso(){
        return $this->peso;
        }
    public function getAltura(){
        return $this->altura;
        }
    
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
     public function setPeso($value){
        $this->peso=$value;
       }

    #Calcula el IMC accediendo a las propiedades
    public function imc(){
        return $this->peso / ($this->altura*$this->altura);

    }
    #Calcula el IMC accediendo mediante los metodos GET
    public function imc2(){
        return $this->getPeso() / ($this->getAltura()*$this->getAltura());

    }

  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejemplo 20 IMC con HTML</title>
</head>
<body>
    <form action="" method="POST">
    <label>Nombre</label>
    <input type="text" name="txt-nombre">
    <label>Edad</label>
    <input type="number" name="txt-edad">
    <label>Altura</label>
    <input type="text" name="txt-altura">
    <label>Peso</label>
    <input type="number" name="txt-peso">
    <input type="submit" value="Calcular">
    </form>
</body>
</html>

<?php
if (isset($_POST['txt-nombre'])
|| isset($_POST['txt-edad'])
|| isset($_POST['txt-altura'])
|| isset($_POST['txt-peso'])) {
    //Instanciar la clase Persona
    $maria = new Persona();
    //Asignar valores  las propiedades del objeto
    $maria->setNombre($_POST['txt-nombre']);
    $maria->setEdad($_POST['txt-edad']);
    $maria->setAltura($_POST['txt-altura']);
    $maria->setPeso($_POST['txt-peso']);

    echo "<br><b>Nombre</b>: ".$maria->getNombre();
    echo "<br><b>Edad</b>: ".$maria->getEdad();
    echo "<br><b>Altura</b>: ".$maria->getAltura();
    echo "<br><b>Peso</b>: ".$maria->getPeso();
    echo "<br><b>IMC Metodo 1:</b>: ".$maria->imc();
    echo "<br><b>IMC Metodo 2:</b>: ".$maria->imc2();
}
?>