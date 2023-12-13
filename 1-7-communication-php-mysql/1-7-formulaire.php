<?php 
include_once 'connection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulaire de contact</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
            rel="stylesheet"
        >
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

        <h1 class="text-center text-dark">Mon formulaire contact</h1>
            <form action="./1-7-contacts.php" method="POST" >
            <div class="container col-md-8 offset-md-2">  
                <div class="fontuser"> 
                    <label><b>Nom</b></label>  
                    <input type="text" 
                            placeholder="Entrer votre nom"
                            name="nom" required>  
                    <i class="fa fa-user fa-lg"></i> 
                </div> 
                
                <div class="fontuser"> 
                    <label><b>Prenom</b></label>  
                    <input type="text"
                            placeholder="Entrer votre prenom "
                            name="prenom" required>  
                        <i class="fa fa-user fa-lg"></i> 
                </div>  
                
                <div class="fontuser"> 
                    <label><b>Prenom</b></label>  
                    <input type="email"
                            placeholder="Entrer votre email"
                            name="email" required>  
                            <i class="fa-solid fa-envelope"></i>
                </div>  
                
               <div class="text-center">
               <button type="submit">Enregistrer</button> 
                <a class="text-center" href="1-7-contacts.php">
                <i class="fa-solid fa-rotate-left"></i>
                Liste des utilisateurs</a>
               </div>
               
            </div>  
            </form>
    </body>
</html>



