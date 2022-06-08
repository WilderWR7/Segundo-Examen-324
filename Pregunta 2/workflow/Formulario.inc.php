<?php
    session_start();
    include("header.php");
    include "conexion.inc.php";

    $user =  $_SESSION['username'];

    date_default_timezone_set('America/La_Paz');
    $DateAndTime = date('Y-m-d', time());
    $Time = date('h:i:s', time());   
    //echo "The current date and time are $Time.";
    $sql="SELECT COUNT(*) cantidad FROM flujoprocesoseguimiento";
    $resultado=mysqli_query($con, $sql);
    $fila=mysqli_fetch_array($resultado);
    if(isset($_GET["bandeja"])){
        $id=$fila['cantidad'];
    $_SESSION['cantidad'] = $id;    
    }
    else{
        $id=$fila['cantidad']+1;
        $_SESSION['cantidad'] = $id;
        $sql1="insert into FlujoProcesoSeguimiento values($id,'F1','P2','$user','$DateAndTime','$Time',null,null,'Pendiente');";
        $resultado1=mysqli_query($con, $sql1);
        $sql2="UPDATE basededatos.usuarios SET inscripcion= 1 WHERE user = '$user'";
        $resultado2=mysqli_query($con, $sql2);
    }
?>
    <div class="content">
        <div class="container">
        <div class="row align-items-stretch no-gutters contact-wrap">
                <div class="col-md-12">
                    <div class="form h-100">
                        <h3 class="center" >Formulario</h3>
                        <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label for="" class="col-form-label">Nombre Del Frente</label>
                                    <input type="text" class="form-control" name="nombrefrente" id="nombrefrnte"
                                        placeholder="Nombre">
                                </div>
                                <div class="col-md-3 form-group mb-3">
                                    <label for="" class="col-form-label">Color 1</label>
                                    <input type="text" class="form-control" name="color1" id="color1"
                                        placeholder="Color">
                                </div>
                                <div class="col-md-3 form-group mb-3">
                                    <label for="" class="col-form-label">Color 2</label>
                                    <input type="text" class="form-control" name="color2" id="color2"
                                        placeholder="Color">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label for="" class="col-form-label">Secretaría Ejecutiva</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Paterno Materno Nombre">
                                </div>
                                <div class="col-md-3 form-group mb-3">
                                    <label for="" class="col-form-label">C.I.:</label>
                                    <input type="text" class="form-control" name="ci" id="ci"
                                        placeholder="Nº C.I.">
                                </div>
                                <div class="col-md-3 form-group mb-3">
                                    <label for="" class="col-form-label">Nº Matricula</label>
                                    <input type="text" class="form-control" name="matricula" id="matricula"
                                        placeholder="123456">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label for="" class="col-form-label">Secretaría General</label>
                                    <input type="text" class="form-control" name="name1" id="name1"
                                        placeholder="Paterno Materno Nombre">
                                </div>
                                <div class="col-md-3 form-group mb-3">
                                    <label for="" class="col-form-label">C.I.:</label>
                                    <input type="text" class="form-control" name="ci1" id="ci1"
                                        placeholder="Nº C.I.">
                                </div>
                                <div class="col-md-3 form-group mb-3">
                                    <label for="" class="col-form-label">Nº Matricula</label>
                                    <input type="text" class="form-control" name="matricula1" id="matricula1"
                                        placeholder="123456">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label for="" class="col-form-label">Secretaría Académica</label>
                                    <input type="text" class="form-control" name="name2" id="name2"
                                        placeholder="Paterno Materno Nombre">
                                </div>
                                <div class="col-md-3 form-group mb-3">
                                    <label for="" class="col-form-label">C.I.:</label>
                                    <input type="text" class="form-control" name="ci2" id="ci2"
                                        placeholder="Nº C.I.">
                                </div>
                                <div class="col-md-3 form-group mb-3">
                                    <label for="" class="col-form-label">Nº Matricula</label>
                                    <input type="text" class="form-control" name="matricula2" id="matricula2"
                                        placeholder="123456">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label for="" class="col-form-label">Secretaría de Conflictos</label>
                                    <input type="text" class="form-control" name="name3" id="name3"
                                        placeholder="Paterno Materno Nombre">
                                </div>
                                <div class="col-md-3 form-group mb-3">
                                    <label for="" class="col-form-label">C.I.:</label>
                                    <input type="text" class="form-control" name="ci3" id="ci3"
                                        placeholder="Nº C.I.">
                                </div>
                                <div class="col-md-3 form-group mb-3">
                                    <label for="" class="col-form-label">Nº Matricula</label>
                                    <input type="text" class="form-control" name="matricula3" id="matricula3"
                                        placeholder="123456">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label for="" class="col-form-label">Secretaría de Hacienda</label>
                                    <input type="text" class="form-control" name="name4" id="name4"
                                        placeholder="Paterno Materno Nombre">
                                </div>
                                <div class="col-md-3 form-group mb-3">
                                    <label for="" class="col-form-label">C.I.:</label>
                                    <input type="text" class="form-control" name="ci4" id="ci4"
                                        placeholder="Nº C.I.">
                                </div>
                                <div class="col-md-3 form-group mb-3">
                                    <label for="" class="col-form-label">Nº Matricula</label>
                                    <input type="text" class="form-control" name="matricula4" id="matricula4"
                                        placeholder="123456">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label for="" class="col-form-label">Secretaría de Relaciones</label>
                                    <input type="text" class="form-control" name="name5" id="name5"
                                        placeholder="Paterno Materno Nombre">
                                </div>
                                <div class="col-md-3 form-group mb-3">
                                    <label for="" class="col-form-label">C.I.:</label>
                                    <input type="text" class="form-control" name="ci5" id="ci5"
                                        placeholder="Nº C.I.">
                                </div>
                                <div class="col-md-3 form-group mb-3">
                                    <label for="" class="col-form-label">Nº Matricula</label>
                                    <input type="text" class="form-control" name="matricula5" id="matricula5"
                                        placeholder="123456">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label for="" class="col-form-label">Secretaría de Cultura</label>
                                    <input type="text" class="form-control" name="name6" id="name6"
                                        placeholder="Paterno Materno Nombre">
                                </div>
                                <div class="col-md-3 form-group mb-3">
                                    <label for="" class="col-form-label">C.I.:</label>
                                    <input type="text" class="form-control" name="ci6" id="ci6"
                                        placeholder="Nº C.I.">
                                </div>
                                <div class="col-md-3 form-group mb-3">
                                    <label for="" class="col-form-label">Nº Matricula</label>
                                    <input type="text" class="form-control" name="matricula6" id="matricula6"
                                        placeholder="123456">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label for="" class="col-form-label">Secretaría de Deportes</label>
                                    <input type="text" class="form-control" name="name7" id="name7"
                                        placeholder="Paterno Materno Nombre">
                                </div>
                                <div class="col-md-3 form-group mb-3">
                                    <label for="" class="col-form-label">C.I.:</label>
                                    <input type="text" class="form-control" name="ci7" id="ci7"
                                        placeholder="Nº C.I.">
                                </div>
                                <div class="col-md-3 form-group mb-3">
                                    <label for="" class="col-form-label">Nº Matricula</label>
                                    <input type="text" class="form-control" name="matricula7" id="matricula7"
                                        placeholder="123456">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label for="" class="col-form-label">Secretaría de Actas</label>
                                    <input type="text" class="form-control" name="name8" id="name8"
                                        placeholder="Paterno Materno Nombre">
                                </div>
                                <div class="col-md-3 form-group mb-3">
                                    <label for="" class="col-form-label">C.I.:</label>
                                    <input type="text" class="form-control" name="ci8" id="ci8"
                                        placeholder="Nº C.I.">
                                </div>
                                <div class="col-md-3 form-group mb-3">
                                    <label for="" class="col-form-label">Nº Matricula</label>
                                    <input type="text" class="form-control" name="matricula8" id="matricula8"
                                        placeholder="123456">
                                </div>
                            </div>
                            <div class="f-right">
                                <div class="mt-5" >
                                    <input type="submit" value="Inscribir"
                                        class="btn btn-primary rounded-0 py-2 px-4">
                                    <span class="submitting"></span>
                                </div>
                            </div>
                    </div>
                </div>
            </div>        
        </div>
    </div>


