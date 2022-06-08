<?php
    session_start();
    include "conexion.inc.php";
    $user =  $_SESSION['username'];
    $Aceptar=$_GET["Aceptar"];
    $Rechazar=$_GET["Rechazar"];
    if(isset($_GET["Aceptar"])){
        $sql="UPDATE basededatos.frente  set estado = 1 where nombre ='$Aceptar'";
        $resultado=mysqli_query($con, $sql);
        $sql1="UPDATE flujoprocesoseguimiento set rechazo = 'Aceptado' where Usuario ='$user'";
        $resultado1=mysqli_query($con, $sql1);
        //$fila=mysqli_fetch_array($resultado);
        // $_SESSION['username']=$fila['user'];
        // $_SESSION['rol']=$fila['Rol'];
    }
    if(isset($_GET["Rechazar"])){
        $sql="UPDATE basededatos.frente  set estado = 0 where nombre ='$Rechazar'";
        $resultado=mysqli_query($con, $sql);
        $sql1="UPDATE flujoprocesoseguimiento set rechazo = 'Rechazado' where Usuario ='$user'";
        $resultado1=mysqli_query($con, $sql1);
        //$fila=mysqli_fetch_array($resultado);
    }

?>

