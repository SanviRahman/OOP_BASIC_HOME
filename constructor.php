<?php

    class Student
    {
        public $name;

        public function __construct()
        {
            $this->name="Sanvi Rahman";
        }


        public function display()
        {
            echo "Name is {$this->name}";
        }

    }

    $myObj= new Student();
    $myObj->display();
?>