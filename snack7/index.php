<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Snack 7</title>
</head>
<body>

    <?php 
    include __DIR__ . '/database.php';
    include __DIR__ . '/function.php';

    
       
        foreach($alunni as $alunno) {
            echo $alunno['nome'] ." " . $alunno['cognome'] ." Media dei voti: " . media($alunno['voti']) .'<br/>';
        }

   
    ?>
   
    
</body>
</html>