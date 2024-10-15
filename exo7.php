<h1>Exercice7</h1>

<h2>Résultat</h2>

<?php
function determiner_categorie($age) {
    if ($age >= 6 && $age <=7) {
        return "Poussin";
    } elseif ($age >= 8 && $age <= 9){
            return "Poussin";  
        } elseif ($age >= 10 && $age <= 11) {
            return "Minime";
        } elseif ($age >= 12) {
                return "Cadet";
            }else {
                return "Catégorie mon gérée";
            }
        }
    $age = 10; // Change cette valeur pour tester avec d'autre àge
    $categorie = determiner_categorie($age);
    echo "L'enfant qui a " . $age . " ans appartient à la catégorie « ". $categorie . " ».";
    ?>
