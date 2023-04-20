<?php
echo "<b>Istituro Tecnologico Escuela Industrial Superior</b><br>";
echo "<b>Pedro Domingo Murillo</b><br>";
echo "<b>Sub Sede - Tajani</b><br>";
echo "<b>Informatica - industrial</b><br>";
echo "<b>Docente:</b> Erik Huallpa Aruquipa<br>";
echo "<b>Estudiante:</b> LUQUE LLUTA JUAN PAUL<br>";
echo "<b>PRACTICA # 1</b><br>";
echo "---------------------------------------------------------------<br>";
echo "<h1>Ejercicio - 16</h1><br>";
echo "POO, Crea una Clase Estudiante, para los atributos ";
echo "usar metodos GET y SET, crear metodo mostrar.<br>";
?>
<?php
class Estudiante
{
    #Atributos
    private $nombre;
    private $edad;
    private $altura;

    function __construct(){

    }

    #Get
    public function getNombre(){
        return $this->nombre;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function getAltura(){
        return $this->altura;
    }

    #Set
    public function setNombre($nom){
        $this->nombre = $nom;
    }
    public function setEdad($ed){
        $this->edad = $ed;
    }
    public function setAltura($alt){
        $this->altura = $alt;
    }

    #Metodos
    function Mostrar(){
        return $this->nombre.' tiene '.$this->edad.' años de edad y es de '.$this->altura.' de Altura.';
    }
}

echo "<h3>Estudiante 1</h3>";
$boris = new Estudiante();
$boris->setNombre('Boris Cristhian');
$boris->setEdad(20);
$boris->setAltura(1.50);
echo $boris->Mostrar();

echo "<h3>Estudiante 2</h3>";
$clauida_marisol = new Estudiante();
$clauida_marisol->setNombre('Claudia Marisol');
$clauida_marisol->setEdad(19);
$clauida_marisol->setAltura(1.50);
echo $clauida_marisol->Mostrar();

echo "<h3>Estudiante 3</h3>";
$martin = new Estudiante();
$martin->setNombre('Martin');
$martin->setEdad(23);
$martin->setAltura(1.50);
echo $martin->Mostrar();

echo "<h3>Estudiante 4</h3>";
$jhessica = new Estudiante();
$jhessica->setNombre('Jhessica');
$jhessica->setEdad(25);
$jhessica->setAltura(1.50);
echo $jhessica->Mostrar();

echo "<h3>Estudiante 5</h3>";
$erika = new Estudiante();
$erika->setNombre('Erika');
$erika->setEdad(22);
$erika->setAltura(1.50);
echo $erika->Mostrar();

echo "<h3>Estudiante 6</h3>";
$joel = new Estudiante();
$joel->setNombre('Joel');
$joel->setEdad(25);
$joel->setAltura(1.50);
echo $joel->Mostrar();

echo "<h3>Estudiante 7</h3>";
$yola = new Estudiante();
$yola->setNombre('Yola');
$yola->setEdad(20);
$yola->setAltura(1.50);
echo $yola->Mostrar();

echo "<h3>Estudiante 8</h3>";
$juan_paul = new Estudiante();
$juan_paul->setNombre('Juan Paul');
$juan_paul->setEdad(23);
$juan_paul->setAltura(1.50);
echo $juan_paul->Mostrar();

echo "<h3>Estudiante 9</h3>";
$rodrigo = new Estudiante();
$rodrigo->setNombre('Rodrigo');
$rodrigo->setEdad(26);
$rodrigo->setAltura(1.50);
echo $rodrigo->Mostrar();

echo "<h3>Estudiante 10</h3>";
$luz = new Estudiante();
$luz->setNombre('Luz');
$luz->setEdad(20);
$luz->setAltura(1.50);
echo $luz->Mostrar();

echo "<h3>Estudiante 11</h3>";
$juan_ronaldo = new Estudiante();
$juan_ronaldo->setNombre('Juan Ronaldo');
$juan_ronaldo->setEdad(25);
$juan_ronaldo->setAltura(1.50);
echo $juan_ronaldo->Mostrar();

echo "<h3>Estudiante 12</h3>";
$rosse = new Estudiante();
$rosse->setNombre('Rosse Mary');
$rosse->setEdad(20);
$rosse->setAltura(1.50);
echo $rosse->Mostrar();

echo "<h3>Estudiante 13</h3>";
$ever = new Estudiante();
$ever->setNombre('Ever');
$ever->setEdad(22);
$ever->setAltura(1.50);
echo $ever->Mostrar();
?>