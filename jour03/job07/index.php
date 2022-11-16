<?php   
    $str = "Certaines choses changent, et d'autres ne changeront jamais.";

    $str2 = "";
    $i = 0; 

    while (isset($str[$i])){
        if (!isset($str[$i+1])){
            $str2 = $str2.$str[0];
    
        }else{ 
            $str2 = $str2.$str[$i+1];
        }
        $i++;
    }
    echo $str2;
?>