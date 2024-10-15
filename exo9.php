<h1>Exercice9</h1>

<h2>Résultat</h2>

<?php
function est_imposable($age, $sexe) {
if ($sexe == 'F' && $age >= 18 && $age <= 35) {
    return true;
    if ($sexe == 'H' && $age > 20) {
    }
        return true;
    }
    return false;
}
$age = 32;
$sexe = 'F';
if (est_imposable($age,$sexe)) {
    echo " Age : " . $age . "<br>";
    echo "Sexe : " . $sexe . "<br>";
    echo "La personne est imposable.";

} else {
    echo "Age : " . $age . "<br>";
    echo "Sexe : " . $sexe . "<br>";
    echo " La personne n'est pas imposable.";
}
