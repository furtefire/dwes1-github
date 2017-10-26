<html>
<head>
<title>
bienvenidos ecf-multiplicacion
</title>
</head>
<body>
<p>introduce un numero para calcular su tabla de multiplicar</p>
<form action="ecf-multiplicacion.php" method="post">
Numero<input type="text" name="X">
<input type="submit" name="Pasar datos">
</form>
<?php
$x=$_POST["X"];
$h=0;
for($i=0;$i<=10;$i++){
    $h=$i*$x;
    echo $i." X ".$x." = ".$h." <br>";
}

?>
</body>
</html>