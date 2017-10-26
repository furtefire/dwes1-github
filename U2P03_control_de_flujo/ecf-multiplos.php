<html>
<head>
<title>
bienvenidos ecf-diferencia
</title>
</head>
<body>
<?php
for($i=1;$i<=1000;$i++){
    if($i%3==0 && $i%5==0){
        echo "<p>".$i." Es multiplo de 3 y 5 </p>";
    }
}
echo "<br>";
echo "<p> Multiplos de 3 y 5 20 veces</p>";
$cont=0;
for($i=1;$i<=1000;$i++){
    if($i%3==0 && $i%5==0 && $cont<=20){
        echo "<p>".$i." Es multiplo de 3 y 5 </p>";
        $cont+=1;
    }
}
?>
</body>
</html>
