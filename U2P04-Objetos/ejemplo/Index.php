<html>
<head>
<title>
Ejemplo de objetos
</title>
</head>
<body>
<p>Inserte base y altura</p>
<form action="Index.php" method="post">
Base: <input type="number" name="alt">
Altura:<input type="number" name="bas">
<input type="submit" name="Pasar datos">
</form>
<?php
include 'Triangulo.php';
if (isset($_POST["enviar"])){
    $tri1 = new Triangulo($_POST["alt"] , $_POST["bas"]);
echo "<p>Area: ".$tri1->calcularArea()."</p>";
echo $tri1;
}
?>
</body>
</html>