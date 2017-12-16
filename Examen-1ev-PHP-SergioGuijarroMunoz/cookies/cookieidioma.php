<?php


if (isset($_REQUEST["idioma"]))
    $idioma = $_REQUEST["idioma"];

       if(count($_COOKIE)==0)
           echo "<h3>Advertencia: tu navegador tiene las cookies deshabilitadas. Esta aplicación no funcionará</h3>";
           else
               if(isset($_REQUEST["idioma"])) {
                   setcookie("idioma", $idioma, time() + (86400 * 30), "/Examen-1ev-PHP-SergioGuijarroMunoz"); // 86400 = segundos en 1 día
                   
                   header("Location: ../disco.php");
                   
               }
        ?>
<html><head><meta charset="UTF-8"/></head>
<body style="background-color: <?php echo $fondo; ?>">
<h2>En que idioma deseas verlo</h2>
<ul>
<li><a href="cookieidioma.php?idioma=es"><img src='../img/es.png'></a></li>
<li><a href="cookieidioma.php?idioma=in"><img src='../img/is.png'></a></li>
</ul>
</body>
</html>