<h1>Exercice5</h1>

<h2>Résultat</h2>

<?php
$montant_francs = 200;

$taux = 15.24/100;
$montant_euros = $montant_francs * $taux;

echo"Montant en francs = " . $montant_francs . "<br>";
echo $montant_francs . "francs = " . $montant_euros . " €";
?>