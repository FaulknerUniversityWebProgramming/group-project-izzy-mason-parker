<!--Original Authro: Izabella Zientek, Parker Albritton to do FixerAPI on price -->
<?php 
    include 'php/mainHeader.php';
    if(!isset($_SESSION['id'])){
        header("location: login.php");
    }
    $msg = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        
        $stmt = $conn->prepare("INSERT INTO item(user_id, iname, description, category, price) VALUES (:uid, :name, :desc, :cate, :price)");
    
        $stmt->bindParam(":uid", $user);
        $stmt->bindParam(":name", $itemN);
        $stmt->bindParam(":desc", $desc);
        $stmt->bindParam(":cate", $cat);
        $stmt->bindParam(":price", $price);
        
        $user = $_SESSION['id'];
        $itemN = $_POST["iname"];
        $desc = $_POST["description"];
        $cat = $_POST["category"];
        $price = $_POST["price"];
       

        $stmt->execute();
      
        
        $msg = "New Post Created Successfully";
    }
  
?>
<main>
    <h1 style="text-align:center;">Create New Post</h1>
    <p style="text-align:center;">Add an Image after you submit the post</p>
    <br>
    <div class="form" style="text-align:center;">
        <form method='post' action ="<?php  echo $_SERVER['PHP_SELF']?>">
            <input type="text" placeholder="Name" name = "iname" required />
            <br>
            <br>
            <input type="textarea" placeholder="Description" name = "description" required />
            <br>
            <br>
            <label>Select a Category:</label><br>
            <select name="category">
              <option value="home">Home and Lifestyle</option>
              <option value="clothes">Clothes</option>
              <option value="electronics">Electronics</option>
              <option value="tools">Tools</option>
              <option value="toys">Toys</option>
              <option value="misc">Miscellaneous</option>
            </select>
            <br>  
            <br>
            <input type="text" placeholder="Price" name = "price" required />
            <br>
            <br> 
            <input type="submit" name = "submit" value ="Submit"/>   
        </form> 
        </div>
    <br>
    <br>
    <br>
    <br>
    <div class="but" style="text-align:center;">
      <button id="addImage">Add an Image</button>
    </div>
    <script>
    var add = document.getElementById("addImage");
    add.addEventListener('click', function(){
        window.location.href = 'addImage.php';
    });
  </script> 
        <?php
        if(strlen($msg) > 0){
            echo "<p style='text-align:center;'><strong>".$msg."</strong></p>";
        }
    ?>
     <br>  
</main>
<?php 
    include 'php/footer.php';
?>