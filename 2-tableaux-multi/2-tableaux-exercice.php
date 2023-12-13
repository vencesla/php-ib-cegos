
<?php
$fruits = array(
   array('fruit' => 'Mangue', 'quantite' => 35, 'commande' => 3),
   array('fruit' => 'Orange', 'quantite' => 25, 'commande' => 4),
   array('fruit' => 'Clémentine', 'quantite' => 10, 'commande' => 8),
   array('fruit' => 'Poire', 'quantite' => 5, 'commande' => 9),
   array('fruit' => 'Fraise', 'quantite' => 45, 'commande' => 3)
);

$ages = array(
    array('adulte' => 18, 'mineur' => 8),
    array('adulte' => 18, 'mineur' => 10),
    array('adulte' => 20, 'mineur' => 15),
    array('adulte' => 50, 'mineur' => 16),
    array('adulte' => 52, 'mineur' => 18),
)
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formation PHP</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
            rel="stylesheet"
        >
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    </head>
    <body>
         <h1 class="text-center mb-4" >Liste des fruits </h1>

         <div class="container">
         <table class="table table-success table-striped">
            <tr>
                <td>fruits <i class="fa-brands fa-apple fa-xl"></i></td>
                <td>Quantité <i class="fa-solid fa-arrow-down-1-9 fa-xl"></i></td>
                <td>Commande <i class="fa-brands fa-product-hunt fa-xl"></i></td>
            </tr>
     
            <?php
               // insérer un boucle pour afficher la liste des fruits
               foreach($fruits as $key => $valeur){
            ?>
            <tr>
                <td><?= $valeur['fruit']?></td>
                <td><?= $valeur['quantite']?></td>
                <td><?= $valeur['commande']?></td>
            </tr>

            <?php    
    
            }
               // fin de la boucle
            ?>

         </table>
         <hr>

         <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Adulte <i class="fa-solid fa-user fa-sm"></i></th>
                    <th>Mineur <i class="fa-solid fa-user-graduate fa-sm"></i></th>
                </tr>
                <tbody>
                <?php foreach($ages as $key => $age) { ?>

                <tr>
                    <td><?= $age['adulte']?></td>
                    <td><?= $age['mineur']?></td>
                </tr>
                
                <?php }?>
                </tbody>
                
            </thead>

         </table>

         </div>
    </body>
</html>