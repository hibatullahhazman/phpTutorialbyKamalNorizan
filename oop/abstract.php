<?php 
    abstract class Car{
        public $brand;
        public $color;
        public $seats;
        public $price;

        function __construct($brand, $color, $seats, $price){
            $this->brand = $brand;
            $this->color = $color;
            $this->seats = $seats;
            $this->price = $price;
        }

        abstract public function display();
    }   

    class Honda extends Car{
        public $cc;

        function __construct($brand, $color, $seats, $price, $cc){
            parent::__construct($brand, $color, $seats, $price);
            $this->cc = $cc;
        }

        public function display(){
            echo "Maklumat Honda"."<br>";
            echo "Brand: ".$this->brand."<br>";
            echo "Color: ".$this->color."<br>";
            echo "Seats: ".$this->seats."<br>";
            echo "Price: ".$this->price."<br>";
            echo "CC: ".$this->cc."<br>";
        }
    }

    class Toyota extends Car{
        public $cc;

        function __construct($brand, $color, $seats, $price, $cc){
            parent::__construct($brand, $color, $seats, $price);
            $this->cc = $cc;
        }

        public function display(){
            echo "Ini Maklumat toyota"."<br>";
            echo "Brand: ".$this->brand."<br>";
            echo "Color: ".$this->color."<br>";
            echo "Seats: ".$this->seats."<br>";
            echo "Price: ".$this->price."<br>";
            echo "CC: ".$this->cc."<br>";
        }
    }
?>
