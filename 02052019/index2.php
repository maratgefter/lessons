<?php
    abstract class Auto
    {
        protected $wheels;
        abstract function drive();
        
    }

    class Tesla extends Auto
    {
        protected $wheels = 4;
        function drive() {
            return "Едем на электротяге на $this->wheels колесах!<br>";
        }
    }

    class Mustang extends Auto
    {
        protected $wheels = 4;
        function drive() {
            return "Едем на бензине на $this->wheels колесах!<br>";
        }
    }

    class BMW extends Auto
    {
        protected $wheels = 3;
        function drive() {
            return "Едем на бензине на $this->wheels колесах!<br>";
        }
    }

    $tesla = new Tesla;
    echo $tesla->drive();

    $mustang = new Mustang;
    echo $mustang->drive();

    $bmw = new BMW;
    echo $bmw->drive();
?>