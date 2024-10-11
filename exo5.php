<h1>Exercice5</h1>

<h2>Résultat</h2>

<?php
define("TAUX_CONVERSION", 6.55957);
function convertir_francs_en_euros($montant_francs){

    $montant_euros = $montant_francs / TAUX_CONVERSION;

    $montant_euros = round($montant_euros,2);

    return $montant_euros;
}
// déclarer le momtant en francs
$montant_francs = 200;
$montant_euros = convertir_francs_en_euros($montant_francs);

echo"Montant en francs = " . $montant_francs . "<br>";
echo $montant_francs . "francs = " . $montant_euros . " €";
?>