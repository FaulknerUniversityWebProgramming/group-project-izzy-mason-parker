<!--Original Author: Izabella Zientek -->
<?php
    include 'php/mainHeader.php';
    $msg = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $stmt = $conn->prepare("INSERT INTO user(fname, lname, username, email, address, phone, password) VALUES (:f, :l, :user, :em,:add, :phone, :pass)");
        $stmt->bindParam(":f", $fName);
        $stmt->bindParam(":l", $lName);
        $stmt->bindParam(":user", $user);
        $stmt->bindParam(":em", $email);
        $stmt->bindParam(":add", $add);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":pass", $pass);
        
        $fName = $_POST["fname"];
        $lName = $_POST["lname"];
        $user = $_POST["username"];
        $email = $_POST["email"];
        $add = $_POST["address"];
        $phone = $_POST["phone"];
        $pass = $_POST["password"];
        
        $stmt->execute();
        
        $msg = "New User Created";
    }
    
   
?>
 <main class="row">
            
    <h1 style="text-align:center;">Create New User</h1>
    <br>
    <div class="form" style="text-align:center;">
        <form method='post' action ="<?php  echo $_SERVER['PHP_SELF']?>">
            <input type="text" placeholder="FirstName" name = "fname" required />
            <br>
            <br>
            <input type="text" placeholder="Lastname" name = "lname" required />
            <br>
            <br>
            <input type="text" placeholder="Username" name = "username" required />
            <br>
            <br>
            <input type="text" placeholder="Email" name = "email" required />
            <br>
            <br>
            <input type="text" placeholder="Address" name = "address" required />
            <br>
            <br>
            <input type="text" placeholder="Phone" name = "phone"/>
            <br>
            <br>
            <input type="text" placeholder="Password" name = "password" required />
            <br>
            <br>         
            <input type="submit" name = "submit" value ="Submit"/>   
        </form>
        </div>
    <br>

    <br>
        <?php
        if(strlen($msg) > 0){
            echo "<p style='text-align:center;'><strong>".$msg."</strong></p>";
        }
    ?>
     <br>
    <div class="but" style="text-align:center;">
      <button id="back">Back to Login</button>
     </div>
     
</main>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script>
    var back = document.getElementById("back");
    back.addEventListener('click', function(){
        window.location.href = 'login.php';
    });

</script>    
    </body>
</html>