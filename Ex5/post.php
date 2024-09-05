<?php

    $nome = $_POST["nome"];
    $jogadaPlayer = $_POST["jogada"];
    $jogadaCPU = random_int(1, 3);

    $pedra =    "<img src='./src/pedra.png' style='width: 100px'>";
    $papel =    "<img src='./src/papel.png' style='width: 100px'>";
    $tesoura =  "<img src='./src/tesoura.png' style='width: 100px'>";

    switch ($jogadaPlayer) {
        
        case ($jogadaPlayer == 1 and $jogadaCPU == 1):
            echo $pedra. $nome . " você escolheu PEDRA!<br>";
            echo $pedra. " Seu oponenete escolheu PEDRA!<br>";
            echo "EMPATE!";
            break;

        case ($jogadaPlayer == 1 and $jogadaCPU == 2):
            echo $pedra. $nome . " você escolheu PEDRA!<br>";
            echo $papel. "Seu oponenete escolheu PAPEL!<br>";
            echo "DERROTA!";
            break;

        case ($jogadaPlayer == 1 and $jogadaCPU == 3):
            echo $pedra. $nome . " você escolheu PEDRA!<br>";
            echo $tesoura. "Seu oponenete escolheu TESOURA!<br>";
            echo "VITÓRIA!";
            break;

        case ($jogadaPlayer == 2 and $jogadaCPU == 1):
            echo $papel. $nome . " você escolheu PAPEL!<br>";
            echo $pedra. "Seu oponenete escolheu PEDRA!<br>";
            echo "VITÓRIA!";
            break;

        case ($jogadaPlayer == 2 and $jogadaCPU == 2):
            echo $papel. $nome . " você escolheu PAPEL!<br>";
            echo $papel. "Seu oponenete escolheu PAPEL!<br>";
            echo "EMPATE!";
            break;
    
        case ($jogadaPlayer == 2 and $jogadaCPU == 3):
            echo $papel. $nome . " você escolheu PAPEL!<br>";
            echo $tesoura. "Seu oponenete escolheu TESOURA!<br>";
            echo "DERROTA!";
            break;

        case ($jogadaPlayer == 3 and $jogadaCPU == 1):
            echo $tesoura. $nome . " você escolheu TESOURA!<br>";
            echo $pedra. "Seu oponenete escolheu PEDRA!<br>";
            echo "DERROTA!";
            break;
        
        case ($jogadaPlayer == 3 and $jogadaCPU == 2):
            echo $tesoura. $nome . " você escolheu TESOURA!<br>";
            echo $papel. "Seu oponenete escolheu PAPEL!<br>";
            echo "VITÓRIA!";
            break;

                
        case ($jogadaPlayer == 3 and $jogadaCPU == 3):
            echo $tesoura. $nome . " você escolheu TESOURA!<br>";
            echo $tesoura. "Seu oponenete escolheu TESOURA!<br>";
            echo "EMPATE!";
            break;
    }

?>