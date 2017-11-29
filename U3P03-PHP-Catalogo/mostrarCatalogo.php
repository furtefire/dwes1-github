<html>
<head>
	<title>Conexion a discos</title>
	<meta charset="UTF-8"/>
</head>
<body>
<h2>Clase Discos</h2>
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
$conexion = new mysqli($servidor,$usuario,$clave,"catalogo16");
$conexion->query("SET NAMES 'UTF8'");
?>
<table style='border:0'>
<tr style='background-color:lightblue'>
	<th>Cod</th>
	<th>Nombre</th>
	<th>fch_salida</th>
	<th>Descrip</th>
	<th>Autor</th>
	<th>Img</th>
	<th>nombre_dj</th>
</tr>
<?php
$resultado = $conexion -> query("SELECT * FROM disco ORDER BY cod_disco");
$ruta="img/";
$aux=$conexion -> query("select nombre_dj from autor_dj,disco where autor_dj.cod_DJ=disco.autor order by nombre_dj");
if($resultado->num_rows === 0) echo "<p>No hay discos en la base de datos</p>";
while($fila=$resultado->fetch_assoc()) {
    echo "<tr style='background-color:lightgreen'>";
    echo "<td>$fila[cod_disco]</td>";
    echo "<td>$fila[nombre_disco]</td>";
    echo "<td>$fila[fecha_salida]</td>\n";
    echo "<td>$fila[descripcion]</td>";
    echo "<td>$fila[autor]</td>";
    echo "<td><img src='$ruta$fila[img_disco]'
height=100px width=90px></td>\n";

    while ($sor=$aux->fetch_assoc()){
        echo "<td>$sor[nombre_dj]</td>";        
    }
    echo "</tr>";
}
?>
</table>

<?php 
mysqli_close($conexion);
?>
<a href=''></a>
</body>
</html>