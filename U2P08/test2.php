<?php
session_name('idsession16');
session_start ();
if (!isset($_SESSION['name'])){
    header('location:registro.php');
}else if(!isset($_SESSION['test1'])){
    header('location:test1.php');
    
}else{
    if (isset($_POST['enviar'])){
        if ($_POST['capital']=="paris"){
            $vali=true;
        }else{
            $vali=false;
        }
    }
    
    ?>
<html>
<head>
<title>Sesiones</title>
<meta charset="UTF-8"/>
</head>
<body>
<h2>Pregunta 2</h2>
<div>¿Cual es la capital de Francia?</div>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	paris:<input type="radio" value="paris" name="capital">
	madrid:<input type="radio" value="madrid" name="capital">
	islas caiman:<input type="radio" name="islascaiman" name="capital">
    <input type="submit" name="enviar">
	</form> 
<?php 
if (isset($_POST['enviar']))
    if($vali==true){
        $_SESSION['test2']="Tu respuesta es correcta";
        header('location:test3.php');
}else{
        $_SESSION['test2']="Tu respuesta no es correcta";
        header('location:test3.php');
}
?>

</body>
</html>
<?php 
}

?>