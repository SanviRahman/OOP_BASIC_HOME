<?php

    class Student
    {
        public $name;
        public $roll;

        public function __construct($name, $roll)
        {
            $this->name= $name;
            $this->roll=$roll;
        }


        public function display()
        {
            echo "Name is {$this->name}". PHP_EOL;
            echo "Roll is {$this->roll}".PHP_EOL;
        }

        public function __destruct()
        {
            echo "Hello! I am from Destructor Class";
        }

    }

    $myObj= new Student("Sanvi Rahman",10);
    $myObj->display();
?>