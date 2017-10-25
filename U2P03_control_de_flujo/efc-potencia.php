<html>
<head>
<title>
bienvenidos ecf-diferencia
</title>
</head>
<body>
<p>Introduce dos numeros para calcular su potencia</p>
<form action="efc-potencia.php" method="post">
Numero1: <input type="text" name="A">
Numero2: <input type="text"  name="B">
<input type="submit" name="Pasar datos">
</form>
<?php
$a=$_POST["A"];
$b=$_POST["B"];
$mul=1;
for($i=0;$i<$b;$i+=1){
    $mul*=$a;
}
echo $mul;
?>
</body>
</html>