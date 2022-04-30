<?php

class PetShop{
    public $name;
    public $price;
    public $description;
    public $image;
}


$prodotto_1 = new PetShop();
$prodotto_1->name='Osso di Plaastica';
$prodotto_1->price=14.99;
$prodotto_1->description='Osso in plastica simile ad un osso reale';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetShop</title>
</head>
<body>
    <h1>IL MIO NEGOZIO DI ANIMALI</h1>
    <div>
        <p>PRODOTTO: <?php echo $prodotto_1->name ?> </p>
        <p>PREZZO <?php echo $prodotto_1->price ?>  €  </p>
        <p>DESCRIZIONE: <?php echo $prodotto_1->description ?></p>
    </div>
</body>
</html>