<?php
    if(isset($_POST['edad'])){
            require_once 'edad_modelo.php';
            $valor= $_POST['edad'];
            $objEdad = new edadActual();
            $objEdad->Captura($valor);
            $objEdad->CalcularEdad();
    }
?>