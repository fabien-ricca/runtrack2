<style><?php include "style.css"; ?></style> 

<form action="" method="GET" id="formulaire">
    <label for="nom"></label>
    <input type="text" id="nom" name="nom" placeholder="Nom" >
    
    <label for="prenom"></label>
    <input type="text" id="prenom" name="prenom" placeholder="Prenom" >
    
    <label for="age"></label>
    <input type="text" id="age" name="age" placeholder="Age" >

    <label for="mail"></label>
    <input type="text" id="mail" name="mail" placeholder="Mail" >
    
    <label for="submit"></label>
    <input type="submit" value="Envoyer" id="submit">
</form> 


<?php 
    $nbr = 0;

    foreach ($_GET as $value){
        if ($value !== ""){
            $nbr ++;
        }
    }
    echo "$nbr arguments ont été envoyés."
?>


