<?php
    if(isset($_POST['km'])){
            require_once 'kilometros_modelo.php';
            $valor= $_POST['km'];
            $objConversion = new conversion();
            $objConversion->Captura($valor);
            $objConversion->CalcularMillas();
    }
?>