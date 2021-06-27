<?php
class conversion{
    public function Captura($kmT){
        $this->km=$kmT;
    }

    public function CalcularMillas(){
        $millas=$this->km*0.621371;
        echo 'La conversion es de '.$millas.' millas';
    }
}
?>