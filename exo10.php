<h1>Exercice10</h1>

<h2>Résultat</h2>

<?php
$montant_a_payer = 152; 
$montant_verse = 20;

$reste_a_rendre = $montant_verse - $montant_a_payer;

echo "Montant à rendre : " . $reste_a_rendre . "€<br>";
$billets_10 = floor($reste_a_rendre / 10);
$reste_a_rendre %=10;

$billets_5 = floor($reste_a_rendre / 5);
$reste_a_rendre %= 5;

$pieces_2 = floor($reste_a_rendre / 2);
$pieces_1 = $reste_a_rendre % 2;

echo "$billets_10 billets de 10 €<br>";
echo "$billets_5 billets de 5 €<br>";
echo "$pieces_2 billets de 2 €<br>";
echo "$pieces_1 billets de 1 €<br>";

?>