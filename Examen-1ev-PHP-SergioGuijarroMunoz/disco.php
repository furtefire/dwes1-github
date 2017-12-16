<?php
$eliminarcookie=false;

if(count($_COOKIE)==0)
    header("location:cookies/cookieidioma.php");
else 
    $idioma=$_COOKIE['idioma'];
    if(isset($_REQUEST["eliminarcookie"])){
        setcookie("idioma", null, time() + -1, "/Examen-1ev-PHP-SergioGuijarroMunoz");
        header("location:cookies/cookieidioma.php");
    }
$mensajeError="";
session_start();
$conexion = new mysqli("localhost","alumno_rw","alumno_rw","examen1718-1ev-sigurros");
$conexion->query("SET NAMES 'UTF8'");

if (isset($_REQUEST["id_disco"]))
$existe=$_REQUEST["id_disco"];
    ?>
    <html>
<head>
<title>disco.php</title>
<meta charset="UTF-8" />
</head>
<body>
   <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
		¿A quien buscamos?:<input type="text" name="nombre">
		 <input	type="submit" name="enviar">
	</form>

    <table style='border: 0'>
    <tr style='background-color: lightblue'>
    <th>Titulo</th>
    <th>Discografia</th>
    <th>Año</th>
    <th>Formato</th>
    <th>Portada</th>
<?php
include ('Cdiscos.php');
if (!isset($existe))
    $resultado = $conexion->query("SELECT distinct * FROM discos");
else if (isset($existe)){
    $resultado =$conexion->query("select * from discos where discografica like '%$existe%' group by id ");
}else if (isset($_POST['enviar'])){
    $bus=$_POST['nombre'];
    $resultado = $conexion->query("select distinct * from discos where nombre like '%$bus%'");
}


if ($resultado->num_rows === 0)
    $mensajeError="fallo en la consulta sql";

while ($Disco = $resultado->fetch_object('Cdiscos')) {
    
    echo "<tr bgcolor='lightgreen'>";
    if($idioma=="es"){
        $con=$Disco->getNombre();
        $aux =$conexion->query("select nombre_e from temas where nombre_i like '%$con%' group by id");
        $aux2=$aux->fetch_assoc();
        echo "<td>" . $aux2['nombre_e'] . "</td>\n"; 
        }    
    else 
        echo "<td>" . $Disco->getNombre() . "</td>\n";   
    echo "<td><a href='disco.php?id_disco=".$Disco->getDiscografica()."'>" . $Disco->getDiscografica() . "</a></td>\n";
    echo "<td>" . $Disco->getYear() . "</td>\n";
    echo "<td>" . $Disco->getSoporte() . "</td>\n";
    echo "<td>" . $Disco->getImagen() . "</td>\n";
 
}

?>
</table>
<?php
mysqli_close($conexion);
?>
<a href='disco.php'>Volver</a>
<a href="disco.php?eliminarcookie=true">cambiar idioma</a>
</body>
</html>