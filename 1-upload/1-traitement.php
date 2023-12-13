
<h1>Traitement fichier !</h1>

<?php

// Si le fichier est envoyé non vide et qu'il y a pas d'erreur
if(isset($_FILES['fichier']) && $_FILES['fichier']['error'] == 0) {
    
    // on verifie que le fichier soit léger < 1Mo
    if ($_FILES['fichier']['size'] <= 1000000) 
    {
        $location = 'uploads/' . basename($_FILES['fichier']['name']);

        // on déplace le fichier de l'emplacement temporaire vers un emplacement choisi
        move_uploaded_file(
            $_FILES['fichier']['tmp_name'],
            $location
        );

        echo "Le fichier est sauvegardé sur le serveur!";
    }
    else {
        echo "Le fichier est lourd!";
    }
}

?>