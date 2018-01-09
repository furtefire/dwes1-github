<?php
$rutaArchivo = "./files/Garchivos.txt";
$mensajeError = "";
if (file_exists($rutaArchivo)) {
    if (isset($_POST['anadir']))
        $anadir = false;
    if (isset($_POST['eliminar']))
        $eliminar = true;
    
    $apto = false;
    if (filesize($rutaArchivo) > 0)
        $mensajeError = "Archivo vacio";
    $array = file($rutaArchivo);
    unlink($rutaArchivo);
    if (isset($_POST['enviar'])) {
        if ($anadir) {
            foreach ($array as $aux) {
                if ($apto == false)
                    if ($aux == $_POST['nombre'])
                        $apto = false;
                    else
                        $apto = true;
            }
            if ($eliminar) {
                foreach ($array as $aux) {
                    if ($apto == false)
                        if ($aux != $_POST['nombre']) {
                            $apto = false;
                            $mensajeError = "No existe ese nombre para eliminar";
                        } else {
                            $apto = true;
                            $mensajeError = "";
                        }
                }
            }
            
            if ($anadir && $apto) {
                array_push($array, $_POST['nombre']);
                sort($array);
                $archivo = fopen($rutaArchivo, "a") or die("Imposible abrir archivo");
                foreach ($array as $aux) {
                    fwrite($archivo, $aux + "\n");
                }
                fclose($archivo);
            }
            if ($eliminar && $apto) {
                foreach ($array as $aux) {
                    if ($aux == $_POST['nombre']) {
                        unset($aux);
                    }
                }
                sort($array);
                $archivo = fopen($rutaArchivo, "a") or die("Imposible abrir archivo");
                foreach ($array as $aux) {
                    fwrite($archivo, $aux + "\n");
                }
                fclose($archivo);
            }
        }
        if (isset($_POST['mostrar'])) {
            $archivo = fopen($rutaArchivo, "r") or die("Imposible abrir el fichero");
            while (!feof($archivo)) {
                echo fgets($archivo) . "<br/>";
            }
            fclose($archivo);
        }
    }
}
?>
<html>
<head>
<title>Gestion de archivos</title>
<meta charset="UTF-8" />
</head>
<body>

	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
		Nombre:<input type="text" name="nombre"> 
		añadir:<input type="radio" value="anadir" name="apto"> 
		eliminar:<input type="radio" value="eliminar" name="apto"> 
				<input type="submit" name="enviar" value="enviar"> 
				<input type="submit" name="enviar" value="mostrar">
	</form>

</body>
</html>