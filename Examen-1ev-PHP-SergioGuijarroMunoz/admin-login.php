<?php
$mensajeError="";
$cerrarsesion=false;
session_start();
if (isset($_REQUEST["cerrarSesion"])){
    $cerrarsesion=$_REQUEST["cerrarSesion"];
}

if($cerrarsesion==true){
    unset($_SESSION ["sesion1"]);
    header("location:disco.php");
}

    $mensajeError="";
    if(isset($_POST['enviar'])){
        if (empty($_POST["login"]) || $_POST["login"]!="admin" || !isset($_SESSION['sesion1'])){
            $mensajeError="El nombre de usuario o la contraseña esta vacio";
        }else if(empty($_POST["passwd"]) || $_POST['passwd']!="secreto" || !isset($_SESSION['sesion1'])){
            $mensajeError="El nombre de usuario o la contraseña esta vacio";
            
        }else{
            $_SESSION["sesion1"]='admin';
          echo "<h1>Bienvenido admin</h1>";
          echo "<a href='admin-baja.php'>Dar de baja temas</a>";
          echo "<a href='admin-login.php?cerrarSesion=true'>cerrar sesion</a>";
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
            </div>
        </form>
        </body>
        </html>
    <?php
?>
