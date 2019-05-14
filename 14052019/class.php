<?php
    class TicTacToe
    {
        public $array;
        public $move;

        function create_array($size)
        {
            $this->array = [];
            for ($i=0; $i < $size; $i++) { 
                for ($j = 0; $j < $size; $j++){
                    $this->array[$i][$j] = '';
                }
            }
        }

        function __construct($size) 
        {
            $this->create_array($size);
        }

        function show()
        {
            echo "\t\n<table>";
            foreach ($this->array as $k => $v) {
                echo "\t\n<tr>";
                foreach ($v as $val) {
                    echo "\t\n<td>$val</td>";
                }
                echo "\t\n</tr>";
            }
            "\t\n</table>";
        }

        function put_cross($i, $j)
        {
            if($this->is_empty($i,$j) && $this->in_matrix($i, $j)) {
            $this->array[$i][$j] = 'X';
            }
        }

        function put_circle($i, $j)
        {
            if($this->is_empty($i,$j) && $this->in_matrix($i, $j)) {
            $this->array[$i][$j] = '0';
            }
        }

        protected function is_empty($i, $j)
        {
            return $this -> array[$i][$j] == '' ? true : false;
        }

        protected function in_matrix($i, $j)
        {
            $size = count($this->array);
            return ($i >= $size || $j >= $size || $i < 0 || $j < 0) ? false : true;
        }

    }
?>