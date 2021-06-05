<?php
/**
 * PROPERTIES
 */

class Product {
    public $name;
    public $price;
    

    function __construct ($_name,  $_price) {
        $this->name = $_name;
        $this->price = $_price;
    }

    public function calcSconto($perc) {
        $sconto = $this->price - ($this->price * $perc / 100);
        return number_format($sconto, 2); // numeri decimali a 2
    }
}

// EXTEND
class Description extends Product {
    public $description;

    function __construct($_name, $_price, $_description) {
        parent::__construct($_name, $_price);

        $this->description = $_description;
    }
}

// ISTANZE

$product1 = new Product('Nutella', 5);
echo 'Offerta Nutella in sconto al 20%: euro ' . $product1->calcSconto(20) . '<br>';

$nutella = new Description('Nutella', 5, 'Crema alla nocciola e cacao');
echo 'Nutella: ' . $nutella->description;

$product2 = new Product('PS5', 500);
echo 'Offerta PS5 in sconto al 30%: euro ' . $product1->calcSconto(30) . '<br>';

$nutella = new Description('PS5', 300, 'Nuova console Sony PS5');
echo 'Nutella: ' . $nutella->description;
