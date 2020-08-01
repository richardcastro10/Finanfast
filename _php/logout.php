<?php
    $login = $_SESSION['login'];
    $senha = $_SESSION['senha'];

    session_destroy();

    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    header('location:login.php');
?>