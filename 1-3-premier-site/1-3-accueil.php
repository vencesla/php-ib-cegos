<?php
 // Ecrivez/Déclarez vos varaibles et fonctions PHP ici
 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Mon premier site</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
            rel="stylesheet"
        >
    </head>
    <body>
    <div style="margin: 50px 50px;">
    <?php include_once('1-3-header.php') ;

        $compétences = [
            "front" => "Angular",
            "back1" => "Spring Boot",
            "projet" => "Jira",
            "api" => "Swagger",
            "agile" => "Safe",
            "back2" => "PHP"
        ];
    ?>

       
            
        <div>
        <?=date("H:i:s"); ?>
        </div>

         <h3>Resumé</h3>
         <div>
            <h2>Développeur Full Stack</h2>
            <p>JE suis Admir MABIKI, Ingénieur d'études en développement Angular/Java et En PHP/Symfony.</p>
            <p>Mes compétences se concentrent sur trois piliers d'expériences, le développement des applications web dynamique avec des interface ergonomiques 
                et le développement de la partie serveur</p>
         </div>

         <h3>Mes compétences</h3>
         <div>
            <!-- rendre dynamique la liste de vos compétences -->

            <ul>
                <?php foreach($compétences as $key => $comp) {?>
                <li><?= $comp?></li>
                <?php }?>
            </ul>

            <!-- Afficher dynamiquement le nombre total de vos compétences -->
            <p>j'ai au total <?= count($compétences) ?> compétences</p>
            <p><?= md5("0000") ?></p>
         </div>


         <?php include_once('1-3-footer.php') ;?>
        </div>


    </body>
</html>




