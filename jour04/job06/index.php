<style><?php include "style.css"; ?></style> 

<form action="" method="POST" id="formulaire">
    <label for="nombre"></label>
    <input type="text" id="nom" name="nombre" placeholder="Nombre" >

    <label for="submit"></label>
    <input type="submit" value="Envoyer" id="submit">
</form> 

<?php 
    
    foreach ($_POST as $key => $value){
        if ($value !=="" && (int)($value) % 2 === 0 ) {
            echo "Nombre pair!";
        }
        else if ($value !=="" && (int)($value) % 2 !== 0 ) {
            echo "Nombre impair!";
        }
    }
    
?>



