<?php 
    setcookie('nbvisites', 0, time()+3600);
    
    if(isset($_POST['reset'])){
        $_COOKIE['nbvisites'] = 0;
    }
    if (isset($_COOKIE['nbvisites'])){
        setcookie('nbvisites', $_COOKIE['nbvisites']+1, time()+3600);
    }
    echo 'Nombre de visites : ' . $_COOKIE['nbvisites'];
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
    <form action="" method="POST" >  
         <input type="submit" name="reset" value="reset" >
     </form>
 </body>
</html> 