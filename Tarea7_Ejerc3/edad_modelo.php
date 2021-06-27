<?php
    class edadActual{
        public function Captura($edadA){
            $this->edad=$edadA;
        }

        public function CalcularEdad(){
            $edadActual=2021-$this->edad;
            echo 'Usted tiene una edad de '.$edadActual.' años';
        }
    }
?>