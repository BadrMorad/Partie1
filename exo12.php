<h1>Exercice12</h1>

<h2>Résultat</h2>

<?php
$prenom_langur = [
    "Mickael"=> "FRA",
    "Virgile"=> "ESP",
    "Marie-Claire" => "ENG"
];
foreach ($prenom_langur as $prenom => $langur){
    switch ($langur) {
        case 'FRA': 
            echo"Salut $prenom<br>";
            break;
            case'ENG':
                echo"Hello $prenom<br>";
                break;
                case'ESP':
                    echo "Hola $prenom<br>";
                    break;
    }
}
?>