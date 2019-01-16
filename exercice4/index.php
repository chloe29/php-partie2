<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercice 4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        $magnitude = rand(1,9);
        // L'instruction switch équivaut à une série d'instructions if. 
        // Elle permet de comparer la même variable avec des valeurs différentes et d'éxecuter différentes parties de code suivant la valeur à laquelle la variable est égale
        switch ($magnitude)
        {
            // case correspond au cas que l'on applique à la valeur
            case 1:
                echo 'Magnitude 1 : Micro-séisme impossible à ressentir.';
            // break permet de sortir du switch, PHP ne lira alors pas les case suivantes
            break;
            case 2:
                echo 'Magnitude 2 : Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
            break;
            case 3:
                echo 'Magnitude 3 : Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
            break;
            case 4:
                echo 'Magnitude 4 : Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
            break;
            case 5:
                echo 'Magnitude 5 : Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
            break;
            case 6:
                echo 'Magnitude 6 : Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
            break;
            case 7:
                echo 'Magnitude 7 : Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
            break;
            case 8:
                echo 'Magnitude 8 : Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
            break;
            case 9:
                echo 'Magnitude 9 : Séisme capable de tout détruire sur une très vaste zone.';
            break;
            // default correspond au else (si aucune condition au dessus n'est remplie)
            default:
                echo "Cette magnitude n'existe pas";
            break;
        }
    ?>
</body>
</html>