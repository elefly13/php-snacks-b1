<?php 
    require __DIR__ .'/../data/database.php';

   if (isset($_GET['parking'])) {
       $filtredHotels = [];
       foreach($hotels as $hotel) {
           ($hotel['parking'] == true ? array_push($filtredHotels, $hotel) : null);
       }
   }
   elseif (isset($_GET['stars'])) {
        $stars = $_GET['stars'];
        $filtredHotels = [];
        foreach($hotels as $hotel) {
            ($hotel['vote'] >= $stars ? array_push($filtredHotels, $hotel) : null);
        }
    }
    elseif (isset($_GET['km'])) {
        $km = $_GET['km'];
        $filtredHotels = [];
        foreach($hotels as $hotel) {
            ($hotel['distance_to_center'] <= $km ? array_push($filtredHotels, $hotel) : null);
        }
    }
    else {
        $filtredHotels = $hotels;
    }


?>