<?php

session_start();                                // On lance la session



if(isset($_POST['submit'])) {                   // Si $_POST['submit']n'est pas vide 
    $_SESSION['user'][] = $_POST['prenom'];       // On transforme $_SESSION['user] en tableau pour y stocker les prénoms
}

if(isset($_POST['reset'])) {                    // si le bouton reset est pressé
    unset($_SESSION['user']);                       // On supprime $_['session user']
}



?>

<form method="POST" id="form">
    <input type="text" name="prenom" id="prenom" placeholder="Entrez votre prénom ">
    <input type="submit" name="submit" value="Envoyer">
    <input type="submit" name="reset" value="Reset">
</form>



<?php
        if(isset($_SESSION['user'])) {                      
            foreach($_SESSION['user'] as $values){              // On récupère chaque prénom
                if ($values != ""){                             // Si la valeur est no nulle
                    echo $values . '</br>';                         // On affiche le prénom
            
                }
            }
        }
    ?>
