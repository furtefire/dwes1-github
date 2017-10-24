<html>
<head>
<meta charset="UTF-8"/>
</head>
<body>
<?php
//variables superglobales
//el nombre del archivo ejecutandose
echo $_SERVER['PHP_SELF'];
echo "<br>";
//contenido de la cabecera ''server de lla peticion HTTP
echo $_SERVER['HTTP_HOST'];
//salida en HTML(mas correcto)
echo "<h4>Agente del usuario utilizado: ".$_SERVER['HTTP_USER_AGENT']."</h4>";
echo "<h4>Ruta del script actual:" .$_SERVER['SCRIPT_NAME']."</h4>";

?>
</body>
</html>

