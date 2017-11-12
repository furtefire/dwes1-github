<?php
include ("Disco.php");
if(!isset($_POST['enviar'])){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>"method="post">
  	Cantante:<input type="text" name="cantante">
  	Titulo:<input type="text" name="titulo">
  	ventas:<input type="number" name="ventas">
  	Storage:<input type="number" name="storage">
  	Genero:<input type="number" name="genero">
  	<input type="submit" name="enviar">
    </form>
    <?php 
}else{
    $cantante=$_POST["cantante"];
    $titulo=$_POST["titulo"];
    $ventas=$_POST["ventas"];
    $storage=$_POST["storage"];
    $genero=$_POST["genero"];
    $ti = new Tienda($cantante, $titulo, $ventas, $storage, $genero);
    echo "<p>Mi tienda tiene:".$ti->__toString()."</p>";
  	$ti->setCantante("Julio Iglesias");
    $ti->setGenero("heavy metal");
    echo "<br>";
    echo "<p>Mi tienda tiene:".$ti->__toString()."</p>";
    $ti->setStorage("200000");
    $ti->getTitulo("Soy un Truan soy un señor");
    $ti->setVentas("755144959.3");
    foreach ($ti as $clave => $valor) {
        echo "$clave => $valor\n";
    }
    echo "<br>";
    echo "".$ti->__toString()."<br>";
    
}
?>