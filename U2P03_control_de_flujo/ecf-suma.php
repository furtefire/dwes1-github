<html>
<head>
<title>
bienvenidos ecf-suma
</title>
</head>
<body>
<p>Pichón de mote introduce un numero para hayar su suma</p>
<form action="ecf-suma.php" method="post">
Numero<input type="text" name="X">
<input type="submit" name="Pasar datos">
</form>
<?php
$x=$_POST["X"];
$h=0;
for($i=0;$i<=$x;$i+=1){
    $h+=$i;
}
echo $h;
?>
</body>
</html>