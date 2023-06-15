<?php
    session_start();
    if(isset($_POST["logoff"])) 
    {
    session_destroy();
    header('Location:home before log in.html');
    exit;
    }
?>