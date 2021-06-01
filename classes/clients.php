<?php
/**
 * PROPERTIES
 */

class Client {
    public $name;
    public $lastname;
    public $email;
    protected $age;
    private $premium;

    function __construct($name, $lastname, $email) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
    }

}

$client1 = new Client('Mario', 'Rossi', 'mariorossi@gmail.com');
echo $client1->name;

$client2 = new Client('Marco', 'Gialli', 'marcogialli@gmail.com');
echo $client2->name;

$client3 = new Client('Matteo', 'Verdi', 'matteoverdi@gmail.com');
echo $client3->name;
