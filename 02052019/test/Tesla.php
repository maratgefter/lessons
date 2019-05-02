<?php
require_once "Auto.php";
    class Tesla extends Auto
    {
        protected $wheels = 4;
        protected $tank = 30;
        protected $max_tank=100;
        protected $car="Tesla";
        
        function drive() {
            return "Едем на электротяге на $this->wheels колесах на $this->car! Ваш аккумулятор заряжен на ".$this->fillTank(-10)." %!<br>";
        }
    }
?>