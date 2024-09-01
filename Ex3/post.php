<?php
    $valorA = $_POST ["a"];
    $valorB = $_POST ["b"];

    if ($valorA > $valorB) {
        echo "<p>". $valorA ." é maior que ". $valorB ."<p>";
    }
    else{
        echo "<p>". $valorB ." é maior que ". $valorA."<p>";
    }
?>