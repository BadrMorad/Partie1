<h1>Exercice4</h1>
<p>Ecrire un algorithme permettant de savoir is une phrase est est Palindrome</p>

<h2>Résultat</h2>

<?php
$phrase = "engage le jeu que je le gagne" ;
//function estPalindrome($phrase) {
    // lire la espace en minuscules
$phrase = strtolower($phrase);

//remplacer les espaces par des non espaces
$phrase = str_replace(' ', '', $phrase);

//lire à la phrase à l'envers
$phraseInverse = strrev($phrase);


if ($phrase == $phraseInverse) {
echo "la phrase « $phrase » est  Palindrome";
} else {
echo "la phrase « $phrase » est pas Palindrome";
}
?>