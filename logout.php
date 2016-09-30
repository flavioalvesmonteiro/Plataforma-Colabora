<?php
    session_destroy();
    unset($_POST['login']);
    unset($_POST['senha']);
    header("Location: index.php");
?>