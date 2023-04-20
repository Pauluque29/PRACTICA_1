<?php
echo "<b>Instituto Tecnologico Escuela Industrial Superior</b><br>";
echo "<b>Pedro Domingo Murillo</b><br>";
echo "<b>Sub Sede - Tajani</b><br>";
echo "<b>Informatica - Industrial</b><br>";
echo "<b>Docente:</b> Erik Huallpa Aruquipa<br>";
echo "<b>Estudiante:</b> LUQUE LLUTA JUAN PAUL<br>";
echo "<b>PRACTICA # 1</b><br>";
echo "--------------------------------------------------------------<br>";
echo "<h1>Ejercicio - 13</h1>";
echo "Listado de productos con paginación.<br>";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Paginación de Productos</title>
    <link href="estilo.css" rel="stylesheet">
</head>
<body>
    <header>
        <h2 id="centrado">LISTADO DE PRODUCTOS</h2>
    </header>
    <section>
        <?php
        error_reporting(0);
        //Arreglo de productos
        $productos = array(
            'Lavadora' => 1500, 'Radiograbadora' => 500,
            'Licuadora' => 400, 'Extractora' => 700,
            'Afeitadora' => 80, 'Lampara' => 50,
            'Cocina' => 1300, 'Lavavajillas' => 170,
            'Batidora' => 100, 'Secadora' => 1000,
            'Tostadora' => 60, 'Aspiradora' => 250,
            'Televisor' => 2500, 'Campana' => 700,
            'Microondas' => 800, 'Plancha' => 150,
            'Calentador' => 1200, 'Cafetera' => 50
        );
        //Determinar si hay páginas que mostrar
        if (isset($_GET['pagina'])){
            $pagina = $_GET['pagina'];
        }else{
            $pagina = 1;
        }
        //Invocar a la función de paginación
        paginar($productos, 5, $pagina);
        ?>
    </section>
    <footer>
        <h3 id="centrado">Todos los derechos reservados - By Erik Huallpa</h3>
    </footer>
</body>
</html>

<?php
//Implementación de la función paginación
function paginar($misProductos, $total, $pagina)
{
    //Determinar el total de paginas que genera
    //la cantidad total de productos
    $paginas = ceil(count($misProductos) / $total);
    //Configurando el inicio de la paginación
    $inicio = ($pagina - 1) * $total;
    //Configurando la fi nalización de la paginación
    $final = $pagina * $total;
    //Listando los productos en una tabla
    echo '<table width="700" cellspacing="0" cellpadding="5">';
    echo '<tr>';
    //Obtener los N registros
    $paginado = array_slice($misProductos, $inicio, $final);
    echo "<tr><th>DESCRIPCION DEL PRODUCTO</th>";
    echo "<th>PRECIO DEL PRODUCTO</th></tr>";
    //Listando los productos y sus precios
    for ($i = $inicio; $i < $final; $i++) {
        list($producto, $precio) = array(key($paginado), current($paginado)); next($paginado);
        if (isset($misProductos[$producto])) {
            echo "<tr><td>$producto</td>";
            echo "<td>Bs. " . number_format($precio, '2', '.', '');
            echo ".</td></tr>";
        } else{
            break;
        }
    }
    echo '</tr>';
    //Mostrando las paginas
    echo '<tr><td colspan="2" id="centrado">';
    if ($pagina > 1){
        echo "<a href=\"Ejercicio_13.php?pagina=".($pagina-1)."\">Página Anterior</a>&nbsp";
    }
    for ($i = 1; $i <= $paginas; $i++) {
        if ($i == $pagina){
            echo "<strong>$i</strong>&nbsp;";
        }else{
            echo "<a href=\"Ejercicio_13.php?pagina=$i\">$i</a>&nbsp;&nbsp;";
        }
    }
    if ($pagina < $paginas){
        echo "<a href=\"Ejercicio_13.php?pagina=".($pagina + 1)."\">Página Siguiente</a>";
    }
    echo '</td></tr>';
    echo '</table>';
    return;
}
?>