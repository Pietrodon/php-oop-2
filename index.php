<?php

class PetShop{
    public $name;
    public $price;
    public $description;
    

}

class User{
    public $name;
    public $surname;
    public $discount=0;

    public function registeredCheck($registered){
        if ($registered == true) {
            $this->discount = 20;
        } else {
            $this->discount = 0;
        }
    }

}


$prodotto_1 = new PetShop();
$prodotto_1->name='Osso di Plastica';
$prodotto_1->price=14.99;
$prodotto_1->description='Osso in plastica simile ad un osso reale';


$prodotto_2 = new PetShop();
$prodotto_2->name='Croccantini';
$prodotto_2->price=19.99;
$prodotto_2->description='Sacco da 1kg di croccatnini per il vostro animale';


$prodotto_3 = new PetShop();
$prodotto_3->name='Antipulci';
$prodotto_3->price=25.99;
$prodotto_3->description='Antipulci per i vostri cuccioli';

$user_1 = new User();
$user_1->name='Pietro';
$user_1->surname='Donvito';
$user_1->registeredCheck(true)






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PetShop</title>
</head>
<body>
    <h1 class="title">IL MIO NEGOZIO DI ANIMALI</h1>
    <div class="container">
    <p>NOME: <?php echo $prodotto_1->name ?> </p>
    <p>COGNOME: <?php echo $prodotto_1->name ?> </p>


    </div>


    <div class="container">
        <p>PRODOTTO: <?php echo $prodotto_1->name ?> </p>
        <p>PREZZO <?php echo $prodotto_1->price ?>  €  </p>
        <p>DESCRIZIONE: <?php echo $prodotto_1->description ?></p>
        <p>SCONTO: <?php echo $prodotto_1->discount ?> %</p>
    </div>
    <div class="container">
        <p>PRODOTTO: <?php echo $prodotto_2->name ?> </p>
        <p>PREZZO <?php echo $prodotto_2->price ?>  €  </p>
        <p>DESCRIZIONE: <?php echo $prodotto_2->description ?></p>
        <p>SCONTO: <?php echo $prodotto_2->discount ?> %</p>
    </div>
    <div class="container">
        <p>PRODOTTO: <?php echo $prodotto_3->name ?> </p>
        <p>PREZZO <?php echo $prodotto_3->price ?>  €  </p>
        <p>DESCRIZIONE: <?php echo $prodotto_3->description ?></p>
        <p>SCONTO: <?php echo $prodotto_3->discount ?> %</p>
    </div>
</body>
</html>