<?php
// vous allez inserer votre code ici
$SERVERNAME = "localhost";
$USER = "root";
$PASSWORD = "";
$db = "formation";

$conn = new mysqli($SERVERNAME, $USER, $PASSWORD,$db);

if($conn->connect_error) {
    die('Erreur : ' .$conn->connect_error);
}

?>