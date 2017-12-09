<html>
<head>
<title>Conexion a discos</title>
<meta charset="UTF-8" />
</head>
<body>
	<h2>Clase Discos</h2>
<?php
$servidor = "localhost";
$usuario = "alumno";
$clave = "alumno";
$conexion = new mysqli($servidor, $usuario, $clave, "catalogo16");
$conexion->query("SET NAMES 'UTF8'");
?>
   <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
		¿A quien buscamos?:<input type="text" name="nombre"> <input
			type="submit" name="enviar">
	</form>

	<table style='border: 0'>
		<tr style='background-color: lightblue'>
			<th>Cod</th>
			<th>Nombre <a href="<?php echo $_SERVER['PHP_SELF'];?>?mayor=1">&#9650;</a>
				<a href="<?php echo $_SERVER['PHP_SELF'];?>?menor=1">&#9660;</a></th>
			<th>Fch_salida</th>
			<th>Descripcion</th>
			<th>Img</th>
			<th>Nombre_dj</th>
			<th>Datos</th>
		</tr>
<?php
include ('Disco.php');
include ('Autor.php');
if (isset($_REQUEST['mayor'])) {
    $resultado = $conexion->query("SELECT * FROM disco ORDER BY nombre_disco ASC");
} else if (isset($_REQUEST['menor'])) {
    
    $resultado = $conexion->query("SELECT * FROM disco ORDER BY nombre_disco DESC");
} else {
    $resultado = $conexion->query("SELECT * FROM disco ORDER BY cod_disco");
}

if (isset($_POST['enviar'])) {
    $busqueda = $conexion->query("select cod_disco from disco,autor_dj where autor_dj.cod_DJ=disco.autor and nombre_dj like '%".$_POST['nombre']."%' group by cod_disco");
    if ($busqueda->num_rows ===0) echo "ERROR no existe";
    else {
        $busqueda2 = $busqueda->fetch_assoc();
        header("location:mostrarObra.php?cod_disco=".$busqueda2['cod_disco']."");
    }
    
}
if ($resultado->num_rows === 0)
    echo "<p>Piciada padre</p>";

while ($Disco = $resultado->fetch_object('Disco')) {
    echo "<tr bgcolor='lightgreen'>";
    echo "<td>" . $Disco->getCod_disco() . "</td>\n";
    echo "<td>" . $Disco->getNombre_disco() . "</td>\n";
    echo "<td>" . $Disco->getFecha_salida() . "</td>\n";
    echo "<td>" . $Disco->getDescripcion() . "</td>\n";
    echo "<td>" . $Disco->getImg_diso() . "</td>\n";
    $aux = $conexion->query("select nombre_dj from autor_dj where cod_dj=" . $Disco->getAutor() . "");
    
    if ($aux->num_rows === 0)
        echo "<p>No se encontró el autor</p>";
    else {
        $aux2 = $aux->fetch_assoc();
        echo "<td><a href='mostrarObra.php?cod_disco=".$Disco->getCod_disco()."'>" . $aux2['nombre_dj'] . "</a></td>\n";
    }
    $aux3 = $conexion->query("SELECT cod_DJ from autor_dj where nombre_dj like '%" . $aux2['nombre_dj'] . "%'");
    if ($aux3->num_rows === 0)
        echo "<td>Autor anonimo</td>";
    else {
        $aux4 = $aux3->fetch_assoc();
        echo "<td><a href='mostrarautor.php?cod_DJ=" . $aux4['cod_DJ'] . "'>ver</a></td>\n";
    }
    echo "</tr>";
    mysqli_free_result($aux3);
    mysqli_free_result($aux);
    if (isset($_POST['enviar']) && $busqueda->num_rows !==0)
    mysqli_free_result($busqueda);
}
?>
</table>
<?php
mysqli_close($conexion);
?>
<a href=''></a>
</body>
</html>