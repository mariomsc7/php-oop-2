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
    private $premium;

    function __construct($_name, $_lastname, $_email, $premium = 'undefined') {
        parent::__construct($_name, $_lastname, $_email);

        $this->premium = $premium;
    }

    public function setPremium() {
        echo $this->hasPremium();
    }

    private function hasPremium() {
        if($this->getAge() >= 18 || $this->getAge() <=30) {
            $premium = true;
        } else {
            $premium = false;
        }
    }
} 

$client1 = new Client('Mario', 'Rossi', 'mariorossi@gmail.com',);
echo 'Nome: ' . $client1->name . '<br>';
echo 'Cognome: ' . $client1->lastname . '<br>';
echo 'Email: ' . $client1->email . '<br>';
$client1->getAge();



$client2 = new Client('Marco', 'Gialli', 'marcogialli@gmail.com');
echo 'Nome: ' . $client2->name . '<br>';
echo 'Cognome: ' . $client2->lastname . '<br>';
echo 'Email: ' . $client2->email . '<br>';
$client2->getAge();



$client3 = new Client('Matteo', 'Verdi', 'matteoverdi@gmail.com');
echo 'Nome: ' . $client3->name . '<br>';
echo 'Cognome: ' . $client3->lastname . '<br>';
echo 'Email: ' . $client3->email . '<br>';
$client3->getAge();

var_dump($client1);
var_dump($client2);
var_dump($client3);