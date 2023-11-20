<?php
function sredniaArytmetyczna($tablica) {
    $iloscElementow = count($tablica);
    if ($iloscElementow === 0) {
        return 0; 
    }

    $suma = array_sum($tablica);
    $srednia = $suma / $iloscElementow;
    return $srednia;
}

$liczby = [5, 8, 12, 4, 9]; 
$wynik = sredniaArytmetyczna($liczby);
echo "Średnia arytmetyczna liczb w tablicy wynosi: $wynik";
?>
