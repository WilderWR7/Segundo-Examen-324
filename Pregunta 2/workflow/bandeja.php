<?php
session_start();
include "conexion.inc.php";
include "header.php";

// include "conexion.inc.php";
///$_SESSION["ID_usuario"]=21;
$user= $_SESSION["username"];
// username

$sql="select * from flujoprocesoseguimiento where Usuario='$user'";
// $sql.="and HoraFin is null ";
$resultado=mysqli_query($con, $sql);
?>
        <table>
        <tr>
        <td class="table-header" >Nro Tramite</td>
        <td class="table-header" >Flujo</td>
        <td class="table-header" >Proceso</td>
        <td class="table-header" >Rechazo</td>
        <td class="table-header"  >Operacion</td>
        </tr>
        <?php 
        while ($fila=mysqli_fetch_array($resultado))
        {
        print "<tr>
        <td class='tables'>{$fila["id"]}</td>
        <td class='tables'>{$fila["Flujo"]}</td>
        <td class='tables'>{$fila["Proceso"]}</td>
        <td class='tables'>{$fila["rechazo"]}</td>
        
        <td class='center' >
            <a href='principal.php?flujo=F1&proceso=P2&bandeja=si'>{$fila["Proceso"]}</a>
        </td>
        </tr>";
        }
        ?>