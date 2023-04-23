<?php
    include_once "conexion.php";
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
        h1{
            text-align: center;
        }
        body{

            font-family: Arial;
        }
        input{
            width: 60%;
            height: 30px;
        }
        form{
            text-align: center;
        }
        button{
            width: 61%;
            height: 40px;
            color: white;
            background-color: dodgerblue;
            border: none;
            border-radius: 2px;
        }
    </style>
</head>
<body>
<h1>Lista de tareas</h1>
<form action="creacion.php" method="post">
    <input type="text" id="tarea" placeholder="Escriba una nueva tarea" name="tarea"><br><br>
    <button>Añadir</button>
</form>
<section>
    <h2>Lista</h2>

        <?php
        $con=getConexion();
        $sql="SELECT id_tarea,tarea FROM lista";
        $st=$con->prepare($sql);
        $st->execute();
        $st->bind_result($id,$tarea);
        while($st->fetch()){
            echo $tarea;
        }
        $con->close();
        ?>
    </ul>
</section>
<a href="login.php">Volver</a>
<a href="borrar.php?id=$id">Borrar</a>
</body>
</html>
