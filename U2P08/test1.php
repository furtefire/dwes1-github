<?php
session_name('idsession16');
session_start ();
if (!isset($_SESSION['name'])){
    header('location:registro.php');
}else{
   if (isset($_POST['enviar'])){
       if ($_POST['color']=="blanco"){
           $_SESSION['test1']="Tu respuesta es correcta";
           header('location:test2.php');
       }else{
           $_SESSION['test1']="Tu respuesta no es correcta";
           header('location:test2.php');
           }
   }

?>
<html>
<head>
<title>Sesiones</title>
<meta charset="UTF-8"/>
</head>
<body>
<h2>Pregunta 1</h2>
<div>¿De que color es el caballo blanco de santiago?</div>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	blanco:<input type="radio" value="blanco" name="color">
	rosa:<input type="radio" value="rosa" name="color">
	azul:<input type="radio" value="azul" name="color">
    <input type="submit" name="enviar">
	</form> 
</body>
</html>
<?php 
}

?>