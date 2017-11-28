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
$conexion ->query("UPDATE animal SET especie='jabali' WHERE nombre='Babe'");
echo "<h3 style='color:red'>". $conexion->error ."</h3>";
$conexion ->query ("DROP TABLE animal");
echo "<h3 style='color:red'>". $conexion->error ."</h3>";
mysqli_close($conexion);
?>
<a href='Enlaces.php'>Volver</a>
</body>
</html>