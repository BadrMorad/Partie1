<h1>Exercice11</h1>

<h2>Résultat</h2>

<?php
$marques_voitures = ["Peugeot", "Renault", "BM","Mercedes"];

$nombre_marques = count($marques_voitures);
echo "Il y a $nombre_marques marques de voitures dans le tableau :<br>";

echo "<ul>";
foreach ($marques_voitures as $marque) {
    echo "<li>$marque</li>";
}
echo "</ul>";
?>