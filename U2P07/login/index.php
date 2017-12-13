<?php
session_start();
$mensajeError="";
if(!isset($_SESSION['sesion1']))
    header("location:login.php");
else {
?>
<html>
<head>
<style type="text/css">
body{background-color:lightblue};
</style>
</head>
<body>
<?php
$conexion = new mysqli("localhost","alumno","alumno","catalogo16");
$conexion->query("SET NAMES 'UTF8'");
    $resultado = $conexion->query("select * from usuario");
    if($resultado->num_rows === 0)
        header("location:logout.php");
     else{
         while($fila=$resultado->fetch_assoc()) {
             if ($fila["nombre"]==$_SESSION['sesion1']){
             echo "<h1>Bienvenido ".$fila["login"]." ,maquina</h1>";
             }
         }
     }
?>
<a href="logout.php">Cerrar sesion</a>
<a href="baja.php">Eliminar cuenta</a>
</body>
</html>
<?php 
    }
?>