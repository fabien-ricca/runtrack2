<?php   
    $str = "Les choses que l'on possede finissent par nous posseder";
    $count = 0; 

    while (isset($str[$count])){
        $count++;
    }

   while ($count >= 0){
        if (isset($str[$count])){
            echo $str[$count];
        }
        $count--;
    }
?>