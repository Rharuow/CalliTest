<?php 
    session_start();

    unset($_SESSION['pesquisadorID']);

    session_destroy();
    header("Location: ../");
?>