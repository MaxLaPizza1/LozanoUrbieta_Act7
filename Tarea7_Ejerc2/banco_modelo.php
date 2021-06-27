<?php
    class banco{
        public function Captura($capitalG,$mesesG){
            $this->capital=$capitalG;
            $this->meses=$mesesG;
        }

        public function CalcularGanancia(){
            $gananciaMensual=$this->capital*0.02;
            $gananciaM=$gananciaMensual*$this->meses;
            $gananciaTotal=$this->capital+$gananciaM;
            echo 'Usted tiene una total de '.$gananciaTotal.' pesos';
        }
    }
?>