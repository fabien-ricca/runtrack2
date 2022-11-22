<?php
    function bonjour($jour){
        if ($jour === true){
            echo "Bonjour.<br>";
        }
        else if($jour === false){
            echo "Bonsoir.<br>";
        }
        else{
            echo "Ceci n'est pas un boléen.";
        }
    }

    $a = true;
    $b = false;
    $c = "true";

    bonjour($a);
    bonjour($b);
    bonjour($c);
?>