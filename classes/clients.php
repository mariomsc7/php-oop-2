<?php
/**
 * PROPERTIES
 */


// CLASSE PADRE 
class Client {
    public $name;
    public $lastname;
    public $email;
    protected $age;
    

    function __construct($_name, $_lastname, $_email) {
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->email = $_email;
    }

    public function getAge() {
        $this->genAge();
    }

    protected function genAge() {
        $age = rand(18, 100);
        echo 'Eta: ' . $age . '<br>';
    }
}

// CLASSE FIGLIA
class Premium extends Client {
    public $premium;

    function __construct($_name, $_lastname, $_email, $premium='undefined') {
        parent::__construct($_name, $_lastname, $_email);

        $this->premium = $premium;
    }

    public function setPremium() {
        return $this->premium = $this->getAge() < 25 ? 'Premium' : 'Basic';
    }
} 

$client1 = new Premium('Mario', 'Rossi', 'mariorossi@gmail.com');
echo 'Nome: ' . $client1->name . '<br>';
echo 'Cognome: ' . $client1->lastname . '<br>';
echo 'Email: ' . $client1->email . '<br>';
$client1->getAge();
echo $client1->setPremium();



$client2 = new Premium('Marco', 'Gialli', 'marcogialli@gmail.com');
echo 'Nome: ' . $client2->name . '<br>';
echo 'Cognome: ' . $client2->lastname . '<br>';
echo 'Email: ' . $client2->email . '<br>';
$client2->getAge();
echo $client2->setPremium();


$client3 = new Premium('Matteo', 'Verdi', 'matteoverdi@gmail.com');
echo 'Nome: ' . $client3->name . '<br>';
echo 'Cognome: ' . $client3->lastname . '<br>';
echo 'Email: ' . $client3->email . '<br>';
$client3->getAge();
echo $client3->setPremium();

var_dump($client1);
var_dump($client2);
var_dump($client3);