<?php 
    include 'php/mainHeader.php';
    if(!isset($_SESSION['user'])){
        header("location: login.php");
    }
?>
        <main>

            <?php
             
            ?>
            
        </main>
<?php 
    include 'php/footer.php';
?>