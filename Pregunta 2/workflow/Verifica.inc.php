<?php
    session_start();
    echo "Bienvenid@ ".$_SESSION["username"];
    $sql1="SELECT nombre FROM basededatos.frente";
    $resultado2=mysqli_query($con, $sql1);
    $fila2=mysqli_fetch_all($resultado2);
?>


    <div class="content">
        <div class="container">
        <div class="row align-items-stretch no-gutters contact-wrap">
                <div class="col-md-12">
                    <div class="form h-100">
                        <h3 class="center" >Formulario</h3>
                            <?php
                        
                            include "conexion.inc.php";
                            for($j = 0; $j < count($fila2); $j += 1)
                            {
                                print "<h2 class='center' style='text-transform:uppercase'>{$fila2[$j][0]}</h2>";
                                $sql="SELECT * FROM basededatos.candidato c WHERE c.nombreFrente = '{$fila2[$j][0]}'";
                                $resultado1=mysqli_query($con, $sql);
                                $fila1=mysqli_fetch_all($resultado1);
                                // print_r($fila2);
                                for($i = 0; $i < count($fila1); $i += 1)
                                {
    
                                    print "
                                    <div class='row'>
                                        <div class='col-md-6 form-group mb-3'>
                                            <label for=' class='col-form-label'>nombre</label>
                                            <p name='name' id='name'>{$fila1[$i][0]}</p>
                                        </div>
                                        <div class='col-md-3 form-group mb-3'>
                                            <label for=' class='col-form-label'>C.I.:</label>
                                            <p>{$fila1[$i][1]}</p>
                                        </div>
                                        <div class='col-md-3 form-group mb-3'>
                                            <label for=' class='col-form-label'>Nº Matricula</label>
                                            <p>{$fila1[$i][2]}</p>
                                        </div>
                                    </div>
                                    ";
                                }
                                print "
                                <div class='mt-5' >
                                    <input type='submit' value='{$fila2[$j][0]}' name='Aceptar' id='Aceptar' class='verdedos btn rounded-0 py-2 px-4'>
                                    <input type='submit' value='{$fila2[$j][0]}' name='Rechazar' id='Rechazar' class='btn btn-primary rounded-0 py-2 px-4'>
                                </div>";
                            }
                            ?>
                            
                            
                    </div>
                </div>
            </div>        
        </div>
    </div>


