<html>
<head>
<title>
bienvenidos ecf-factorial
</title>
</head>
<body>
<p>introduce un numero para calcular su faactorial</p>
<form action="ecf-factorial.php" method="post">
Numero<input type="text" name="X">
<input type="submit" name="Pasar datos">
</form>
<?php
$x=$_POST["X"];
$h=1;
for($i=1;$i<=$x;$i++){
    $h*=$i;
}
echo "El factorial de: ".$x." es: ";
echo $h;
?>
</body>
</html>