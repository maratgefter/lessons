<?php
require_once "Auto.php";
    class BMW extends Auto
    {
        protected $wheels = 3;
        protected $tank = 70;
        protected $max_tank=100;
        protected $car = "BMW";

        function drive() {
            return "Едем на бензине на $this->wheels колесах на $this->car! У вас в баке ".$this->fillTank(-10)." литров топлива!<br>";
        }
    }
?>