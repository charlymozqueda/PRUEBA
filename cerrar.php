<?php
//Cerrar secion de forma segura
session_start();
session_unset();
session_destroy();
header("location:login.php");
?>