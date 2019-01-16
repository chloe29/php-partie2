<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercice 6</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        // rand() envoie une valeur aléatoire (entre 1 et 100)
        $age = rand(1,100);
        if($age >= 18)
        {
            echo 'Tu es majeur';
        }else{
            echo 'Tu n\'es pas majeur';
        }
    ?>
</body>
</html>