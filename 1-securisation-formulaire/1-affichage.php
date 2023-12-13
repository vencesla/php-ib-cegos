<?php
// code de récupération des données
if(!empty($_POST['nom']) && !empty($_POST['cours'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $cours =  htmlspecialchars($_POST['cours']);
    echo "<h1>Données bien reçu !</h1>";
    echo sprintf("Vous êtes %s  et vous suivez le cours de %s", $nom, $cours);
}else{
    echo "Veillez saisir votre nom aisni que votre cours actuel";
}


?>