<?php
class calculoSueldo{
    public function Captura($sueldo){
        $this->horas=$sueldo;
    }

    public function CalcularSueldo(){
        if($this->horas<30){
            $salarioTotal=$this->horas*120;
            echo 'Usted tiene un salario por hora de $120 <br>';
            echo 'Usted trabajo un total de '.$this->horas.' horas <br>';
            echo 'Su salario total es de $'.$salarioTotal;
        }else{
            $salarioTotal=$this->horas*200;
            echo 'Usted tiene un salario por hora de $200 <br>';
            echo 'Usted trabajo un total de '.$this->horas.' horas <br>';
            echo 'Su salario total es de $'.$salarioTotal;
        }
    }
}
?>