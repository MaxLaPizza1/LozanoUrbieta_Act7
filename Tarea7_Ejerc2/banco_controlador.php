<?php
    if(isset($_POST['capital'])){
        if(isset($_POST['meses'])){
            require_once 'banco_modelo.php';
            $valor1= $_POST['capital'];
            $valor2= $_POST['meses'];
            $objBanco = new banco();
            $objBanco->Captura($valor1,$valor2);
            $objBanco->CalcularGanancia();
        }
    }
?>