<?php

class Fruit{
    public $name;
    protected $color;
    private $weight;

    function __construct($name, $color, $weight){
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    function set_color($color){
        $this->color = $color;
    }

    function display(){
        echo "Name: ".$this->name."<br>";
        echo "Color: ".$this->color."<br>";
        echo "Weight: ".$this->weight."<br>";
    }
}

$mango = new Fruit('Mango', 'Yellow', '300');
$mango->set_color('Red'); // OK
$mango->display(); // OK


?>