<?php

    $numero = $_POST["numero"];

    if(($numero %2) == 0) {
        echo "O número é par!";
    } 
    else {
        echo "O número é ímpar!";
    }

?>