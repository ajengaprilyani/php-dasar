<?php

    session_start();
    session_unset();
    session_destroy();

    header("Location: Login.php");
    setcookie('remember', '');
    exit;
?>