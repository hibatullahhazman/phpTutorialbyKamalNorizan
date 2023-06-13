<?php

class Car {
    public $brand='proton';
    public $color='black';
    public $seats='6';
    public $price='80000';
    public $cc='1500';

    function set_brand($brand) {
        $this->brand = $brand;
    }
    function set_color($color) {
        $this->color = $color;
    }
    function set_seats($seats) {
        $this->seats = $seats;
    }
    function set_price($price) {
        $this->price = $price;
    }
    function set_cc($cc) {
        $this->cc = $cc;
    }
}

    $honda = new Car();
    $honda->set_brand("Honda");
    $honda->set_color('Red');
    $honda->set_seats('4');
    $honda->set_price('1000000');
    $honda->set_cc('1500');
    
    echo $honda->brand.'<br>';
    echo $honda->color.'<br>';
    echo $honda->seats.'<br>';
    echo $honda->price.'<br>';
?>