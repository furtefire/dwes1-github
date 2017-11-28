<html>
<head>
	<title>Conexión a BBDD con PHP</title>
	<meta charset="UTF-8"/>
</head>
<body>
<h2>Pruebas con la base de datos de animales</h2>
<?php
$servidor = "localhost";
$usuario = "alumno_rw";
$clave = "alumno_rw";
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
echo "<h2>Listado de cuidadores</h2>";
echo "<h3>Pulsa en cada cuidador para ver los animales de los que se ocupa</h3>";

$resultado = $conexion-> query("SELECT * FROM cuidador");
if($resultado->num_rows === 0) echo "<p>No hay cuidadores en la base de datos</p>";
echo "<ul>\n";
while($fila=$resultado->fetch_assoc()) {
    echo "<li><a href='cuidador.php?idCuidador=$fila[idCuidador]'>$fila[Nombre]</a></li>\n";
    // Ejemplo: <li><a href='cuidador.php?idCuidador=12345'>Alberto</a></li>
}
echo "</ul>";
mysqli_close($conexion);
?>
<a href='Enlaces.php'>Volver</a>
</body>
</html>