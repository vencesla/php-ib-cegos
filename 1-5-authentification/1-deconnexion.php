<?php
    session_start();
    session_destroy();
    unset($LOGIN, $PASSWORD);
    header('Location: ./1-connexion.php');

?>