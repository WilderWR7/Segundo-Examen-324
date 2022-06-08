    <?php
        session_start();
        $user =  $_SESSION['username'];
        echo "Bienvenid@ ".$user;

        if (!isset($_SESSION['username']))
        {
            header("Location: principal.php?flujo=F1&proceso=P1");
        }
        else {
            print "<div class='container-center'>
            <object class='pdfview' type='application/pdf' data='./CEI.pdf' ></object>
            </div>
            <div class='center flex'>
            <p class='p-black mr-5' >He leído y acepto la convocatoria</p> 
            <input type='checkbox' id='Acepto' name='Acepto' value='si'>
        </div>
        <div class='f-right flex'>
            <input type='submit' class= 'btn btn-green' value='Siguiente' />
        </div>            
            ";
        }
    ?>
