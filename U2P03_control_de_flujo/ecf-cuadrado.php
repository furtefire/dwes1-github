<html>
<head>
<title>
bienvenidos ecf-cuadrado
</title>
</head>
<body>
<p>Introduzca un numero X para saber su cuadrado</p>
<form action="ecf-cuadrado.php" method="post">
Numero1: <input type="number" name="X">
<input type="submit" name="Pasar datos">
</form>
<?php
$x=$_POST["X"];
$cont=$x;
$aux=1;
for($i=1;$i<=$x;$i++){
    $aux=$i;
    $cont=$x*$i;
    for($aux;$aux<=$cont;$aux++){
        echo "<td>".$i*$aux."</td>";
    }
    echo "<br>";
   

}
?>
</body>
</html>