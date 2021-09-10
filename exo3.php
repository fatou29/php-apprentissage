<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/bootstrap.min.css">

  <title> exercice 3</title>
</head>

<body>
  <?php include("./partial/_navBar.php"); ?>
  <div class="container"> </div>


  <h1>exercice 3 </h1>
  <?php
  $tab1 = ["moteur", "carotte", "haricot", "pomme de terre", "usine", "salade", "navet", "marteau"];
  ?>
  <p> Voici les éléments du tableau de base:
  <ul>
    <li><?php echo $tab1[0]; ?></li>
    <li><?php echo $tab1[1]; ?></li>
    <li><?php echo $tab1[2]; ?></li>
    <li><?php echo $tab1[3]; ?></li>
    <li><?php echo $tab1[4]; ?></li>
    <li><?php echo $tab1[5]; ?></li>
    <li><?php echo $tab1[6]; ?></li>
    <li><?php echo $tab1[7]; ?></li>
  
  </ul>
  </p>
  <h3>Premier exercice :</h3>
  <p>Retirer les 3 intrus : et affichez les valeurs </p>
  <p>résultat :
    <?php
    // delete the 5th element
    array_splice($tab1, 4, 1);
    //delete the first element 
    array_shift($tab1);
    //delete the last element
    array_pop($tab1);
        ?>
    <ul>
    <li><?php echo $tab1[0]; ?></li>
    <li><?php echo $tab1[1]; ?></li>
    <li><?php echo $tab1[2]; ?></li>
    <li><?php echo $tab1[3]; ?></li>
    <li><?php echo $tab1[4]; ?></li>
    </ul>
    <h3> second exercice :</h3>
    <p> transformer la chaine de caractère "bleu, vert, noir, rouje, jaune en un tableau :</p>
    <p> Ajoutter en première position du tableau la valeur "violet"</p>
    <p> Résultat : 
    <?php
    $startString = "bleu, vert, noir, rouge, jaune";
    // convert the string into an array
    $tab2 = explode(" , ", $startString);
    //insert on the beginning of a array
    array_unshift($tab2, "violet");
    ?>
    </p>
   <ul>
      <li><?php echo $tab2[0]; 
      ?></li>
      <li><?php echo $tab2[1]; 
      ?></li>
      <li><?php echo $tab2[2]; 
      ?></li>
      <li><?php echo $tab2[3]; 
      ?></li> 
      <li><?php echo $tab2[4]; 
      ?></li>
      <li><?php echo $tab2[5]; 
      ?></li>

 </ul>
  </p>

  <script src="/js/bootstrap.bundle.min.js"></script>

</body>

</html>