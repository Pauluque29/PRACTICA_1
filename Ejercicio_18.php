<?php
echo "<b>Instituto Tecnologico Escuela Industrial Superior</b><br>";
echo "<b> Pedro Domingo Murillo</b><br>";
echo "<b> Sub sede - Tajani</b><br>";
echo "<b> Informatica - Industrial</b><br>";
echo "<b> Docente:</b> Erick Huallpa Aruquipa<br>";
echo "<b> Estudiante:</b> LUQUE LLUTA JUAN PAUL<br>";
echo "<b> PRACTICA # 1</b><br>";
echo"__________________________________________________________________<br>";
echo "<h1>Ejercicio - 18</h1>";

echo "<h2>Calcular el IMC para una persona con POO</h2>";
echo  "Crear una Clase persona, con los atributos nombre, edad ,altura y sus metodos IMC <br>";
?>
<?php
class Persona{
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
    # Setters
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
        return $this->peso / ($this->altura * $this->altura);
    }
    #Calcular  el IMC accediendo mediantes los metodos GET
    public function imc2(){
        return $this->getPeso() / ($this->getAltura() * $this->getAltura());
    }

}
//instanciar la clase
$maria= new Persona();

//asignar valores alas propiedades del objeto
$maria->setNombre('Maria Alanoca Oropeza');
$maria->setEdad(28);
$maria->setAltura(1.75);
$maria->setPeso(65);

echo "<br><b>Nombre</b>:".$maria->nombre;
echo "<br><b>Edad</b>:".$maria->edad;
echo "<br><b>Altura</b>:".$maria->altura;
echo "<br><b>Peso</b>:".$maria->peso;
echo "<br><b>IMC Metodo 1:</b>".$maria->imc();
echo "<br><b>IMC Metodo 2:</b>".$maria->imc2();

?>