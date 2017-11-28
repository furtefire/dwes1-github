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
//si quisiéramos hacerlo en dos pasos:
// $conexion = new mysqli($servidor,$usuario,$clave);
// $conexion->select_db("animales");

if ($conexion->connect_errno) {
	echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}
echo "<p>A continuación mostramos algunos registros:</p>";
$resultado = $conexion -> query("SELECT * FROM animal ORDER BY nombre");
$cuida = $conexion-> query("select * from cuidador order by nombre");
if($resultado->num_rows === 0) echo "<p>No hay animales en la base de datos</p>";
if($cuida->num_rows === 0) echo "<p>No hay cuidadores</p>";
$fila=$resultado->fetch_assoc();
$fil=$cuida->fetch_assoc();
while($fila!=null) {
	echo "<hr>";
	echo "Nombre:" . $fila['nombre'];
	echo "<br>Especie: $fila[especie]"; // observa la diferencia en el uso de comillas
	$fila=$resultado->fetch_assoc();
}
mysqli_free_result($resultado);
while($fil!=null) {
    echo "<hr>";
    echo "Nombre:" . $fil['Nombre'];
    echo "<br>id: $fil[idCuidador]"; // observa la diferencia en el uso de comillas
    $fil=$cuida->fetch_assoc();
}
mysqli_free_result($cuida);
echo "<h3>Desconectando...</h3>";
mysqli_close($conexion);
?>
<a href='Enlaces.php'>Volver</a>
</body>
</html>