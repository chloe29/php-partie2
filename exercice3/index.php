<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercice 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        // // rand() envoie une valeur aléatoire
        // $age = rand(1,100);
        // // array possède les deux valeurs de la variable $genderList
        // $genderList = array("homme","femme");
        // // array_rand prend une valeur aléatoire dans le tableau de la variable $genderList
        // $gender = array_rand($genderList,1);
        //     if($gender == "homme" && $age >= 18){
        //         echo 'Vous êtes un homme de ' . $age . ' ans et vous êtes majeur.';
        //     }else if($gender == "homme" && $age < 18){
        //         echo 'Vous êtes un homme ' . $age . ' ans et vous êtes mineur.';
        //     }else if($gender == "femme" && $age >= 18){
        //         echo 'Vous êtes une femme ' . $age . ' ans et vous êtes majeure.';
        //     }else if($gender == "femme" && $age < 18){
        //         echo 'Vous êtes une femme ' . $age . ' ans et vous êtes mineure.';
        //     }else{
        //         echo 'Renseignez des infos valides.';
        //     }

        $age = rand(1,100);
        $genderArray = array("homme","femme");
        $gender = $genderArray[rand(0,1)];
            // $age > 0 : être sûre d'une valeur positive
            if($age > 0 && ($gender == "femme" || $gender == "homme")){
                if($age >= 18 && $gender == "femme"){
                    echo "Vous êtes une femme majeure de " . $age . " ans.";
                }else if($age < 18 && $gender == "femme"){
                    echo "Vous êtes une femme mineure de " . $age . " ans.";
                }else if($age >= 18 && $gender == "homme"){
                    echo "Vous êtes un homme majeur de " . $age . " ans.";
                }else if($age < 18 && $gender == "homme"){
                    echo "Vous êtes un homme mineur de " . $age . " ans.";
                }
            }else{
                echo "Veuillez entrer des infos valides.";
            }
    ?>
</body>
</html>