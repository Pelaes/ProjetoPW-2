<?php
    session_start();
    // unset($_SESSION['p_name']);
    // unset($_SESSION['result']);
    // unset($_SESSION['id_clicado']);
    session_unset();
    session_destroy();
    header ("Location: ../../");
?>