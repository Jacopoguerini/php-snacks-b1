<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
 -->

<?php 

    
    $parameters = [
        $name = $_GET["name"],
        $mail = $_GET["mail"],
        $age = $_GET["age"]
    ];

    for ($i; $i <= count($parameters); $i++) {
        if (strlen($name) > 3 && str_contains($mail, '.') && str_contains($mail, '@') && is_numeric($age) == true)  {
            echo "Accesso riuscito";
        } else {
            echo "Accesso negato";
        }
    }

 ?>
 