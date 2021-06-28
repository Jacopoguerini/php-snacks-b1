<!-- Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
 -->

<?php 

    $array = [];

    for ($i = 0; count($array) < 15; $i++) {
        $n = rand(1, 100);
        if (in_array($n, $array) == false) {
            array_push($array, $n);
        }
    }

    echo "<pre>";
    var_dump($array);
    echo "</pre>";

?>
