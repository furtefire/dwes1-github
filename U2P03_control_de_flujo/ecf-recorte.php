<html>
<head>
<title>
bienvenidos ecf-recorte
</title>
</head>
<body>
<p>introduce una palabra para obtener sus recortes</p>
<form action="ecf-recorte.php" method="post">
Numero<input type="text" name="X">
<input type="submit" name="Pasar datos">
</form>
<?php
$x=$_POST["X"];
for($i=strlen($x);$i>=0;$i--){
    for($h=0;$h<$i;$h++){
        echo "$x[$h]";
    }   
    echo "<br>";
}

?>
</body>
</html>