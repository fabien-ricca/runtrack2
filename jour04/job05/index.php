<style><?php include "style.css"; ?></style> 

<form action="" method="POST" id="formulaire">
    <label for="username"></label>
    <input type="text" id="nom" name="username" placeholder="Username" >

    <label for="password"></label>
    <input type="text" id="nom" name="password" placeholder="Password" >
    
    <label for="submit"></label>
    <input type="submit" value="Envoyer" id="submit">
</form> 

<?php 
    // if (isset($_POST['username'])) {
    //     return $_POST['username'];
    // } else {
    //     return;
    // }

    foreach ($_POST as $key => $value){
        if ($value !== ""){
            if ($_POST['username'] === "John" && $_POST['password'] === "Rambo") {
                echo "C'est pas ma guerre !";
                break;
            }
            else if ($_POST['username'] !== "John" || $_POST['password'] !== "Rambo"){
                echo "Votre pire cauchemar...";
                break;
            }
            else{
                echo "";
            }
        }

    }

?>



