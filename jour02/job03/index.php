<!---------- Méthode while ------------->
<?php
    // $a = 0;
    // while ($a <= 100) {
    //     if($a<=20){
    //         echo "<i>$a</i><br>";
    //     }

    //     else if($a>=25 && $a<=50 && $a!==42){
    //         echo "<u>$a</u><br>";
    //     }

    //     else if($a === 42){
    //         echo "LaPlateforme_ (Cheh la 42...)<br>";
    //     }

    //     else{
    //         echo "$a<br>";
    //     }
        
    //     $a++;
    // }
?>


<!---------- Méthode for ------------->
<?php
    for ($i = 0; $i <= 100; $i +=1) {
        if($i<=20){
            echo "<i>$i</i><br>";
        }

        else if($i>=25 && $i<=50 && $i!==42){
            echo "<u>$i</u><br>";
        }

        else if($i === 42){
            echo "LaPlateforme_ (Cheh la 42...)<br>";
        }

        else{
            echo "$i<br>";
        }
    }
?>