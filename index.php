<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Snacks blocco 1</title>
</head>
<body>
<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa
del calendario.
Ogni array avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<?php 
    $partite = [
        [
            "squadraCasa" => " Virtus Roma",
            "squadraOspite" => " Aquila Trento",
            "puntiCasa" => 58,
            "puntiOspite" => 70,
        ], 
        [
            "squadraCasa" => " Reyer Venezia",
            "squadraOspite" => " Fortitudo Bologna",
            "puntiCasa" => 74,
            "puntiOspite" => 90,
        ],    
        [
            "squadraCasa" => "  Pistoia Basket",
            "squadraOspite" => " Basket Napoli",
            "puntiCasa" => 82,
            "puntiOspite" => 68,
        ],    
        [
            "squadraCasa" => " Fortitudo Bologna",
            "squadraOspite" => " Scafati Basket",
            "puntiCasa" => 75,
            "puntiOspite" => 88,
        ],    
        [
            "squadraCasa" => " Mens Sana Siena",
            "squadraOspite" => " Junior Casale",
            "puntiCasa" => 56,
            "puntiOspite" => 60,
        ],       
    ];


    for ($i = 0; $i < count($partite); $i++) {
        echo "<h3>" .$partite[$i]["squadraCasa"] ." - " .$partite[$i]["squadraOspite"] ." | " .$partite[$i]["puntiCasa"] ."-" .$partite[$i]["puntiOspite"] ."</h3>";
    }
?>

<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare
(cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola e che 
age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php 
    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];
    $flagName = false;
    $flagMail = false;
    $flagAge = false;


    if (empty($name && $mail && $age)) {
        echo "inserisci nome , mail, età";
    }
    else {
        if (strlen($name) >= 3) {
            $flagName = true;
        }
        if (strpos($mail,"@") !==false && strpos($mail,".") !==false) {
            $flagMail = true;
        }
        if (is_numeric($age)) {
            $flagAge = true;
        }
    }
    if ($flagName == false || $flagMail == false || $flagAge == false) {
        echo "Accesso negato";
    } else {
        echo "Accesso riuscito";
    }

?>

    <h2><?php echo "$name";?></h2>
    <h2><?php echo "$mail";?></h2>
    <h2><?php echo "$age";?></h2>




    
</body>
</html>