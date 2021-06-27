<?php
    if(isset($_POST['horas'])){
            require_once 'sueldo_modelo.php';
            $valor= $_POST['horas'];
            $objConversion = new calculoSueldo();
            $objConversion->Captura($valor);
            $objConversion->CalcularSueldo();
    }
?>