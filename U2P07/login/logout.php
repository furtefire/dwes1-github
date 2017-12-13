<?php
session_start();
unset($_SESSION["sesion1"]);
header("location:login.php");
?>