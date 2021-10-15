<?php 
function media($voti) {
    $nVoti = count($voti);
    $somma = 0;
    foreach($voti as $voto) {
        $somma += $voto;
    }
    return $somma/$nVoti;
}


?>