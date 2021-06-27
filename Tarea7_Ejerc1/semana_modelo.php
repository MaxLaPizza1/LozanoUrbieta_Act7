<?php
    
   class semana{
        public function Captura($diaS){
            $this->dia=$diaS;
        }

        public function CalcularDia(){
        if($this->dia == 1){
                echo 'Hoy es Domingo';
        }else if($this->dia == 2){
                echo 'Hoy es Lunes';
        }else if($this->dia == 3){
                echo 'Hoy es Martes';
        }else if($this->dia == 4){
                echo 'Hoy es Miercoles';
            }else if($this->dia == 5){
                echo 'Hoy es Jueves';
        }else if($this->dia == 6){
            echo 'Hoy es Viernes';
            }else if($this->dia == 7){
                echo 'Hoy es Sabado';
            }else{
                echo 'Ese no es un valor valido';
            }
        }
   }
?>