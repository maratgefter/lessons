<?php

class Person
{
    protected $name;
    protected $age;
    protected $city;
    function set_name($name)
    {
        strlen($name) > 2 ? $this->name = $name : false;
    }
    function set_age($age)
    {
        $age > 20 && $age < 60 ? $this->age = $age : false;
    }

    function set_city($city)
    {
        strlen($city) > 3 ? $this->city = $city : false;
    }

    function get_name()
    {
        return $this->name;
    }

    function get_age()
    {
        return $this->age;
    }

    function get_city()
    {
        return $this->city;
    }

    function info()
    {
        return "Name - " . $this->name . ", Age - " . $this->age . ", City - " . $this->city;
    }
}
$person = new Person;
$person->set_name('Marat');
$person->set_age('26');
$person->set_city('Polotsk');
echo $person->get_name();
echo $person->get_age();
echo $person->get_city();
echo $person->info();
?>