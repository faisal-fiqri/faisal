<?php
    session_start();
    $_SESSION["email"] = "";
    $_SESSION["login"] = "";
    unset($_SESSION["email"]);
    session_unset();

    session_destroy();
    header("Location: index.php");
?>