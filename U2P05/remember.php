<html>
<head>
<title>Formulario alumnos</title>
 <link rel="stylesheet" type="text/css" href="formulario.css">
 <style type="text/css">

</style>
</head>
<body>
<?php
$nombreErr = $apellidosErr = $passwordErr = $emailErr = $fechaErr = $direccionErr = $telefonoErr = $cicloErr = "";
$nombre = $apellidos = $password = $email = $fecha = $direccion = $telefono = $ciclo = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nombre"])) {
        $nombreErr = "Introduzca el nombre";
    }else{
  $nombre = test_input($_POST["nombre"]);
    }
    if (empty($_POST["apellidos"])) {
        $apellidosErr = "Introduzca sus apellidos";
    }else{
  $apellidos = test_input($_POST["apellidos"]);
    }
    if (empty($_POST["password"])) {
        $passwordErr = "Intoroduzca su contraseña";
    }else{
  $password = test_input($_POST["password"]);
    }
    if (empty($_POST["email"])) {
        $emailErr = "Introduzca su email";
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Formato de email invalido";
        }
    }else{
  $email = test_input($_POST["email"]);
    }
    if (empty($_POST["fecha"])) {
        $fechaErr = "Introduzca su fecha";
    }else{
  $fecha = test_input($_POST["fecha"]);
    }
    if (empty($_POST["direccion"])) {
        $direccionErr = "Introduzca su direccion";
    }else{
  $direccion = test_input($_POST["direccion"]);
    }
    if (empty($_POST["telefono"])) {
        $telefonoErr = "Introduzca su telefono";
    }else{
  $telefono = test_input($_POST["telefono"]);
    }
    if (empty($_POST["ciclo"])) {
        $cicloErr = "Introduzca su ciclo formativo";
    }else{
  $ciclo = test_input($_POST["ciclo"]);
    }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div>
<h2>Rellene el siguiente formulario:</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<label>Nombre:</label><input type="text" name="nombre" value="<?php echo $nombre;?>">
<span class="error"> <?php echo $nombreErr;?></span><br><br>
<label>Apellidos:</label><input type="text" name="apellidos" value="<?php echo $apellidos;?>">
<span class="error"> <?php echo $apellidosErr;?></span><br><br>
<label>Password:</label><input type="password" name="password" value="<?php echo $password;?>">
<span class="error"> <?php echo $passwordErr;?></span><br><br>
<label>Email:</label><input type="text" name="email" value="<?php echo $email;?>">
<span class="error"> <?php echo $emailErr;?></span><br><br>
<label>Fecha de nacimiento:</label><input type="date" name="fecha" value="<?php echo $fecha;?>">
<span class="error"> <?php echo $fechaErr;?></span><br><br>
<label>Direccion:</label><input type="text" name="direccion" value="<?php echo $direccion;?>">
<span class="error"> <?php echo $direccionErr;?></span><br><br>
<label>Télefono:</label><input type="number" name="telefono" value="<?php echo $telefono;?>">
<span class="error"> <?php echo $telefonoErr;?></span><br><br>
<label>Ciclo Formativo:</label><input type="text" name="ciclo" value="<?php echo $ciclo;?>">
<span class="error"> <?php echo $cicloErr;?></span><br><br>
<input type="submit" name="enviar" value="Enviar">
</form>
</div>
</body>
</html>
