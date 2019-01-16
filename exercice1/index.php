<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercice 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        // rand() génère une valeur aléatoire
        $age = rand(1,50);
            // si l'age est supérieur ou égale à 18 on affiche "vous êtes majeur"
            if($age >= 18)
            {
                echo 'Vous avez ' . $age . ' ans donc vous êtes majeur.';
            // sinon on affiche "Vous êtes mineur"
            }else{
                echo 'Vous avez ' . $age . ' ans donc vous êtes mineur.';
            }
    ?>
</body>
</html>