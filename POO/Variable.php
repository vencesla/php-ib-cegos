<?php 
include_once ('Contact.php');

$contact1 = new Contact("MABIKI", "Vencesla Admir", "venceslaadmir@gmail.com");
$contact2 = new Contact("Admin", "Testeur", "testeur@gmail.com");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
            rel="stylesheet"
        >
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <title>Contact</title>
</head>
<body>
    <div class="container mt-5">
    <div class="alert alert-info text-center">
    <div class="row">
        <h1 class="text-center">Mes contacts <i class="fa-solid fa-person-chalkboard"></i></h1>
        <div class="col">
        <span><?= $contact1->sePresenter();?></span><br>
        <span class="text-pulpe"><?= $contact2->sePresenter();?></span>
        </div>
    </div>
    </div>
    </div>
</body>
</html>