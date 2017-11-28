<html>
<head>
	<title>Conexión a BBDD con PHP</title>
	<meta charset="UTF-8"/>
</head>
<body>
<h2>Pruebas con la base de datos de animales</h2>
<?php
$servidor = "localhost";
$usuario = "alumno";
$clave = "alumno";
?>
<p> Vamos a utilizar las siguientes variables:</p>
<ul>
<?php
echo "<li>Nombre del servidor al que nos vamos a conectar a MySQL: $servidor</li>";
echo "<li>Nombre de usuario con el que nos vamos a conectar a MySQL: $usuario</li>";
echo "<li>Contraseña del usuario en MySQL: $clave</li>";
?>
</ul>
<!-- PRUEBAS: -->
<?php
$conexion = new mysqli($servidor,$usuario,$clave,"animales");
$conexion->query("SET NAMES 'UTF8'");
?>
<table style='border:0'>
<tr style='background-color:lightblue'>
	<th>Chip</th>
	<th>Nombre</th>
	<th>Especie</th>
	<th>Imagen</th>
</tr>
<?php
$resultado = $conexion -> query("SELECT * FROM animal ORDER BY nombre");
$ruta="img/";
if($resultado->num_rows === 0) echo "<p>No hay animales en la base de datos</p>";
while($fila=$resultado->fetch_assoc()) {
    echo "<tr style='background-color:lightgreen'>";
    echo "<td>$fila[chip]</td>";
    echo "<td>$fila[nombre]</td>";
    echo "<td>$fila[especie]</td>\n";
    echo "<td><img src='$ruta$fila[imagen]'
height=100px width=90px></td>\n";
    echo "</tr>";
}
?>
</table>

<?php 
mysqli_close($conexion);
?>
<a href='Enlaces.php'>Volver</a>
</body>
</html>