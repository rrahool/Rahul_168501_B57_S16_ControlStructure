<?php

$n      = $_GET['n'];
$symbol = $_GET['symbol'];

function printSymbols($totalSymbols){
    $r = rand(0,200);
    $g = rand(0, 200);
    $b = rand(0, 200);

    for($i=1; $i<=$totalSymbols; $i++){
        echo "<span style='color: rgb($r,$g,$b)'>".$GLOBALS['symbol']."</span>";
    }
} // end of printSymbols function

function printSpaces($totalSpaces){
    for($i=1; $i<=$totalSpaces; $i++){
        echo "&nbsp;";
    }
} // end of printSpaces function

function drawButterfly($n){
    echo "<pre>";

    for($i=1;$i<=$n;$i++){
        printSymbols($i);
        printSpaces(($n-$i)*2);
        printSymbols($i);
        echo "<br>";
    }
    for($i=$n-1;$i>=1;$i--){
        printSymbols($i);
        printSpaces(($n-$i)*2);
        printSymbols($i);
        echo "<br>";
    }

    echo "</pre>";
} // end of printSpaces function

for($i=1;$i<=8;$i++)
    drawButterfly($n * $i);

?>