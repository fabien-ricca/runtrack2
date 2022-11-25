<style><?php include "style.css"; ?></style>
<?php 
    $mysqli = new mysqli('localhost', 'root', '', 'jour 09');
    $request = $mysqli->query("select * from etudiants");
    $line = $request->fetch_array(MYSQLI_ASSOC);
    
    
      
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
                <?php 
                    foreach ($line as $key => $value){
                            echo '<th>' . $key . '</th>';
                        }
                ?>
            </tr>
        </thead>

        <tbody>
            <?php 
            
                while($line != NULL){
                    echo "<tr>";
                    foreach ($line as $key => $value){
                            echo '<td>' . $value . '</td>';
                        }
                    $line = $request->fetch_array(MYSQLI_ASSOC);
                    
                    echo "</tr>";
                } 
            ?>
        </tbody>
    </table>
</body>
</html>
                   