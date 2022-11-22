<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" <?php if (isset($_POST['style'])){echo $_POST['style'];} 
                                        else{echo "style0.css";}
                                    ?>">
    <title>Document</title>
</head>


<body>
    <form method="post">
        <select name="style" id="choix" required>
            <option value="style1.css">Style 1</option>
            <option value="style2.css">Style 2</option>
            <option value="style3.css">Style 3</option>
        </select><br>

        <input id="submit" class="form-separate" type="submit" value="Envoyer">
    </form>
</body>
</html>