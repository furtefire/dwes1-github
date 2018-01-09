<!DOCTYPE html>
<html><head><meta charset='UTF-8'/></head>
<body>
<?php
$rutaArchivo = "files/modulos.txt";
//pruebas
/* prueba 1 lectura de lineas
readfile($rutaArchivo);
*/
/* prueba 2 lectura por array
$lineasArchivo = file ($rutaArchivo);
print_r($lineasArchivo);
*/
/* prueba 3 mostrar rchivo sin separacion de lineas
$archivo = fopen($rutaArchivo, "r") or die("Imposible abrir el archivo");
echo fread($archivo, filesize($rutaArchivo));
fclose($archivo);
*/
/* prueba 4 imprimir el contenido del archivop de forma ordenada
$archivo = fopen($rutaArchivo, "r") or dir("Imposible abrir el fichero");
while (!feof($archivo)){
    echo fgets($archivo) . "<br/>";
}
fclose($archivo);
*/
/*prueba 5 imprimir el archivo de forma ordenada
$archivo = fopen($rutaArchivo, "r") or die("Imposible abrir el archivo");
while (!feof($archivo)){
    $c = fgetc($archivo);
    if (($c == "\n") or ($c == "\r\n"))
        echo "<br/>";
    else 
        echo $c;
}
fclose($archivo);
*/
   /* 
    $archivo = fopen($rutaArchivo, "a") or die("Imposible abrir el archivo");
    fwrite($archivo, "Programacion\n");
    fwrite($archivo, "Entornos de desarrollo");
    fclose($archivo);
  
    $archivo = fopen($rutaArchivo, "r") or dir("Imposible abrir el fichero");
    while (!feof($archivo)){
        echo fgets($archivo) . "<br/>";
    }
    fclose($archivo);
    */
    
    /* el archivo temporal
     $nuevaRuta= "files/nuevo.txt";
     if (file_exists($nuevaRuta))
     echo "el fichero existe";
     else
     echo "El fichero ha sido creado";
     $archivo = fopen($nuevaRuta, "w") or die ("Imposible abrir el archivo");
     
     fwrite($archivo, "nuevo ");
     fclose($archivo);
     // unlink($nuevaRuta); para eliminar el archivo
     */
    
/* prueba para añadir arriba del fichero
    $array = file ($rutaArchivo);
    unlink($rutaArchivo);
    $archivo = fopen($rutaArchivo, "a") or die("Imposible abrir el archivo");
    fwrite($archivo, "Programacion\n");
    fwrite($archivo, "Entornos de desarrollo\n");
   foreach ($array as $aux){
       fwrite($archivo, $aux);
   }
fclose($archivo);
$archivo = fopen($rutaArchivo, "r") or die("Imposible abrir el fichero");
    while (!feof($archivo)){
        echo fgets($archivo) . "<br/>";
    }
    fclose($archivo);
    */
     
     /*Codifica ahora una solución para leer los módulos del archivo y escribirlos ordenados alfabéticamente.
     $array = file ($rutaArchivo);
     sort($array);
     unlink($rutaArchivo);
     $archivo = fopen($rutaArchivo, "a") or die("Imposible abrir el archivo");
     foreach ($array as $aux){
         fwrite($archivo, $aux);
     }
     fclose($archivo);
     $archivo = fopen($rutaArchivo, "r") or die("Imposible abrir el fichero");
     while (!feof($archivo)){
         echo fgets($archivo) . "<br/>";
     }
     fclose($archivo);
    */
    
    
    
    
    
    
    
    
 
    
     
?>
