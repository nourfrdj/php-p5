<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>partie5 ex7</title>
</head>

<body>
    <?php
    // function affichtableau($tab){
    //       foreach($tab as $code_depart => $nom_depart){
    //     echo("le code $clef est associé au departement $cell <br>");
    // }
    $tab = [
        "02" => "aisne",
        "59" => "nord",
        "60" => "oise",
        "62" => "pas-de-calais",
        "80" => "somme",
    ];
    echo"c'est le tableau avnat la modification<br>";
    var_dump($tab);
    $tab[51]="reims";
    echo("c'est le tableau apres la modification <br>");
    var_dump($tab);
    ?>
</body>
</html>