<?php
session_start();
if(isset($_REQUEST["cerrarSesion"])){
    unset($_SESSION ["sesion1"]);
    header("location:login.php");
}
if (isset($_SESSION["sesion1"])){
    header("location: index.php");
}else{
    $mensajeError="";
    if(isset($_POST['enviar'])){
        if (empty($_POST["login"])){
            $mensajeError="El nombre de usuario o la contraseña esta vacio";
        }else if(empty($_POST["passwd"])){
            $mensajeError="El nombre de usuario o la contraseña esta vacio";
            
        }else{
            $conexion = new mysqli("localhost","alumno","alumno","catalogo16");
            $resultado = $conexion->query("select * from usuario");
            if($resultado->num_rows === 0) $mensajeError="No hay usuarios en la base de datos";
            while($fila=$resultado->fetch_assoc()) {
                $mensajeError="";
                if ($fila["login"]!=$_POST["login"]){
                    $mensajeError="El nombre de usuario no coincide";
                }else if($fila["password"]!=$_POST["passwd"]){
                    $mensajeError="La contraseña no coincide";
                }else if(empty($mensajeError)){
                    $_SESSION["sesion1"]=$_POST["login"];
                    header("location: index.php");
                }
            }
        }
    }
    ?>
        <html>
        <head><title>Login</title>
        	<style type="text/css">
        	   form div{text-align: center;}
        	   a:link{text-decoration: none}
        	   a:visited{color:blue;}
        	   a:active{color:red;}
        	   a:hover{font-weight: bold;}
        	   div h3{color:red;}
        	   body{background-color:lightblue};
        	</style>
        </head>
        <body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"],ENT_QUOTES,"UTF-8")?>" method="post">
            <div>
                <p>Nombre de usuario</p>
                <input type="text" name="login"><br>
                <p>Password</p>
                <input type="password" name="passwd"><br><br>
           		<input type="submit" name="enviar">
           		<p>¿Aún no tienes cuenta? </p>
           		<p><a href="alta.php">Haz clic aquí para crear una</a></p>
           		<?php if (!empty($mensajeError)){
           		   echo "<h3>".$mensajeError."</h3>";
                }?>
            </div>
        </form>
        </body>
        </html>
    <?php

}
?>