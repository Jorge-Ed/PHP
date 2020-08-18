<?php

    $nome = "Jorge";
    $idade = 18;

    //Exercicio de fixação:

    echo $nome." você tem ".$idade." anos!"; //Jorge você tem 18 anos!
    echo "<br>";
    echo '"'.$nome.' você tem '.$idade.' anos!"'; //"Jorge você tem 18 anos!"
    echo "<br>";
    echo '"'.$nome." você tem '".$idade."' anos!"; //"Jorge você tem '18' anos!"
    echo "<p>";

    //Outra forma de fazer:

    echo "$nome você tem $idade anos!";
    echo "<br>";
    echo "\"$nome você tem $idade anos!\"";
    echo "<br>";
    echo "\"$nome você tem '$idade' anos!\"";
    
?>