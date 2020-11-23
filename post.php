<?php 
    include 'php/mainHeader.php';
    if(!isset($_SESSION['id'])){
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