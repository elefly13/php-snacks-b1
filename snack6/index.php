<!-- SNACK6:
Utilizzare questo array: https://pastebin.com/CkX3680A. 
Includerlo in un file database.php... 
Stampiamo poi il nostro array mettendo gli insegnanti in un rettangolo grigio 
e i PM in un rettangolo verde. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack6</title>
    <link rel="stylesheet" href="style.css">
  
</head>
<body>
    <?php 

    include __DIR__ . '/database.php';
   ?>

  

<div class="gray">
    <?php 
    foreach ($db as $key => $jobs) {
        if ($key === 'teachers')
        foreach($jobs as $job) {
            echo '<h2>' . $job['name'] ." " .$job['lastname'] . '</h2>';
        }
    }
    ?>
    
</div>
<div class="green">
<?php 
    foreach ($db as $key => $jobs) {
        if ($key === 'pm')
        foreach($jobs as $job) {
            echo '<h2>' . $job['name'] ." " .$job['lastname'] . '</h2>';
        }
    }
    ?>
</div>



</body>
</html>

