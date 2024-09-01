<?php

    $nome = $_POST["nome"];

    $jogadaPlayer = $_POST["jogada"];

    $jogadaCPU = random_int(1, 3);

    switch ($jogadaPlayer) {
        
        case ($jogadaPlayer == 1 and $jogadaCPU == 1):
            echo $nome . " você escolheu PEDRA!<br>";
            echo "Seu oponenete escolheu PEDRA!<br>";
            echo "EMPATE!";
            break;

        case ($jogadaPlayer == 1 and $jogadaCPU == 2):
            echo $nome . " você escolheu PEDRA!<br>";
            echo "Seu oponenete escolheu PAPEL!<br>";
            echo "DERROTA!";
            break;

        case ($jogadaPlayer == 1 and $jogadaCPU == 3):
            echo $nome . " você escolheu PEDRA!<br>";
            echo "Seu oponenete escolheu TESOURA!<br>";
            echo "VITÓRIA!";
            break;

        case ($jogadaPlayer == 2 and $jogadaCPU == 1):
            echo $nome . " você escolheu PAPEL!<br>";
            echo "Seu oponenete escolheu PEDRA!<br>";
            echo "VITÓRIA!";
            break;

        case ($jogadaPlayer == 2 and $jogadaCPU == 2):
            echo $nome . " você escolheu PAPEL!<br>";
            echo "Seu oponenete escolheu PAPEL!<br>";
            echo "EMPATE!";
            break;
    
        case ($jogadaPlayer == 2 and $jogadaCPU == 3):
            echo $nome . " você escolheu PAPEL!<br>";
            echo "Seu oponenete escolheu TESOURA!<br>";
            echo "DERROTA!";
            break;

        case ($jogadaPlayer == 3 and $jogadaCPU == 1):
            echo $nome . " você escolheu TESOURA!<br>";
            echo "Seu oponenete escolheu PEDRA!<br>";
            echo "DERROTA!";
            break;
        
        case ($jogadaPlayer == 3 and $jogadaCPU == 2):
            echo $nome . " você escolheu TESOURA!<br>";
            echo "Seu oponenete escolheu PAPEL!<br>";
            echo "VITÓRIA!";
            break;

                
        case ($jogadaPlayer == 3 and $jogadaCPU == 3):
            echo $nome . " você escolheu TESOURA!<br>";
            echo "Seu oponenete escolheu TESOURA!<br>";
            echo "EMPATE!";
            break;
    }

?>