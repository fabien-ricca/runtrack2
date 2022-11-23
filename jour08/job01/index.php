<?php 
    session_start();
    
    if (isset($_SESSION['nbvisites'])){
        $_SESSION['nbvisites']++;
    }
    else{
        $_SESSION['visites']=1;
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour08 - job01</title>
</head>
<body>
    <?php 
        if(isset($_POST['reset'])){
            $_SESSION['nbvisites'] = 1;
        }

        echo 'Nombre de visites : ' . $_SESSION['nbvisites'];
    ?>

    <form action="" method="POST" >  
        <input type="submit" name="reset" value="reset" >
    </form>
</body>
</html>