<!--Original Author: Mason Simonton -->
<?php
include 'php/mainHeader.php';
    
    unset($_SESSION['user']);
    unset($_SESSION['name']);
    setcookie('user');
    setcookie('id');
    setcookie('name');
    header("location: index.php");

include 'footer.php';
?>