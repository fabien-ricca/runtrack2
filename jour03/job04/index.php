<?php 
    $str = "Dans l'espace, personne ne vous entend crier";
    /*$reponse = strlen($str);*/
    $count =0;

    while (isset($str[$count])){
        $count++; 
    }
    echo "Il y a $count caractères dans cette phrase.";
    /*echo "la réponse est : $reponse";*/
?>