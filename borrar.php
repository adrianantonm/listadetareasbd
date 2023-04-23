<?php
include_once "conexion.php";
if (isset($_GET["id"])){
    try{
        $con=getConexion();
        $sql="DELETE FROM lista WHERE id_tarea>0";
        $st=$con->prepare($sql);
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
