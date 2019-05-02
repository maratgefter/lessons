<?php
    abstract class Auto
    {
        protected $wheels;
        abstract function drive();
        protected $tank;
        protected $max_tank;
        
        function fillTank($gal) {
            if ($this->tank > 0 && $this->tank + $gal <= $this->max_tank && $this->tank + $gal>0) {
                return $this->tank += $gal;
            } else if ($this->tank = 100 && $this->tank + $gal >= $this->max_tank) {
                return $this->tank = 100;
            } else if ($this->tank + $gal <= 0) {
                return $this->tank=0;
            }
        }
    }
?>