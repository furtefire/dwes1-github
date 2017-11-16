<?php

if (!session_status () == PHP_SESSION_NONE){
    
    header('location:index.php');
    
}else{
    if(isset($_POST['enviar'])){
    session_name('idsession16');
    session_start ();
    $_SESSION['name']=$_POST['nombre'];
    header('location:index.php');
    
    }
?>
<html>
<head>
<title>Sesiones</title>
<meta charset="UTF-8"/>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	Nombre:<input type="text" name="nombre">
    <input type="submit" name="enviar">
	</form> 
</body>
</html>
<?php 
}

?>