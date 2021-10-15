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


    if (empty($name || $mail || $age)) {
        echo "inserisci nome, mail, età";
    }
    else {
        if (strlen($name) >= 3) {
            $flagName = true;
        }
        if (strpos($mail,"@") !==false || strpos($mail,".") !==false) {
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




<!-- SNACK 3
    Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore
    un array di post associati a quella data. Stampare ogni data con i relativi post. -->
<?php 

    $posts = [

        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];


?>
<ul>
    <?php
        foreach ($posts as $key => $value) {
            echo
            '<li>'
                . $key
                .'<ul>'
                    . '<li>';
                    foreach($value as $post) {
                        echo 'Titolo: ' .$post["title"] . '<br/>';
                        echo 'Autore: ' .$post["author"] . '<br/>';
                        echo 'Testo: ' .$post["text"] . '<br/>';
                    }
                    echo '</li>'
                . '</ul>'
            .'</li>'; 
        };
    ?>
</ul>



<!-- SNACK 4
    Creare un array con 15 numeri casuali ( da 1 a 100), 
    tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php
    $myArray = [];

    while (count($myArray) < 15) {
        $newNum = rand(1, 100);
        if (!in_array($newNum, $myArray)) {
            $myArray[]= $newNum;

        }
        
    }
    var_dump($myArray);
?>


<!-- SNACK 5
    Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi.
    Ogni punto un nuovo paragrafo. -->
<?php 
    $bigParagrafo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora reprehenderit totam minima tempore assumenda delectus, hic, id cumque vel rem blanditiis dolore eaque, quis numquam fugiat suscipit ab iste. Eum!
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora reprehenderit totam minima tempore assumenda delectus, hic, id cumque vel rem blanditiis dolore eaque, quis numquam fugiat suscipit ab iste. Eum!";

?>

<?php 
    var_dump($paragrafi = explode(".", $bigParagrafo));
    foreach ($paragrafi as $paragrafo) {
        echo '<p>' . $paragrafo .'.' .'</p>';
    }
?> 
 
 
</body>
</html>