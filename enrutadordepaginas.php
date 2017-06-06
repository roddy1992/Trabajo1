<?php
session_start();

if ($_SESSION['valid_tipo'] == "A") {
    header('Location: inicioAdministrador.php');
} 
else {
    if ($_SESSION['valid_tipo'] == "F") {
        header('location: inicioFabrica.php');
    } else {
         if ($_SESSION['valid_tipo'] == "V") {
        header('location: inicioVendedor.php');
    }else {
        header('Location: index.html');
        exit();
    } 
    }
     
}
?>
<html>
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
        <title>Menu Principal</title>
    </head>
    <body align="center">
    <center>FELICIDADES YA ACCEDISTE AL SISTEMA</center>
    <br><br>
    <a href=logout.php>Cerrar Sesion X </a>
</body>
</html>
