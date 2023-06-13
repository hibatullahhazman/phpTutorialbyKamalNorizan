<?php 
    Class Person{
        public $name;
        public $age;
        public $gender;
        public $height;
    }

    Class Father extends Person{
        public $job;
        public $income;
        public $spouse;
        public $children = array();
    }

    Class child extends Person{
        public Father $father;
        public $school;
        public $grade;
        public $hobby;
    }

    $ali = new Father();
    $ali->name = 'Ali';
    $ali->age = '40';
    $ali->gender = 'Male';
    $ali->height = '170cm';
    $ali->job = 'Technician';
    $ali->income = 'RM3000';
    $ali->spouse = 'Siti';

    $abu = new Father();
    $abu->name = 'Abu';
    $abu->age = '55';
    $abu->gender = 'Male';
    $abu->height = '170cm';
    $abu->job = 'Police';
    $abu->income = 'RM5000';
    $abu->spouse = 'Aminah';

    $ahmad = new child();
    $ahmad->name = 'Ahmad';
    $ahmad->age = '15';
    $abu->gender = 'Male';
    $abu->height = '95cm';
    $ahmad->father = $ali;
    $ahmad->school = 'SMK Taman Bukit Indah';
    $ahmad->grade = 'A';
    $ahmad->hobby = 'Reading';

    $ali->children[] = $ahmad;

    var_dump($ahmad->father->children[0]->name);

?>