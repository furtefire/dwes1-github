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
echo  "Mi nombre es ".$x;
?>
</body>
</html>