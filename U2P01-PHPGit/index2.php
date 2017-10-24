<html>
<head>
<meta charset="UTF-8"/>
</head>
<body>
<?php
//hacer arrays 
//Primera forma
$ciclos = array("SMR","ASIR","DAM");
//segunda forma
$ciclos2 = array(0=>"SMR",1=>"ASIR" , 4=>"DAM");
//tercera forma
$ciclos3 = array();
$ciclos3[0]="SMR";
$ciclos3[1]="ASIR";
$ciclos3[4]="DAW";
var_dump($ciclos);
echo "</br>";
print_r($ciclos);
echo "</br>";
echo "<ul>";
foreach ($ciclos as $actual){
    echo "<li>$actual</li>";
}
echo "</ul>";

//arrays asociativos
//Primera forma
//  array asociativo Clave     Valor     clave       valor    clave      valor
$capitales = array ("España"=>"Madrid","Portugal"=>"Lisboa","Francia"=>"Paris");
//Segunda forma
$horas["DWES"]=9;
$horas["DAW"]=4;
$horas["EIE"]=3;
//imprimir contenido
print_r($capitales);
echo "<p></p>";
print_r($horas);
//arrays y estructuras de control
//recorrer arrays asociativos
echo "<ul>";
foreach($capitales as $cama){
    echo "<li>$cama</li>";
}
echo "</ul>";
//si queremos la clave hay que darle nombre
echo "<ul>";
foreach($horas as $asignaturas => $hora){
    echo "<li>La asignatura $asignaturas tiene $hora horas</li>"; 
}
echo "</ul>";
//ordenacion de arrays
//array normal de la a a la z
sort($ciclos3);
print_r($ciclos3);
echo "<p></p>";
//array normal de la z a la @author Alumno
rsort($ciclos3);
print_r($ciclos3);
echo "<p></p>";
//ordenacion de arrays asociativos por sus valores
//array asociativo por valor de la a a la z
asort($capitales);
print_r($capitales);
echo "<p></p>";
//array asociativo por valor de la z a la @author Alumno
arsort($capitales);
print_r($capitales);
echo "<p></p>";
//ordenacion de array asociativos por sus claves
//array por sus claves de la a la z
ksort($horas);
print_r($horas);
echo "<p></p>";

//array por sus claves de la z a la @author Alumno
krsort($horas);
print_r($horas);
echo "<p></p>";



?>
</body>
</html>