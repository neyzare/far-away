<?php 

session_start();

if (!isset($_SESSION['user_id'])) {

    header('location: ../views/planning.php');
    exit();
}

?>
