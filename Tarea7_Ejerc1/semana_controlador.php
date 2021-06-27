<?php
    if(isset($_POST['dia'])){
        require_once 'semana_modelo.php';
        $valor= $_POST['dia'];
        $objSemana = new semana();
        $objSemana->Captura($valor);
        $objSemana->CalcularDia();
    }
?>