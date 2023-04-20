<?php
echo "<b>Instituto Tecnologico Escuela Industrial Superior</b><br>";
echo "<b>Pedro Domingo Murillo</b><br>";
echo "<b>Sub Sede - Tajani</b><br>";
echo "<b>Informatica - Industrial</b><br>";
echo "<b>Docente:</b> Erik Huallpa Aruquipa<br>";
echo "<b>Estudiante:</b> LUQUE LLUTA JUAN PAUL<br>";
echo "<b>PRACTICA # 1</b><br>";
echo "--------------------------------------------------------------<br>";
echo "<h1>Ejercicio - 14</h1>";
echo "POO, Crear una Clase Persona y mostrar de las dos formas.<br>";

?>
<?php
//por defecto de la clase y usando propiedades
class Persona
{
    #Atributos

    public $nombre = 'Alejandro';
    public $edad = 45;
    public $altura = 1.89;

    #Construtor

    function __construct(){
    }

    #Metodos

    function Mostrar()
    {
        echo "Su Nombre es: $this->nombre <br>";
        echo "Su Edad es: $this->edad <br>";
        echo "Su Altura es: $this->altura<br>";
    }
}
echo "<h3>Persona 1</h3>";
$persona_1 = new Persona();
$persona_1->Mostrar();

echo "<h3>Persona 2</h3>";
$persona_2 = new Persona();
$persona_2->nombre = 'Jacob';
$persona_2->edad = 51;
$persona_2->altura = 1.40;
$persona_2->Mostrar();
?>