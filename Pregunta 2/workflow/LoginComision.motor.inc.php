<?php
    session_start();
    include "conexion.inc.php";
    $password=$_GET["password"];
    $email=$_GET["email"];
    $sql="select * from basededatos.usuarios where password ='$password' and email ='$email' and cod_user = 2";
    $resultado=mysqli_query($con, $sql);
    $fila=mysqli_fetch_array($resultado);
    $_SESSION['username']=$fila['user'];
 //   $_SESSION['cod_user']=$fila['cod_user'];
    if(isset($fila)){
        return header("Location: principal.php?flujo=F1&proceso=P4");
        }
        else {
        return header("Location: LoginComision.php");
        }
?>   