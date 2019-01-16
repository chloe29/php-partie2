<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercice 7</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        // rand() envoie une valeur aléatoire (vrai ou faux)
        $isOk = rand(true, false);
        if($isOk == false)
        {
            echo 'C\'est pas bon !!!';
        }else{
            echo 'C\'est ok !!';
        }
    ?>
</body>
</html>