<?php
include "conexion.inc.php";
//session_start();
$flujo=$_GET["flujo"];
$proceso=$_GET["procesoanterior"];
$procesosiguiente=$_GET["proceso"];
$sql="select * from flujoproceso ";
$sql.="where Flujo='$flujo' and proceso='$proceso'";
$resultado=mysqli_query($con, $sql);
$fila=mysqli_fetch_array($resultado);
$pantalla=$fila['Pantalla'];
$pantalla.=".motor.inc.php";
$tipo=$fila["Tipo"];

//echo $sql;
if (isset($_GET["Anterior"]) && $tipo!= "F")
{
  $sql1="select * from flujoproceso ";
  $sql1.="where Flujo='$flujo' and procesosiguiente='$proceso'";
  $resultado1=mysqli_query($con, $sql1);
  $fila1=mysqli_fetch_array($resultado1);
  print_r ($fila1);
  //$proceso=$fila1["Proceso"];
  $procesosiguiente=$fila1["Proceso"];
  //echo $procesosiguiente;
}
  elseif($tipo== "F") {
    return header("Location: home.php");
  }
  elseif ($tipo== "C" && !isset($_GET["Anterior"])) {
    //$si=$_GET["P6"];
    $sql3="select * from flujoprocesocondicionante where Proceso = '$proceso'";
    $resultado3=mysqli_query($con, $sql3);
    $fila3=mysqli_fetch_array($resultado3);
    
    if (isset($_GET["Aceptar"])){
      include $pantalla;

      header("Location: principal.php?flujo=$flujo&proceso=P5");
    }
    else {
      include $pantalla;

      header("Location: principal.php?flujo=$flujo&proceso=P6");
    }
    
    $pantalla=$fila3['Pantalla'];
    //    header("Location: principal.php?flujo=$flujo&proceso=P5");
  }
  if (!isset($_GET["Anterior"]))
  {
    include $pantalla;
  }

  header("Location: principal.php?flujo=$flujo&proceso=$procesosiguiente");

?>