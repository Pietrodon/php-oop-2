<?php

class PetShop{
    public $name;
    public $price;
    public $description;
    

}

class User{
    public $name;
    public $surname;
    public function creditCardCheck($expiration_date){
        if ($expiration_date>=2022) {
            echo'la carta scelta è valida';
        }else{
            echo 'la carta selezionata è scaduta scegliere un altra carta';
        }
    }
}

class Discount{
    public function registeredCheck($registered){
        if ($registered == true) {
            echo 'UTENTE REGISTRATO,Hai diritto ad uno sconto del 20%';
        } else {
            echo 'UTENTE NON REGISTRATO, non hai diritto a nessuno sconto per i membri';
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
$user_1->creditCardCheck(2025);


$discount_1 = new Discount();
$discount_1->registeredCheck(true);






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
    <p>NOME: <?php echo $user_1->name ?> </p>
    <p>COGNOME: <?php echo $user_1->surname ?> </p>
    <p><?php echo $discount_1->registeredCheck(true)?></p>
    <p>CARTA: <?php echo $user_1->creditCardCheck(2025) ?> </p>


    </div>


    <div class="container">
        <p>PRODOTTO: <?php echo $prodotto_1->name ?> </p>
        <p>PREZZO <?php echo $prodotto_1->price ?>  €  </p>
        <p>DESCRIZIONE: <?php echo $prodotto_1->description ?></p>
        
    </div>
    <div class="container">
        <p>PRODOTTO: <?php echo $prodotto_2->name ?> </p>
        <p>PREZZO <?php echo $prodotto_2->price ?>  €  </p>
        <p>DESCRIZIONE: <?php echo $prodotto_2->description ?></p>
        
    </div>
    <div class="container">
        <p>PRODOTTO: <?php echo $prodotto_3->name ?> </p>
        <p>PREZZO <?php echo $prodotto_3->price ?>  €  </p>
        <p>DESCRIZIONE: <?php echo $prodotto_3->description ?></p>
        
    </div>
</body>
</html>