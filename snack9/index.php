<?php 
        require __DIR__ .'/data/database.php';
        require __DIR__ .'/api/server.php';
?>

<!-- Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G
Stampare tutti i nostri hotel con tutti i dati disponibili.
Avremo un file PHP con il nostro “database” e un file con tutta la logica.
## Snack 9B
Attraverso un parametro GET da inserire direttamente nell’url (uno alla volta), 
filtrare gli hotel che hanno un parcheggio, numero minimo di stelle o massima lontananza dal centro.
Se non c’è un filtro, visualizzare come in precedenza tutti gli hotel -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack9</title>
</head>
<body>
    <div class="container">
        <ul>
        <?php foreach($filtredHotels as $hotel) { ?>
            <li><?php echo $hotel['name']?></li>
            <li><?php echo $hotel['description']?></li>
            <li><?php echo $hotel['parking']?></li>
            <li><?php echo $hotel['vote']?></li>
            <li><?php echo $hotel['distance_to_center']?></li>
        <?php } ?>
        </ul>
    </div>
    
</body>
</html>
