<h1>Exercice8</h1>

<h2>Résultat</h2>

<?php
function afficher_table_multiplication($nombre) {
    echo "Table de " . $nombre . "<br>";
    for ($i = 1; $i <= 10; $i++) {
        echo $i . " x " . $nombre  . " = " . ($i * $nombre) . "<br>";
        
    }
}
$nombre = 8; 
afficher_table_multiplication($nombre);
?>