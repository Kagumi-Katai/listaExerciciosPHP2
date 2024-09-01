<?php
    $entrada = $_POST ["entrada"];

        switch ($entrada) {           
            case 0:
                echo "VALOR IGUAL A ZERO";
                break;
            case $entrada > 0:
                echo "VALOR POSITIVO";
                break;
            case $entrada < 0:
                echo "VALOR NEGATIVO";
                break;
        }
?>