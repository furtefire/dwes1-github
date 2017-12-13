<?php
$mensajeError = "";
if (isset($_POST['enviar'])) {
    if (empty($_POST['login'])) {
        $mensajeError = "Falta el usuario";
        echo $mensajeError;
    } else if (empty($_POST['passwd'])) {
        $mensajeError = "Falta Contraseña";
    } else {
        $conexion = new mysqli("localhost","alumno_rw","alumno_rw","catalogo16");
        $conexion->query("SET NAMES 'UTF8'");
        $resultado = $conexion->query("select * from usuario");
        if ($resultado->num_rows === 0)
            $mensajeError = "no hay usuarios en la base de datos";
        while ($fila = $resultado->fetch_assoc()) {
            if ($fila['login'] == $_POST['login']) {
                $mensajeError = "Ya existe un usuario con ese nombre ";
            } else {
                $conexion->query("INSERT INTO `usuario` (`login`, `password`, `nombre`, `admin`, `descripcion`)
                    VALUES ('" . $_POST["login"] . "', '" . $_POST["passwd"] . "', '" . $_POST["nombre"] . "', '" . $_POST["cuenta"] . "', '" . $_POST["descripcion"] . "');");
                if (! empty($conexion->error)) {
                    $mensajeError = $conexion->error;
                } else {
                    header("location:login.php");
                }
            }
        }
    }
}
    

?>
<html>
<head>
<title>Alta Usuario</title>
<style type="text/css">
body {
	background-color: lightblue;
}

form div {
	text-align: center;
}

a:link {
	text-decoration: none
}

a:visited {
	color: purple;
}

a:active {
	color: yellow;
}

a:hover {
	font-weight: silver;
}

div h3 {
	color: gold;
}

</style>
</head>
<body>
<?php if (!empty($mensajeError)){
    echo "<p>$mensajeError</p>";
}?>
<form
		action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"],ENT_QUOTES,"UTF-8")?>"
		method="post">
		<div>
			<p>Nombre de usuario</p>
			<input type="text" name="login">
			<p>Password</p>
			<input type="password" name="passwd">
			<p>Nombre completo</p>
			<input type="text" name="nombre">
			<p>Tipo de cuenta</p>
			Estándar<input type="radio" name="cuenta" value=0> Administrador<input
				type="radio" name="cuenta" value=1>
			<p>Descripción</p>
			<input type="text" name="descripcion"><br>
			<br> <input type="submit" name="enviar">
			<p>¿Ya tienes cuenta?</p>
			<p>
				<a href="login.php"> Haz clic aquí para iniciar sesión</a>
			</p>
           		<?php if (!empty($mensajeError)){
           		   echo "<h3>".$mensajeError."</h3>";
                }?>
            </div>
	</form>
</body>
</html>