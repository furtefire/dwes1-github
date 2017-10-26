<html>
<head>
<title>
bienvenidos ecf-meses
</title>
</head>
<body>
<p>introduce un mes para saber su numero de dias y señala si es bisiesto</p>
<form action="ecf-meses.php" method="post">
Mes<input type="text" name="X">
bisiesto<input type="radio" value="si" name="Y">
no bisiesto<input type="radio" value="no" name="Y" checked="checked">
<input type="submit" name="Pasar datos">
</form>
<?php
$x=$_POST["X"];
$b=$_POST["Y"];
switch ($x){
    case 1: 
        echo "31";
        break;
    case 2:
        if ($b=="si"){
            echo "29";
            
        }else{
            echo "28";
        }
       break;
    case 3:
        echo "31";
        break;
    case 4:
        echo "30";
        break;
    case 5:
        echo "31";
        break;
    case 6:
        echo "30";
        break;
    case 7:
        echo "31";
        break;
    case 8:
        echo "31";
        break;
    case 9:
        echo "30";
        break;
    case 10:
        echo "31";
        break;
    case 11:
        echo "30";
        break;
    case 12:
        echo "31";
        break;
}

?>
</body>
</html>