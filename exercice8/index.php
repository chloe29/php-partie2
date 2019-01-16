<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercice 8</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        $isOk = rand(true,false);
        if($isOk){
            echo 'C\'est ok !!';
        }else{
            echo 'C\'est pas bon !!!';
        }
    ?>
</body>
</html>