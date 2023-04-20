<?php
echo "<b>Instituto Tecnologico Esuela Industrial Superior</b><br>";
echo "<b> Pedro Domingo Murillo</b><br>";
echo "<b> Sub sede - Tajani</b><br>";
echo "<b> Informatica - Industrial</b><br>";
echo "<b> Docente:</b> Erick Huallpa Aruquipa<br>";
echo "<b> Estudiante:</b> LUQUE LLUTA JUAN PAUL<br>";
echo "<b> PRACTICA #1</b><br>";
echo"__________________________________________________________________<br>";
echo "<h1>Ejercicio - 17</h1>";

echo "POO, Crear una Clase Estudiante, para los atributos";
echo  "usar un solo metodo para GET y otros para SET, crear metodo constructor . <br>";
?>
<?php
class Estudiante
{
    #Atributos
    Private $Nombre;
    Private $Edad;
    private $Altura;

    #Get
    public function __GET($atributo){
        return $this->$atributo;
    }

    #Set
    public function __SET($atributo, $contenido){
        $this->$atributo= $contenido;
    }
    #Metodos
    function Mostrar(){
        return $this->Nombre.' tiene'.$this->Edad.'años de edad y es de '.$this->Altura.' de Altura.';
    }

}
echo "<h3> Estudiante 1</h3>";
$boris = new  Estudiante();
// Usamos --SET para asignar
$boris->__SET('Nombre','Boris Cristian');
$boris->__SET('Edad',20);
$boris->__SET('Altura',1.50);
 
//Usamos ---GET para recuperar algun dato
echo $boris->__GET('Nombre')."<br>";
echo $boris->__GET('Edad')."<br>";
echo $boris->__GET('Altura')."<br>";

//Usamos metodos para mostrar para mostrar los datos
echo $boris->Mostrar();


echo "<h3>Estudiante 2</h3>";
$claudia_marisol = new Estudiante();
$claudia_marisol->__SET('Mombre','Claudia Marisol');
$claudia_marisol->__SET('Edad',19);
$claudia_marisol->__SET('Altura',1.50);

echo $claudia_marisol->__GET('Nombre')."<br>";
echo $claudia_marisol->__GET('Edad')."<br>";
echo $claudia_marisol->__GET('Altura')."<br>";
echo $claudia_marisol->Mostrar();


echo "<h3>Estudiante 3</h3>";
$martin = new Estudiante();
$martin->__SET('Nombre','Martin');
$martin->__SET('Edad',23);
$martin->__SET('Altura',1.50);

echo $martin->__GET('Nombre')."<br>";
echo $martin->__GET('Edad')."<br>";
echo $martin->__GET('Altura')."<br>";
echo $martin->Mostrar();

echo "<h3>Estudiante 4</h3>";
$jessica = new Estudiante();
$jessica->__SET('Nombre','jessica');
$jessica->__SET('Edad',19);
$jessica->__SET('Altura',1.50);

echo $jessica->__GET('Nombre')."<br>";
echo $jessica->__GET('Edad')."<br>";
echo $jessica->__GET('Altura')."<br>";
echo $jessica->Mostrar();

echo "<h3>Estudiante 5</h3>";
$erika = new Estudiante();
$erika->__SET('Nombre','Erika Amanda');
$erika->__SET('Edad',20);
$erika->__SET('Altura',1.50);

echo $erika->__GET('Nombre')."<br>";
echo $erika->__GET('Edad')."<br>";
echo $erika->__GET('Altura')."<br>";
echo $erika->Mostrar();

echo "<h3>Estudiante 6</h3>";
$joel = new Estudiante();
$joel->__SET('Nombre','Joel');
$joel->__SET('Edad',22);
$joel->__SET('Altura',1.50);

echo $joel->__GET('Nombre')."<br>";
echo $joel->__GET('Edad')."<br>";
echo $joel->__GET('Altura')."<br>";
echo $joel->Mostrar();

echo "<h3>Estudiante 7</h3>";
$yola = new Estudiante();
$yola->__SET('Nombre','Yola');
$yola->__SET('Edad',20);
$yola->__SET('Altura',1.50);

echo $yola->__GET('Nombre')."<br>";
echo $yola->__GET('Edad')."<br>";
echo $yola->__GET('Altura')."<br>";
echo $yola->Mostrar();

echo "<h3>Estudiante 8</h3>";
$juan_paul = new Estudiante();
$juan_paul->__SET('Nombre','Juan_Paul');
$juan_paul->__SET('Edad',19);
$juan_paul->__SET('Altura',1.50);

echo $juan_paul->__GET('Nombre')."<br>";
echo $juan_paul->__GET('Edad')."<br>";
echo $juan_paul->__GET('Altura')."<br>";
echo $juan_paul->Mostrar();

echo "<h3>Estudiante 9</h3>";
$rodrigo = new Estudiante();
$rodrigo->__SET('Nombre','Rodrigo');
$rodrigo->__SET('Edad',22);
$rodrigo->__SET('Altura',1.50);

echo $rodrigo->__GET('Nombre')."<br>";
echo $rodrigo->__GET('Edad')."<br>";
echo $rodrigo->__GET('Altura')."<br>";
echo $rodrigo->Mostrar();

echo "<h3>Estudiante 10</h3>";
$luz_natalia = new Estudiante();
$luz_natalia->__SET('Nombre','Luz Natalia');
$luz_natalia->__SET('Edad',20);
$luz_natalia->__SET('Altura',1.50);

echo $luz_natalia->__GET('Nombre')."<br>";
echo $luz_natalia->__GET('Edad')."<br>";
echo $luz_natalia->__GET('Altura')."<br>";
echo $luz_natalia->Mostrar();

echo "<h3>Estudiante 11</h3>";
$juan_ronaldo = new Estudiante();
$juan_ronaldo->__SET('Nombre','Juan Ronaldo');
$juan_ronaldo->__SET('Edad',19);
$juan_ronaldo->__SET('Altura',1.50);

echo $juan_ronaldo->__GET('Nombre')."<br>";
echo $juan_ronaldo->__GET('Edad')."<br>";
echo $juan_ronaldo->__GET('Altura')."<br>";
echo $juan_ronaldo->Mostrar();

echo "<h3>Estudiante 12</h3>";
$rosse_mary = new Estudiante();
$rosse_mary->__SET('Nombre','Rosse Mary');
$rosse_mary->__SET('Edad',20);
$rosse_mary->__SET('Altura',1.50);

echo $rosse_mary->__GET('Nombre')."<br>";
echo $rosse_mary->__GET('Edad')."<br>";
echo $rosse_mary->__GET('Altura')."<br>";
echo $rosse_mary->Mostrar();

echo "<h3>Estudiante 13</h3>";
$ever = new Estudiante();
$ever->__SET('Nombre','Ever');
$ever->__SET('Edad',20);
$ever->__SET('Altura',1.50);

echo $ever->__GET('Nombre')."<br>";
echo $ever->__GET('Edad')."<br>";
echo $ever->__GET('Altura')."<br>";
echo $ever->Mostrar();

?>
