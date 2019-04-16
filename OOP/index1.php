<?php
    class Numeric {
        protected $value;
        function __construct($val)

        {
            $this->value=$val;
        }

        function add($val)
        {
            $this->value +=$val;
        }

        function get() {
            return $this->value;
        }
    }

$num = new Numeric(12);

//$num -> set(5);

echo $num->get();

$num->add(3);

echo $num->get();

//echo $num->value;
?>