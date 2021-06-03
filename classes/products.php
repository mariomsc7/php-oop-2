<?php
/**
 * PROPERTIES
 */

class Product {
    public $name;
    public $type;
    public $description;
    public $price;
    public $in_stock = true;

    function __construct ($_name, $_type, $_description, $_price, $in_stock) {
        $this->name = $_name;
        $this->type = $_type;
        $this->description = $_description;
        $this->price = $_price;
        $this->in_stock = $in_stock;
    }
}