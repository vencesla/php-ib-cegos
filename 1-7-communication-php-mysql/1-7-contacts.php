<?php
include_once 'connection.php';

if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email'])) {
    if(!empty($_POST['nom']) && !empty($_POST['prenom'] && !empty($_POST['email']))){
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);

        $result =$conn->query("INSERT INTO contact(nom, prenom, email) VALUES('".$nom."','".$prenom."','".$email."')");
        //echo $conn->affected_rows . 'Enregistrement affecté par la requête INSERT <br>';
        echo "
        <div class='container mt-4'>
        <div class='alert alert-success col-md-4 col-md-offset-2'>Votre utilisateur a été ajouté</div>
        </div>"
        ;
    
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Liste de contacts</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
        
    </head>
    <body>

        <div class="container">
        <h1 class="text-center">Liste de contacts</h1>

        <a class="btn btn-primary mb-4" href="./1-7-formulaire.php">
        <i title="Ajouter un contact" class="fa-solid fa-user"></i>
        </a>

        <table class="table table-bordered table-stripped">
            <thead class="table-dark">
                <tr>
                    <td scope="col">Id</td>
                    <td scope="col">Nom</td>
                    <td scope="col">Prénom</td>
                    <td scope="col">Email</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
            <?php 

            $results = $conn->query("SELECT * FROM contact");
            while($contact = $results->fetch_assoc()) {
            ?> 
            <tr>
                <th scope="row"><?= $contact['id']?></th>
                <td><?= $contact['nom']?></td>
                <td><?= $contact['prenom']?></td>
                <td><?= $contact['email']?></td>
                <td>
                    <a href="delete.php?id=<?= $contact['id']?>">
                        <i title="Supprimer" class="fa-solid fa-trash fa-5"></i>
                    </a>
                    <a  class="ms-3" href="editer.php?id=<?= $contact['id']?>">
                        <i title="Editer" class="fa-solid fa-pencil fa-5"></i>
                    </a>
                </td>
            </tr>
            <?php } ?>  
    </tbody> 
</table>

        </div>

    </body>
</html>



