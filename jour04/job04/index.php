<style><?php include "style.css"; ?></style> 
<?php 

?>

<form action="" method="POST" id="formulaire">
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

<table>
    <thead>
        <tr>
            <th>Argument</th>
            <th>Valeur</th>
        </tr>
    </thead>

    <tbody>
        <?php 
            foreach ($_POST as $key => $value){
                if ($value !== ""){
                    echo "
                        <tr>
                            <td>$key</td>
                            <td>$value</td>
                        </tr>";
                }
            }
        ?>
    </tbody>
</table>