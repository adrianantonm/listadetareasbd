<?php

$mysqli_conexion = new mysqli("localhost", "root", "", "practica05");
if($mysqli_conexion->connect_errno) {
    echo "Error de conexión: " . $mysqli_conexion->connect_errno;
    exit;
}
else {
    echo "Conexion correcta";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            text-align: center;
            font-family: Arial;
        }
        input{
            width: 60%;
            height: 30px;

        }
        button{
            width: 61%;
            height: 40px;
            color: white;
            background-color: dodgerblue;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Acceso de usuarios</h1>
    <form action="login.php" method="post">
        <input type="text" id="usuario" placeholder="Escriba su nombre de usuario" name="usuario"><br><br>
        <input type="password" id="contrasena" placeholder="Escriba su contraseña" name="contrasena"><br><br>
        <button type="submit">Entrar</button>

    </form>
</body>
</html>
