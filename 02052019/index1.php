<?php
    abstract class User
    {
        protected $name;
        protected $surname;
        protected $age;

        function setName($name)
        {
            $this->name=$name;
        }

        function setSurname($surname)
        {
            $this->surname=$surname;
        }

        function setAge($age)
        {
            if ($this->checkAge($age)) {
                $this->age=$age;
            } else {
                $this->age=null;
            }
        }

        function getName($name)
        {
            return $this->name;
        }

        function getSurname($surname)
        {
            return $this->surname;
        }

        function getAge($age)
        {
            return $this->age;
        }

        function info()
        {
            return "Вас зовут ".$this->name.". Ваша фамилия ".$this->surname.". Ваш возраст: ".$this->age.".<br>";
        }

        function checkAge($age)
        {
            
        }
    }

    class Student extends User
    {
        function checkAge($age)
        {
            if ($age >= 18 && $age <= 25) {
                return true;
            } else {
                return false;
            }
        }
    }

    class Worker extends User
    {
        function checkAge($age)
        {
            if ($age > 25 && $age <= 63) {
                return true;
            } else {
                return false;
            }
        }
    }

    // $user = new User;
    // $user->setName('Марат');
    // $user->setSurname('Гефтер');
    // $user->setAge('26');
    // echo $user->info();

    $student = new Student;
    $student->setName('Сергей');
    $student->setSurname('Годлевский');
    $student->setAge('26');
    echo $student->info();

    $student = new Worker;
    $student->setName('Серж');
    $student->setSurname('Хвостенок');
    $student->setAge('65');
    echo $student->info();
?>