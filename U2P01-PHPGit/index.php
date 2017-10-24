<html>
<head>
<meta charset="UTF-8"/>
</head>
<body>
<?php
$nombre="sergio";
$apellido="anonimo";
echo "Mi nombre es $nombre mis apellidos son $apellido";
echo 'acabo de de poner entre "Mi nombre es $nombre mis apellidos son $apellido"';

define("ALUMNO" , "Sergio Guijarro Muñoz");

echo "<p>El alumno es ".ALUMNO." </p>";

$a=2;
$b=3;
echo $a+=$b;
echo "<p></p>";
echo $b-=$a;
echo "<p></p>";
echo $b/=$a;
echo "<p></p>";
echo $b.=$a;
echo "<p></p>";
$a=2;
$b=3;
if($a < $b){
    echo "El valor $a es menor";
}
echo "<p></p>";
if($b > $a){
    echo "El valor $a es mayor";
}
echo "<p></p>";
if(isset($a)){
    echo "<p>el valor $a existe</p>";
}

$salseo = "Hola Siri";

echo "<h3> Primer caracter:" .$salseo[0]."</h3>";

echo "<h3>Ultimo caracter:".$salseo[strlen($salseo)-1]."</h3>";

echo"<p>La variable \$a es de tipo ".gettype($a)."</p>";

if(is_numeric($a)){
    echo"<p>La variable ".'$a'." es de tipo ".gettype($a)."</p>" ;
}else{
        echo "La variable no es de tipo numerica";
    }
?>
</body>
</html>