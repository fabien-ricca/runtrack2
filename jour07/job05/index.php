<?php
    function occurences($str, $char){
        $count =0;
        for ($i=0; isset($str[$i]); $i++){
            if ($str[$i] === $char){
                $count++;
            }
        }

        return $count;
    }

    $a = "Bonjour";
    $b = "o";
    
    echo 'Dans la str ' . $a . ' il y a ' . occurences($a, $b) . ' occurences de la lettre ' . $b . '.';
?>