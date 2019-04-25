<?php
    class useArray 
    {
        protected $array;

        function __construct($array)
        {
            $this->array=$array;
        }

        function showArray()
        {
            $str = '';
            foreach ($this->array as $k =>$v) {
                $str .= "<li>$v</li>";
            }
            return "<ol>$str</ol>";
        }

        function sortArray()
        {
            return asort($this->array);
        }

        function delArrayString($number)
        {
           unset($this->array[$number]);
        }

        function addInArray($var, $key)
        {
            $new_array = [];
            foreach($this->array as $k => $v) {
                if ($key == $k){
                    $new_array[] = $var;
                }
                $new_array[] = $v;
            }
            $this->array = $new_array;
        }
    }

    $obj = new useArray([7, 2, 8, 4, 5]);
    echo $obj->showArray();
    // $obj->sortArray();
    // echo $obj->showArray();
    // $obj->delArrayString(4);
    // echo $obj->showArray();
    $obj->addInArray(10, 2);
    echo $obj->showArray();
?>