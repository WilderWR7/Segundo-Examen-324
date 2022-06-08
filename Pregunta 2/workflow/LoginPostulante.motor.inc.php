<?php
    session_start();
    include "conexion.inc.php";
    $password=$_GET["password"];
    $email=$_GET["email"];
    $sql="select * from basededatos.usuarios where password ='$password' and email ='$email'";
    $resultado=mysqli_query($con, $sql);
    $fila=mysqli_fetch_array($resultado);
    $_SESSION['username']=$fila['user'];
    $_SESSION['rol']=$fila['Rol'];
    if(isset($fila)){
    return header("Location: Home.php");
    }
    else {
    return header("Location: LoginPostulante.php");

    }

?>  