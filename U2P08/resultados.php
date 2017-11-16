<?php
session_name('idsession16');
session_start ();
if (!isset($_SESSION['name'])){
    header('location:registro.php');
}else if(!isset($_SESSION['test1'])){
    header('location:registro.php');
}else if(!isset($_SESSION['test2'])){
        header('location:registro.php');    
}else if(!isset($_SESSION['test3'])){
    header('location:registro.php');
}else{
    if (isset($_REQUEST["cerrarSesion"])) {
        $_SESSION=array();
        session_unset();
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
                );
        }
        session_destroy();
        header('location:registro.php');
    }
    
    ?>
<html>
<head>
<title>Sesiones</title>
<meta charset="UTF-8"/>
</head>
<body>
<?php 
echo "En la pregunta 1  ".$_SESSION['test1']."<br>";
echo "En la pregunta 2  ".$_SESSION['test2']."<br>";
echo "En la pregunta 3  ".$_SESSION['test3']."<br>";
?>
<p><a href="<?php echo $_SERVER['PHP_SELF']."?cerrarSesion=true"?>">Cerrar sesión</a></p>
</body>
</html>
<?php 
}

?>