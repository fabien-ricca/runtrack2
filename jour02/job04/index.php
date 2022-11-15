<!---------- Méthode while ------------->
<?php
    $a=1;

    while($a<=100){
        if($a % 3 === 0 && $a % 5 ===0){
            echo "FizzBuzz<br>";
        }

        else if($a % 3 ===0){
            echo "Fizz<br>";
        }
        
        else if($a % 5 ===0){
            echo "Buzz<br>";
        }
        else{
            echo "$a<br>";
        }

        $a++;
    }
?>


<!---------- Méthode for ------------->
<?php
    /*for ($i = 1; $i <= 100; $i +=1) {
        if($i % 3 === 0 && $i % 5 ===0){
            echo "FizzBuzz<br>";
        }

        else if($i % 3 ===0){
            echo "Fizz<br>";
        }
        
        else if($i % 5 ===0){
            echo "Buzz<br>";
        }
        else{
            echo "$i<br>";
        }
    }*/
?>