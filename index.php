<?php
//ceci et un tableau en php une genre de super variable
//qui aurai des sous variable pour stocker plus d'information,
$departement[59] = 'Nord';
$departement[62] = 'Pas de calais';
$departement[80] = 'Somme';
$departement[02] = 'Aisne';
$departement[60] = 'Oise';
//ici j'affiche avec echo la valeur de la 3eme case du tableau
foreach ($departement as $key => $value) {
  echo 'Le département: '.''.$value.''.' a le numéro '.''.$key ; ?>
  <br>
<?php
}
 ?>
