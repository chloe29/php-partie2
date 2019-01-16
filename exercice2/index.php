<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercice 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
         // rand() génère une valeur aléatoire
        $isEasy = rand(true, false);
         // si la variable est vraie on affiche "C'est facile"
        if($isEasy == true){
           echo 'C\'est facile !!';
        }else{
           echo 'C\'est difficile !!!';
        }

        // conditions condensées : ternaires.
        // on teste la condition ($isEasy == true)
        // si la condition est vrai on affecte la valeur après le point d'interrogation
        // si la condition fausse on affecte alors la valeur après les deux points
    //  $isEasy = rand(true,false);
    //  echo ($isEasy == true) ? 'C\'est facile !!' : 'C\'est difficile !!!';
    ?>
</body>
</html>