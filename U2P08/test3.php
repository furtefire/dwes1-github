<?php
session_name('idsession16');
session_start ();
if (!isset($_SESSION['name'])){
    header('location:registro.php');
}else if(!isset($_SESSION['test2'])){
    header('location:test2.php');
    
}else{
    if (isset($_POST['enviar'])){
        if ($_POST['dictador']=="kim"){
            $_SESSION['test3']="Tu respuesta es correcta";
            header('location:resultados.php');
        }else{
            $_SESSION['test3']="Tu respuesta no es correcta";
            header('location:resultados.php');
        }
    }
    
    ?>
<html>
<head>
<title>Sesiones</title>
<meta charset="UTF-8"/>
</head>
<body>
<h2>Pregunta 3</h2>
<div>¿Quien es el Dictador mas asiatico?</div>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	kim jong un:<input type="radio" value="kim" name="dictador">
	Vladimir Putin:<input type="radio" value="putin" name="dictador">
	Donald Trump:<input type="radio" value="donal" name="dictador">
    <input type="submit" name="enviar">
	</form> 
</body>
</html>
<?php 
}

?>