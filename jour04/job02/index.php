<style><?php include "style.css"; ?></style> 
<?php 

?>

<form action="" method="get" id="formulaire">
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
        <tr>
            <td>Nom</td>
            <td><?php if (isset($_GET['nom'])) {echo $_GET['nom'];} ?></td>
        </tr>
        <tr>
            <td>Prénom</td>
            <td><?php if (isset($_GET['prenom'])) { echo $_GET['prenom'];} ?></td>
        </tr>
        <tr>
            <td>Age</td>
            <td><?php if (isset($_GET['age'])) { echo $_GET['age'];} ?></td>
        </tr>
        <tr>
            <td>Mail</td>
            <td><?php if (isset($_GET['mail'])) { echo $_GET['mail'];} ?></td>
        </tr>

    </tbody>
</table>