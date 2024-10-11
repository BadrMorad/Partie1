<h1>Exercice3</h1>

<h2>Résultat</h2>

<?php
// Phrase de l'exercice
$ancienne_phrase = "Notre formation DL commence aujourd'hui";
$nouvelle_phrase = str_replace("aujourd'hui","demain", "$ancienne_phrase");

// Afficher l'ancienne et la nouvelle phrase 

echo "L'ancienne phrase est : " .  $ancienne_phrase . "<br>";
echo "La nouvelle phrase est : " . $nouvelle_phrase;


