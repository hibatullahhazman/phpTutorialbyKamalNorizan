<?php

class Car {
    public $brand='proton';
    public $color='black';
    public $seats='6';
    public $price='80000';
    public $cc='1500';

    function __construct($brand, $color,$seats,$price,$cc) {
        $this->brand = $brand;
        $this->color = $color;
        $this->seats = $seats;
        $this->price = $price;
        $this->cc = $cc;
    }

    // function set_brand($brand) {
    //     $this->brand = $brand;
    // }
    // function set_color($color) {
    //     $this->color = $color;
    // }
    // function set_seats($seats) {
    //     $this->seats = $seats;
    // }
    // function set_price($price) {
    //     $this->price = $price;
    // }
    // function set_cc($cc) {
    //     $this->cc = $cc;
    // }

    // function get_brand() {
    //     return $this->brand;
    // }
    // function get_color() {
    //     return $this->color;
    // }
    // function get_seats() {
    //     return $this->seats;
    // }
    // function get_price() {
    //     return $this->price;
    // }
    // function get_cc() {
    //     return $this->cc;
    // }
}

    // $honda = new Car();
    // $honda->brand="Honda";
    // $honda->color='Red';
    // $honda->seats='4';
    // $honda->price='1000000';
    // $honda->cc='1500';
    
    
    $produa = new Car('Produa','purple','5','83000','1500');
    
    
    echo $produa->brand.'<br>';
    echo $produa->color.'<br>';
    echo $produa->seats.'<br>';
    echo $produa->price.'<br>';

    // echo $honda->brand.'<br>';
    // echo $honda->color.'<br>';
    // echo $honda->seats.'<br>';
    // echo $honda->price.'<br>';

?>