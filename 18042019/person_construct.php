<?php

class Person
{
    protected $name;
    protected $age;
    protected $city;
    function set_name($name) {
        return strlen($name) > 2 ? $this->name = $name : $this->name = null;
    }
    function set_age($age) {
        return $age >= 20 && $age <= 60 ? $this->age = $age : $this->age = null;
    }

    function set_city($city) {
        return strlen($city) > 3 ? $this->city = $city : $this->city = null;
    }

    function get_name() {
        return $this->name;
    }

    function get_age() {
        return $this->age;
    }

    function get_city() {
        return $this->city;
    }

    function __construct($name, $age, $city) {
        $this->set_name($name);
        $this->set_age($age);
        $this->set_city($city);
    }

    function info() {
        return "Name - " . $this->name . ", Age - " . $this->age . ", City - " . $this->city;
    }
}
$person = new Person('Marat', '60', 'Polotsk');
// $person->set_name('Marat');
// $person->set_age('26');
// $person->set_city('Polotsk');
// echo $person->get_name();
// echo $person->get_age();
// echo $person->get_city();
echo $person->info();
echo "<br>";
$person->set_age($person->get_age()+1);
echo $person->get_age();
?>