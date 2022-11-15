<?php
   for($i=2; $i<1000; $i++){
        $div = 0;
        
        for($a=1; $a<=$i; $a++){
            if($i % $a === 0){
                $div ++;
            }
        }

        
        if ($div === 2){
            echo "$i<br>";
        }
    }
?>