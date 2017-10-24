<html>
<head>
<title>
bienvenidos ecf-diferencia
</title>
</head>
<body>
<p>Introduce dos numeros</p>
<form action="ecf-diferencia.php" method="post">
Numero1: <input type="text" name="A">
Numero2: <input type="text"  name="B">
<input type="submit" name="Pasar datos">
</form>
<?php
$a=$_POST["A"];
$b=$_POST["B"];
if(($a >-1 && $a<11)&&($b >-1 && $b<11)){
    echo 'Con el bucle While';
    if($a < $b){
 while($a<$b && $a<11){
     echo'*';
     $a+=1;
 }
    }else{
        while($b<$a && $b<11){
            echo'*';
            $b+=1;
        }
    }
    $a=$_POST["A"];
    $b=$_POST["B"];
    if($a < $b){
       for($a;$a<$b;$a++){
           echo'#';
       }
    }else{
        for($b;$b<$a;$b++){
            echo'#';
        }
    }
}

?>
</body>
</html>
