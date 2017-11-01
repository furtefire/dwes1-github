<html>
<head>
<meta charset="UTF-8"/>
</head>
<body>
<?php
//Funciones Declarables en cualquier parte del codigo
function suma($a , $b){
    $resultado = $a + $b;
    return $resultado;    
}
echo "<p>5 y 10 son ".suma(5,10)."</p>";
echo "<br>";
/*para reforzar el tipo de retorno han puesto
 * una novedad en PHP7
 * que obliga a retornar todo aquello que tu 
 * permitas como por ejemplo
 */
function sumaFlo($a,$b):float{
    $resultado = $a + $b;
   return $resultado;
}
echo "<p>5 y 10 son ".sumaFlo(4,7)."</p>";
echo "<br>";
//se puede iniciar un valor por defecto en un parametro
function defValor($a,$b,$imprimir=true){
    $resultado =$a+$b;
    if($imprimir==true)
        echo "<p>Resultado: $resultado</p>";
}
//El resultado se imprime
defValor(950, 8754);
//el resultado no se imprime porque no puede entrar en el if
defValor(975, 324, false);
//Ambito de las variables 
/*
 * Hay dos maneras para poder usar una variable
 * global dentro de una funcion
 */

//indicando si la variable es global
$descuento=21;
function precio($coste){
    global $descuento;
    $total = $coste - $coste * ($descuento/100);
    return $total;
}
echo "<h4>El precio del producto en rebajas es de ".precio(100)."</h4>";
//utilizando la variable superglobal $GLOBALS
function precioSuGlo($coste){
    $total = $coste - $coste *($GLOBALS["descuento"]/100);
    return $total;
}
echo "<h4>El precio del producto en rebajas es de ".precioSuGlo(100)."</h4>";
//Funciones de fecha y hora
function fecha(){
    echo "<h3>hoy es ".date("d-m-y")."y son las ".date("h:i")."</h3>";
    
}
?>
</body>
</html>

