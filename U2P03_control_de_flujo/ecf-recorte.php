<html>
<head>
<title>
bienvenidos ecf-recorte
</title>
</head>
<body>
<p>introduce tu nombre</p>
<form action="ecf-recorte.php" method="post">
nombre<input type="text" name="X">
<input type="submit" name="Pasar datos">
</form>
<?php
$x=$_POST["X"];
for($i=strlen($x);$i>-1;$i--){
    for($h=0;$h<$i-1;$h++){
        echo $x[$h];
    }
    echo "<br>";
}
?>
</body>
</html>