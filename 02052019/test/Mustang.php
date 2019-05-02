<?php
require_once "Auto.php";
    class Mustang extends Auto
    {
        protected $tank = 50;
        protected $max_tank=100;
        protected $wheels = 4;
        protected $car = "Mustang";
        
        function drive() {
            return "Едем на бензине на $this->wheels колесах на $this->car! У вас в баке ".$this->fillTank(100)." литров топлива!<br>";
        }

        
    }
?>