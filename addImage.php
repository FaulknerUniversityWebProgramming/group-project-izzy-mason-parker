<!--Original Author: Izabella Zientek -->
<?php
include 'php/mainHeader.php';
    $stmt = "select MAX(item_id) from item";
    $result = $conn->query($stmt);
    $msg = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $stmt = $conn->prepare("INSERT INTO image(item_id, img_path) VALUES (:itemid, :path)");
        $stmt->bindParam(":itemid", $result);
        $stmt->bindParam(":path", $path);

        $path =$_FILES['img_path']['name'];

        $stmt->execute();
       
        $msg = "Image Added Successfully";
    }
?>
<main>
     <h1 style="text-align:center;">Add an Image</h1>
    <br>
     <div class="form" style="text-align:center;">
       <form action="<?php  echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
          <input type="file" name="img_path">
          <input type="submit" value="Upload Image" name="submit">
       </form> 
    </div>
    <?php
        if(strlen($msg) > 0){
            echo "<p style='text-align:center;'><strong>".$msg."</strong></p>";
        }
    ?>
</main>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
include'php/footer.php';
?>