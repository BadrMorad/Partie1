<h1>Exercice13</h1>

<h2>Résultat</h2>

<?php
$notes = [ 22, 12, 8, 19, 3, 16, 11, 13,];
$somme = 0;
foreach ($notes as $note) {
    $somme += $note;
}
$moyenne = $somme / count($notes);
//Afficher la moyenne avec 2 décimales
echo "La moyenne générale est de : " . number_format($moyenne, 2) . "<br>";
?>