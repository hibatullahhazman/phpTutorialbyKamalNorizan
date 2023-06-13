<?php

class Car {
    private $brand='proton';
    private $color='black';
    private $seats='6';
    private $price='80000';
    private $cc='1500';

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

    function get_brand() {
        return $this->brand;
    }
    function get_color() {
        return $this->color;
    }
    function get_seats() {
        return $this->seats;
    }
    function get_price() {
        return $this->price;
    }
    function get_cc() {
        return $this->cc;
    }
}

    // $honda = new Car();
    // $honda->brand="Honda";
    // $honda->color='Red';
    // $honda->seats='4';
    // $honda->price='1000000';
    // $honda->cc='1500';
    
    
    $produa = new Car();
    $produa->set_brand("Produa");
    $produa->set_color('purple');
    $produa->set_seats('5');
    $produa->set_price('83000');
    $produa->set_cc('1500');
    
    echo $produa->get_brand().'<br>';
    echo $produa->get_color().'<br>';
    echo $produa->get_seats().'<br>';
    echo $produa->get_price().'<br>';

    // echo $honda->brand.'<br>';
    // echo $honda->color.'<br>';
    // echo $honda->seats.'<br>';
    // echo $honda->price.'<br>';

?>