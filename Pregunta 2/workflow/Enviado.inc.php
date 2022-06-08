<?php
    session_start();
    include("header.php");
    include "conexion.inc.php";

    $user =  $_SESSION['username'];
    $id = $_SESSION['cantidad'];
    date_default_timezone_set('America/La_Paz');
    $DateAndTime = date('Y-m-d', time());
    $Time = date('h:i:s', time());   
    //echo "The current date and time are $Time.";
    $sql="UPDATE flujoprocesoseguimiento SET FechaFin='$DateAndTime',HoraFin='$Time' WHERE id = $id and Usuario = '$user'";
    $resultado=mysqli_query($con, $sql);
    //$fila=mysqli_fetch_array($resultado);


?>

<style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
    <body>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1>Correcto</h1> 
        <p>Inscripcion enviada correctamente</p>
      </div>
    </body>