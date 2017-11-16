<?php
session_name('idsession16');
session_start ();
if (!isset($_SESSION['name'])){
    header('location:registro.php');
}else{
    $mensaje="bienvenido ".$_SESSION['name'];
}
?>
<html>
<head>
<title>Sesiones</title>
<meta charset="UTF-8"/>
</head>
<body>
<h3><?php echo $mensaje;?></h3>
<h2>Puedes comenzar!</h2>
<a href='test1.php'>¡¡COMENCEMOS!!</a>
</body>
</html>