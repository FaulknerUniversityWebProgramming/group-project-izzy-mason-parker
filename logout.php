<?php
include 'php/mainHeader.php';
    
    unset($_SESSION['user']);
    header("location: home.php");

include 'footer.php';
?>