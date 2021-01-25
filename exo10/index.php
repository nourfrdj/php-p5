<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>partie5 ex9</title>
</head>

<body>
    <?php
    $tab = [
        02 => "aisne",
        59 => "nord",
        60 => "oise",
        62 => "pas-de-calais",
        80 => "somme",
    ];
    $compt=0;
    foreach($tab as $code_depart => $nom_depart){
        echo"le departement $nom_depart a le numero  $code_depart  <br>";
    }
    ?>
</body>
</html>