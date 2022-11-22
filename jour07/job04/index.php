<?php
    function calcule($a, $operation, $b){
        $result = 0;

        if ($operation === "+"){
            $result = $a + $b;
        }
        else if ($operation === "-"){
            $result = $a - $b;
        }
        else if ($operation === "*"){
            $result = $a * $b;
        }
        else if ($operation === "/"){
            $result = $a / $b;
        }
        else if ($operation === "%"){
            $result = $a % $b;
        }
        
        return $result;
    }

    $a = 2;
    $b = "+";
    $c = 6;

    echo calcule($a, $b, $c);
?>