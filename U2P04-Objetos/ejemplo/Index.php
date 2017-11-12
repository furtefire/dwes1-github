<?php 
include ("Triangulo.php");
if(!isset($_POST['enviar'])){ 
?>
<p>Inserte base y altura</p>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
Base: <input type="number" name="bas">
Altura:<input type="number" name="alt">
<input type="submit" name="enviar">
</form>
<?php
}else{
 $base=$_POST['bas'];
 $altura=$_POST['alt'];
 $tri=new Triangulo($base, $altura);
 echo "<p>Area: ".$tri->calcularArea()."</p>";
 $tri->setAltura("12");
 $tri->setBase("45");
 echo "<p> ahora la altura es ".$tri->getAltura()."</p>";
 echo "<p> ahora la base es ".$tri->getBase()."</p>";
}
?>