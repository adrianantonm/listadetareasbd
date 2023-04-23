<?php
if(isset($_POST["usuario"]) && isset($_POST["contrasena"])){
    $usuario=$_POST["usuario"];
    $contrasena=$_POST["contrasena"];
}

if(($usuario=="Ana" or $usuario=="Marta" or $usuario=="Jose" or $usuario=="Sergio") && ($contrasena=="123456")){
    session_start();
    header("Location:lista.php");
}
else{
    header("location:index.php");
}

?>
