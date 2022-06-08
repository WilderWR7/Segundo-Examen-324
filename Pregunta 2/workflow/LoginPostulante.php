<?php
include "conexion.inc.php";
include "header.php";
?>
<div class="container-center" >
    <div class="row align-items-stretch no-gutters contact-wrap">
        <div class="col-md-12">
            <div class="form h-100">
                <h3 class="center" >Login</h3>
                <form action="LoginPostulante.motor.inc.php" method="GET">
                    <div class="row">
                        <div class="w-100 form-group mb-3">
                            <label for="" class="col-form-label m-0">Correo</label>
                            <input type="text" class="form-control f-1" name="email" id="email"
                                placeholder="example@email.com">
                        </div>
                    </div>
                    <div class="row">
                        <div class="w-100 form-group mb-3">
                            <label for="" class="col-form-label m-0">Contraseña</label>
                            <input type="text" class="form-control f-1" name="password" id="password">
                        </div>
                    </div>
                    <div class="f-right">
                        <div class="mt-5" >
                            <input type="submit" value="Ingresar"
                                class="btn btn-primary rounded-0 py-2 px-4">
                            <span class="submitting"></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>  
</div>    