<?php
do{
    echo("Input 2 numbers, max value is 100,\n0 for exit\n");
    echo("number 1 - ");
    $number1 = readline();
    while($number1 > 100){
        echo("number is more than 100\nnumber 1 - ");
        $number1 = readline();
    }
    if($number1 == 0){
        break;
    }
    echo("number 2 - ");
    $number2 = readline();
    while($number2 > 100){
        echo("number is more than 100\nnumber 2 - ");
        $number2 = readline();
    }
    if($number2 == 0){
        break;
    }
    echo("Multiplied value - ");
    echo($number1 * $number2);
    echo("\n\n");
}while($number1 != 0 && $number2 != 0)
?>