<html>
<head>
<title>
bienvenidos ecf-acumulador
</title>
</head>
<body>
<p>Introduce dos numeros</p>
<form action="ecf-acumulador.php" method="post">
Numero1: <input type="hidden" name="A"><?php
if($_POST!=50)
$x+=$_POST["A"];
?>

<input type="submit" name="Pasar datos">
</form>
<?php
echo $_POST["A"];

?>
</body>
</html>