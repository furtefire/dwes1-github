<html>
<head>
	<title>Conexión a BBDD con PHP</title>
	<meta charset="UTF-8"/>
</head>
<body>
<?php
$servidor = "localhost";
$usuario = "alumno";
$clave = "alumno";
include ('Disco.php');
$conexion = new mysqli($servidor,$usuario,$clave,"catalogo16");
$conexion->query("SET NAMES 'UTF8'");

// Recoger el cuidador de request
if (!isset($_REQUEST["cod_disco"])) die ("<h3>ERROR en la petición. Falta identificador del Disco</h3>");
$id = $_REQUEST["cod_disco"];
?>
<table style='border:0'>
<tr style='background-color:gold'>
	<th>Cod</th>
	<th>Nombre</th>
	<th>fch_salida</th>
	<th>Descripcion</th>
	<th>Img</th>
	<th>nombre_dj</th>
</tr>
<?php
$resultado = $conexion -> query("SELECT * FROM disco where cod_disco=".$id."");
if($resultado->num_rows === 0) echo "<p>has pecado de servicio</p>";
while ($Disco = $resultado->fetch_object('Disco')) {
    echo "<tr bgcolor='silver'>";
    echo "<td>".$Disco->getCod_disco()."</td>\n";
    echo "<td>".$Disco->getNombre_disco()."</td>\n";
    echo "<td>".$Disco->getFecha_salida()."</td>\n";
    echo "<td>".$Disco->getDescripcion()."</td>\n";
    echo "<td>".$Disco->getImg_diso()."</td>\n";   
    $aux=$conexion -> query("select nombre_dj from autor_dj where cod_dj=".$Disco->getAutor()."");
    if($aux->num_rows === 0) echo "<p>No se encontró el autor</p>";
    else {
        $aux2=$aux->fetch_assoc();
  //      echo "<td>".$aux2['nombre_dj']."</td>\n";
        echo "<td><a href='mostrarObra.php?cod_disco=".$Disco->getCod_disco()."'>".$aux2['nombre_dj']."</a></td>\n";
    }
   
    echo "</tr>";
    mysqli_free_result($aux);
}
?>
</table>

<?php 
mysqli_free_result($resultado);

mysqli_close($conexion);
?>
<a href='mostrarCatalogo.php'>Volver</a>
</body>
</html>