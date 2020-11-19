<?php 
    include 'php/modifiedHeader.php';
?>
        <main>
    <h1 style="text-align:center;">Login</h1>
    <br>
    <div class="form" style="text-align:center;">
        <form method='post' action ="<?php  echo $_SERVER['PHP_SELF']?>">
            <input type="text" placeholder="Username" name = "username" required />
            <br>
            <br>
            <input type="text" placeholder="Password" name = "password" required />
            <br>
            <br>         
            <input type="submit" name = "submit" value ="Submit"/>   
        </form>
        <br>
            <br>
        <br>
            <br>
        
        <br>
            <br>
        </div>
            <div class="but" style="text-align:center;">
              <p>Not already a user?</p>
              <button id="user">Create User</button>
            </div>
        </main>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src ="js/main.js"></script> 
    </body>
</html>