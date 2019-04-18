<?php
    class Tag {
        protected $name;
        protected $text;
        protected $attrName;
        protected $attrValue;

        function set_name($name) {
            $this->name = $name;
            return $this;
        }

        function set_text($text) {
            $this->text = $text;
            return $this;
        }

        function set_attr ($attrName, $attrValue) {
            $this->attrName = $attrName;
            $this->attrValue = $attrValue;
            return $this;
        }

        // function __construct($name, $text, $attrName, $attrValue) {
        //     $this -> set_name($name);
        //     $this -> set_text($text);
        //     $this -> set_attr($attrName, $attrValue);
        // }

        function show() {
            if ($this->attrName != "" && $this->attrValue != "") {
                $str = " $this->attrName=\"$this->attrValue\"";
            }
            return "<$this->name$str>$this->text</$this->name>";
        }
    }

    // $obj = new Tag('div', 'My text', 'class', 'page');
    
    // echo $obj -> show();

    // echo "<br>";

    // $obj1 = new Tag('a', 'Google', 'href', 'https://www.google.com');

    // echo $obj1 -> show();

    $obj3 = new Tag();
    echo $obj3->set_name("div")->set_text("My Text")->set_attr("class", "d1")->show();
?>