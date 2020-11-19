<!--Original Author: Izabella Zientek -->
<?php
include 'php/mainHeader.php';
?>

<h1 style="text-align:center;">Thanks for your feedback <?php echo $_POST["name"]; ?>!</h1><br>
<h5 style="text-align:center;">Your email address is: <?php echo $_POST["email"]; ?></h5><br><br>
<p style="text-align:center;">Your message is:<br>"<?php echo $_POST["message"]; ?>"</p>
</body>
</html>
