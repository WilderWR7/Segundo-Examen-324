<?php
    session_start();
include "conexion.inc.php";
include "header.php";
$user =  $_SESSION['username'];
    echo "Bienvenid@ ".$user;

?>


<div class="container-center" >
        <div class="d-f">
<?php

$sql="select * from basededatos.usuarios where user = '$user'";
$resultado=mysqli_query($con, $sql);
$fila=mysqli_fetch_array($resultado);
$r=$fila['inscripcion'];
if($r == 0){
    print "<a  class='linkHome' href='principal.php?flujo=F1&proceso=P1'>Inscripcion</a><br/>";
}
?>
    <a  class="linkHome" href="bandeja.php">Bandeja</a>
    </div>

</div>


