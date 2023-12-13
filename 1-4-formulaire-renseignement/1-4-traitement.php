<?php
// Ajouter le code de traitement du formulaire

$nom = htmlspecialchars($_POST['nom']);
$email = htmlspecialchars($_POST['email']);
$ville = htmlspecialchars($_POST['ville']);
$message = htmlspecialchars($_POST['message']);

    if(!empty($nom) && !empty($email) && !empty($ville) && !empty($message)) {


        echo sprintf("Bonjour %s , votre message a été envoyé, nous recontacterons à partir de votre email: %s", $nom,$email);
        echo '<br/>';
        echo '<br/>';
    }else {
        echo "Veillez remplir tous les champs du formulaire";
    }
    
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