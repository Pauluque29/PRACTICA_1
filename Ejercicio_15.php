<?php
echo "<b>Istituro Tecnologico Escuela Industrial Superior</b><br>";
echo "<b>Pedro Domingo Murillo</b><br>";
echo "<b>Sub Sede - Tajani</b><br>";
echo "<b>Informatica - industrial</b><br>";
echo "<b>Docente:</b> Erik Huallpa Aruquipa<br>";
echo "<b>Estudiante:</b> LUQUE LLUTA JUAN PAUL<br>";
echo "<b>PRACTICA # 1</b><br>";
echo "---------------------------------------------------------------<br>";
echo "<h1>Ejercicio - 15</h1><br>";
echo "POO, crea una Clase Persona y  usar el metodo constructor.<br>";
?>
<?php
class Persona
{
    #Atributos
    private $nombre;
    private $edad;
    private $altura;

    function __construct($nombre, $edad, $altura){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->altura = $altura;
    }

    #Metodos
    function Mostrar(){
        return $this->nombre.' tiene '.$this->edad.' años de edad y es de '.$this->altura.' de Altura.';
    }
}

echo "<h3>Persona 1</h3>";
$boris = new Persona('Boris Cristhian', 20, 1.50);
echo $boris->Mostrar();

echo "<h3>Persona 2</h3>";
$clauida_marisol = new Persona('Claudia Marisol', 19, 1.50);
echo $clauida_marisol->Mostrar();

echo "<h3>Persona 3</h3>";
$martin = new Persona('Martin', 23, 1.50);
echo $martin->Mostrar();

echo "<h3>Persona 4</h3>";
$jhessica = new Persona('Jhessica', 19, 1.50);
echo $jhessica->Mostrar();

echo "<h3>Persona 5</h3>";
$erika = new Persona('Erika', 20, 1.50);
echo $erika->Mostrar();

echo "<h3>Persona 6</h3>";
$joel = new Persona('Joel', 22, 1.50);
echo $joel->Mostrar();

echo "<h3>Persona 7</h3>";
$yola = new Persona('Yola', 20, 1.50);
echo $yola->Mostrar();

echo "<h3>Persona 8</h3>";
$juan_paul = new Persona('Juan Paul', 25, 1.50);
echo $juan_paul->Mostrar();

echo "<h3>Persona 9</h3>";
$rodrigo = new Persona('Rodrigo', 26, 1.50);
echo $rodrigo->Mostrar();

echo "<h3>Persona 10</h3>";
$luz = new Persona('Luz Natalia', 20, 1.50);
echo $luz->Mostrar();

echo "<h3>Persona 11</h3>";
$juan_ronaldo = new Persona('Juan Ronaldo', 20, 1.50);
echo $juan_ronaldo->Mostrar();

echo "<h3>Persona 12</h3>";
$rosse = new Persona('Rosse Mary', 20, 1.50);
echo $rosse->Mostrar();

echo "<h3>Persona 13</h3>";
$ever = new Persona('Ever', 20, 1.50);
echo $ever->Mostrar();
?>