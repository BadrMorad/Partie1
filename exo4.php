<h1>Exercice4</h1>

<h2>Résultat</h2>

<?php
$phrase1 = "A man, a plan, a canal, Panam";

$phrase2 = "Engage le jeu que je le gagne";

function  est_palindrome($phrase) {
    $phrase = strtolower(str_replace ('','', $phrase));

    if($phrase == strrev ($phrase)){

        return "C'est un palidrome";
    }

    return "ce n'est pas un palindrome";
     



}

 echo est_palindrome($phrase1);

     
     
    


    // foreach ($phrase as $phrase) {

    //     if (est_paliindrome($phrase)) {

    //     echo "La phrase « " . $phrase ." » est plindrome.<br>";
    // } else {
    //     echo "La phrase « " . $phrase . " » nest pas plaindrom.<br>";   
    // }
    //  }
?>