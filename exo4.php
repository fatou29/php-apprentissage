!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premier projet</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/bootstrap.min.js" defer></script>
</head>
<body>
    <?php include('./partial/_navBar.php') ?>

    <div class="container">
    <h4>Exercice 4</h4>
    <h5>1- créer une <a href="https://www.latoilescoute.net/table-de-vigenere" target="_blank">table de vigenère</a></h5>
    <?php
    // create a vegenere tab

    $alphabetTab = [];
    $vigenereTab= [];
    $keyTab = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

    $alphabetTab = str_split($keyString);

    $vigenereTab = [];

    $tab = $keyArr;

    for($i = 0; $i<count($alphabetTab); $i++){

        for($j = 0; $j<count($alphabetTab); $j++){

            $vigenereTab[$alphabetTab[$j]] = $tab[$j];
        }

        $VigenereTab[$alphabetTab[$i]] = $vigenereTab;

        $tab[] = $tab[0];
        array_splice($tab, 0, 1);

    }

    //var_dump($tabVigenere);
    //echo $tabVigenere['E']['O'];


    ?>
    <h5>2- encode le message "APPRENDRE PHP EST UNE CHOSE FORMIDABLE" avec la clé "BACKEND"</h5>
    <?php
    $message = "APPRENDRE PHP EST UNE CHOSE FORMIDABLE";
    $key = "BACKEND";
    // TO DO
    $cryptedMessage = "";
    /**
    * astuce pour la rotation de la clé BACKEND
    * 14 / 7 -> 2
    * 15 / 7 -> 2 reste 1
    * pour récuperer le "reste 1" il faut faire un modulo
    * 15 % 7 -> 1
    * 176 % 7 -> 1 (25 x 7 et reste 1)
    */

    $tabCleBackend = str_split($key);
    $tabMessage = str_split($message);

    $numCle = 0;