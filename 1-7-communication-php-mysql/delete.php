<?php
include_once 'connection.php';
$id = $_GET['id'];

if(isset($id)){
    $conn->query("DELETE FROM contact WHERE id =".$id);
}

header('Location: 1-7-contacts.php');


?>