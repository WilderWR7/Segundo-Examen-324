<?php
    session_start();
    include "conexion.inc.php";
    $user =  $_SESSION['username'];
    
    $nombrefrente=$_GET["nombrefrente"];
    $color1=$_GET["color1"];
    $color2=$_GET["color2"];
    $name=$_GET["name"];
    $ci=$_GET["ci"];
    $matricula=$_GET["matricula"];

    $name=$_GET["name"];
    $ci=$_GET["ci"];
    $matricula=$_GET["matricula"];

    $name1=$_GET["name1"];
    $ci1=$_GET["ci1"];
    $matricula1=$_GET["matricula1"];
    
    $name2=$_GET["name2"];
    $ci2=$_GET["ci2"];
    $matricula2=$_GET["matricula2"];
    
    $name3=$_GET["name3"];
    $ci3=$_GET["ci3"];
    $matricula3=$_GET["matricula3"];
    
    $name4=$_GET["name4"];
    $ci4=$_GET["ci4"];
    $matricula4=$_GET["matricula4"];
    
    $name5=$_GET["name5"];
    $ci5=$_GET["ci5"];
    $matricula5=$_GET["matricula5"];

    $name6=$_GET["name6"];
    $ci6=$_GET["ci6"];
    $matricula6=$_GET["matricula6"];
    
    $name7=$_GET["name7"];
    $ci7=$_GET["ci7"];
    $matricula7=$_GET["matricula7"];
    
    $name8=$_GET["name8"];
    $ci8=$_GET["ci8"];
    $matricula8=$_GET["matricula8"];

    $sql="insert into basededatos.frente values('$nombrefrente','$color1','$color2',-1,'$user')";
    $sql1="insert into basededatos.candidato values('$name','$ci','$matricula',1,'$nombrefrente')";
    $sql2="insert into basededatos.candidato values('$name1','$ci1','$matricula1',2,'$nombrefrente')";
    $sql3="insert into basededatos.candidato values('$name2','$ci2','$matricula2',3,'$nombrefrente')";
    $sql4="insert into basededatos.candidato values('$name3','$ci3','$matricula3',4,'$nombrefrente')";
    $sql5="insert into basededatos.candidato values('$name4','$ci4','$matricula4',5,'$nombrefrente')";
    $sql6="insert into basededatos.candidato values('$name5','$ci5','$matricula5',6,'$nombrefrente')";
    $sql7="insert into basededatos.candidato values('$name6','$ci6','$matricula6',7,'$nombrefrente')";
    $sql8="insert into basededatos.candidato values('$name7','$ci7','$matricula7',8,'$nombrefrente')";
    $sql9="insert into basededatos.candidato values('$name8','$ci8','$matricula8',9,'$nombrefrente')";

    $resultado=mysqli_query($con, $sql);
    $resultado1=mysqli_query($con, $sql1);
    $resultado2=mysqli_query($con, $sql2);
    $resultado3=mysqli_query($con, $sql3);
    $resultado4=mysqli_query($con, $sql4);
    $resultado5=mysqli_query($con, $sql5);
    $resultado6=mysqli_query($con, $sql6);
    $resultado7=mysqli_query($con, $sql7);
    $resultado8=mysqli_query($con, $sql8);
    $resultado9=mysqli_query($con, $sql9);


    // $fila=mysqli_fetch_array($resultado);
    // $_SESSION['username']=$fila['user'];

    ?>


<!-- insert into frente values('git','black','red');
select * from basededatos.usuarios where user ='$name' and email ='$email'";
insert into candidato values('rosa machi','13456749','175417',1,'git'); -->