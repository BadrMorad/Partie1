<h1>Exercice5</h1>

<h2>Résultat</h2>

<?php
function calculer_facture($prix_unitaire_ht, $quantite, $taux_tva){
 $montant_ht = $prix_unitaire_ht * $quantite;
$montant_tva = $montant_ht * $taux_tva;
return round($montant_ht + $$montant_tva, 2);
}

$prix_unitaire_ht = 9,99;
$quantite = 5;
$taux_tva = 0.2;

$montant_total = calculer_facture($prix_inutaire_ht, $quantite, $taux_tva);

echo "Prix unitaire de l'article . : " . $prix_unitaire_ht . " €<br>";
echo "Quantité : " . $quantite . "<br>";
echo "Taux de TVA : " . $taux_tva . "<br>";
echo "Le montant de la facture à régler est de : " . $montant_total . " €";
?>
