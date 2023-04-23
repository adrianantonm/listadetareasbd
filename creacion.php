<?php
    include_once "conexion.php";
    if (isset($_POST["tarea"])){
try{
    $con=getConexion();
    $sql="INSERT INTO lista (tarea) VALUES (?)";
    $st=$con->prepare($sql);
    $st->bind_param("s",$_POST["tarea"]);
    $st->execute();
    $st->close();
    $con->close();
}
catch (mysqli_sql_exception $e){
    $error = $e->getCode();
}
    }
    header("location:lista.php");

?>
