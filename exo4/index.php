<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>partie5 ex4</title>
</head>

<body>
    <?php
       $tab = [
        "janvier",
        "fevrier",
        "mars",
        "avril",
        "mai",
        "juin",
        "juillet",
        "Aout",
        "septembre",
        "octobre",
        "novombre",
        "decembre"
    ];
    $name="Aout";
    if(in_array($name,$tab)){ // on verifie si il est dans le tableau   in array revoie true false
        $index=(array_search($name,$tab)); // array_search permet de chercher l'index  du $name dans $tab
        //avec_array_replace()  resplace les element d'un tableau par les element d'un autre tableau
        //$august=$nouvtab(7 => 'aout');
        //new_array=array_replace($tab,$august)
        //
        //
    }
   $tab[8]="Àout"; // alt + 0192 pour le À
   var_dump($tab[7]);
    ?>
</body>

</html>