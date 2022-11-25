<style><?php include "style.css"; ?></style>
<?php 
    $mysqli = new mysqli('localhost', 'root', '', 'jour 09');   // On se connecte à phpmyadmin pour récupérer la Base de donnée
    $request = $mysqli->query("SELECT sum(superficie) FROM etage");       // On lance la requête pour récupérer la table
    $line = $request->fetch_array(MYSQLI_ASSOC);                // On récupère la première ligne sous forme de tableau
    
    
      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Superficie totale</th>
            </tr>
        </thead>

        <tbody>
            <?php 
            
                while($line != NULL){                               // Tant que $line n'est pas NULL (toujours la première ligne lors de la première boucle)
                    echo "<tr>";
                    foreach ($line as $key => $value){              // Pour chaque élément du tableau (ligne 1, 2, 3...)
                            echo '<td>' . $value . '</td>';
                        }
                    $line = $request->fetch_array(MYSQLI_ASSOC);    // On charge la seconde ligne, puis la troisième...
                    
                    echo "</tr>";
                } 
            ?>
        </tbody>
    </table>
</body>
</html>
                   