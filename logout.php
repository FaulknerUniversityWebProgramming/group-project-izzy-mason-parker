<?php
include 'php/mainHeader.php';
    
    unset($_SESSION['user']);
    unset($_SESSION['name']);
    setcookie('user');
    setcookie('name');
    header("location: home.php");

include 'footer.php';
?>