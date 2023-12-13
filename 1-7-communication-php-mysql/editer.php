<?php 
include_once 'connection.php';
    $id = $_GET['id'];

    $req = $conn->query("SELECT * FROM contact WHERE id=".$id);
    $contact = $req->fetch_assoc();

    if(isset($_POST['nom']) || isset($_POST['prenom']) || isset($_POST['email'])){
        if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email'])) {
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $email = htmlspecialchars($_POST['email']);

            $update = $conn->query("UPDATE contact SET nom='".$nom."' , prenom = '".$prenom."', email='".$email."'
            WHERE id =".$id);

            header('Location: 1-7-contacts.php');
        }
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Modification du contact</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
            rel="stylesheet"
        >
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

        <h1 class="text-center text-dark">Modification du contact</h1>
            <form action=""  method="POST" >
            <div class="container col-md-8 offset-md-2">  
                <div class="fontuser"> 
                    <label><b>Nom</b></label>  
                    <input type="text" 
                            value="<?= $contact['nom']?>"
                            name="nom" required>  
                    <i class="fa fa-user fa-lg"></i> 
                </div> 
                
                <div class="fontuser"> 
                    <label><b>Prenom</b></label>  
                    <input type="text"
                            value="<?= $contact['prenom']?>"
                            name="prenom" required>  
                        <i class="fa fa-user fa-lg"></i> 
                </div>  
                
                <div class="fontuser"> 
                    <label><b>Prenom</b></label>  
                    <input type="email"
                            value="<?= $contact['email']?>"
                            name="email" required>  
                        <i class="fa fa-user fa-lg"></i> 
                </div>  
                
               <div class="text-center">
               <button type="submit">Modifier</button> 
                <a class="text-center" href="1-7-contacts.php">
                <i class="fa-solid fa-rotate-left"></i>
                Liste des utilisateurs</a>
               </div>
               
            </div>  
            </form>
    </body>
</html>



