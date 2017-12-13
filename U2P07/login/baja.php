<?php
$mensajeError = "";
session_start();
if (isset($_POST['enviar'])) {
    if (empty($_POST['passwd'])) {
        $mensajeError = "Campo passwd vacio";
        echo $mensajeError;
    } else {
        $user = "\"" . $_SESSION["sesion1"] . "\"";
        $conexion = new mysqli("localhost","alumno_rw","alumno_rw","catalogo16");
        $conexion->query("SET NAMES 'UTF8'");
        $resultado = $conexion->query("select * from usuario where login like $user");
        if ($resultado->num_rows === 0)
            $mensajeError = "no existe el usuario de la base de datos";
        while ($fila = $resultado->fetch_assoc()) {
            $mensajeError = "";
            if ($fila['password'] != $_POST['passwd']) {
                $mensajeError = "No cuinciden las contraseñas";
            } else {
                $conexion->query("delete from usuario where login = $user");
                if (! empty($conexion->error)) {
                    $mensajeError = $conexion->error;
                } else {
                    header("location:logout.php");
                }
            }
        }
    }
}

?>
<html>
<head>
<title>Baja Usuario</title>
<style type="text/css">
body{background-color:lightblue};
</style>
</head>
<body>
	<form
		action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"],ENT_QUOTES,"UTF-8")?>"
		method="post">
		<div>
			<p>Confirma la contraseña para borrar al usuario</p>
			<input type="password" name="passwd"><br> <br> <input type="submit"
				name="enviar">
			<p>
				<a href="index.php">Volver a Index</a>
			</p>
   		<?php
    
if (! empty($mensajeError)) {
        echo "<h3>" . $mensajeError . "</h3>";
    }
    ?>
    </div>
	</form>
</body>
</html>