


<?php
// code de récupération des données



if(!empty($_POST['nom']) && !empty($_POST['cours'])) {
    echo "<h1>Données bien reçu !</h1>";
    echo sprintf("Vous êtes %s  et vous suivez le cours de %s", $_GET['nom'], $_GET['cours']);
    $nom = htmlspecialchars($_POS['nom']);
    echo $nom;
}else{
    echo "Veillez saisir votre nom aisni que votre cours actuel";
}

?>