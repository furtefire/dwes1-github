<html>
<head>
<title>Baja Usuario</title>
<style type="text/css">
body{background-color:lightblue};
</style>
</head>
<body>
<?php
$mensajeError = "";
session_start();
if (!isset($_SESSION['sesion1'])){
    header("location:admin-login.php");
}else{
    $conexion = new mysqli("localhost","alumno_rw","alumno_rw","examen1718-1ev-sigurros");
    $conexion->query("SET NAMES 'UTF8'");
    $resultado = $conexion->query("select nombre from discos'");
    if ($resultado->num_rows === 0)
        $mensajeError="fallo en la consulta sql";
        
        while ($Disco = $resultado->fetch_object('Cdiscos')) {
           
       echo "<p>" . $Disco->getNombre() . "         </p>\n"; 
       echo "<a href='admin-baja.php?petar=".$Disco->getNombre() ."'>eliminar</a>";
}
if (isset($_REQUEST['petar'])){
    $usu=$_REQUEST['petar'];
}
    $conexion->query("delete from discos where nombre = $usu");
    $conexion->query("delete from temas where nombre_i = $usu");
}

?>
</body>
</html>