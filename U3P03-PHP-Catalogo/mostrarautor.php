<html>
<head>
	<meta charset="UTF-8"/>
</head>
<body>
<?php
$servidor = "localhost";
$usuario = "alumno";
$clave = "alumno";
include ('Autor.php'); 
$conexion = new mysqli($servidor,$usuario,$clave,"catalogo16");
$conexion->query("SET NAMES 'UTF8'");
if (!isset($_REQUEST["cod_DJ"])) die ("<h3>ERROR en la petición. Falta identificador del Autor</h3>");
$id = $_REQUEST["cod_DJ"];
?>
<table style='border:0'>
<tr style='background-color:gold'>
	<th>Cod</th>
	<th>Nombre</th>
	<th>nacionalidad</th>
	<th>Descripcion</th>
	<th>genero musical</th>
	<th>imagen</th>
</tr>
<?php
$resultado = $conexion -> query("SELECT * FROM autor_dj where cod_DJ=".$id."");
if($resultado->num_rows === 0) echo "<p>has pecado de servicio</p>";
while ($Autor = $resultado->fetch_object('Autor')) {
    echo "<tr bgcolor='silver'>";
    echo "<td>".$Autor->getCod_DJ()."</td>\n";
    echo "<td>".$Autor->getNombre_dj()."</td>\n";
    echo "<td>".$Autor->getNacionalidad()."</td>\n";
    echo "<td>".$Autor->getDescripcion()."</td>\n";
    echo "<td>".$Autor->getGenero_musical()."</td>\n";
    echo "<td>".$Autor->getImg_autor()."</td>\n";   
    echo "</tr>";
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