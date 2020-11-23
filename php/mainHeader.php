<!--Original Author: Izabella Zientek -->
<?php
    include 'sql/our_db/db.php';
    include 'cors.php';
    session_start();
    $_SESSION['user'];
    $_SESSION['id'];
    $_SESSION["name"];
    
   
?>

<html lang="en">
    <head>
        <title>Imp Trading</title>
        <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap1.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css" />      
    </head>
    <body>
        
       <header>    
           <div class="topHeaderRow">
               <div class="nav">
                   <div class="dropdown">
                        <button class="dropbtn" style="font-family: 'Staatliches', cursive;"><span class="glyphicon glyphicon-user"></span> Profile
                          <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content" style="font-family: 'Staatliches', cursive;">
                          <a href="userPost.php">My Posts</a>
                          <a href="post.php">New Post</a>
                          <a href="login.php">Login</a>
                          <a href="logout.php">Logout</a>
                        </div>
                     </div>
               </div>
           </div>
           <div class="bottomHeader">
               <div><a href="home.php"><img src="images/imp.png" class="logo"></a></div>
               <div class="name"><h2 style="font-family: 'Staatliches', cursive;">Imp Trading<br><p>Devilishly Good Prices<br><?php if(isset($_SESSION['user'])){echo "Welcome ".$_SESSION['name']."!";}?></p></h2></div>
               <div class="submitForm">
                   <form class="navbar-form" >
                     <input type="text" name="search" placeholder="Search">
                     <button class="input-group" type="submit" id="submit" name="submit" ><span class="glyphicon glyphicon-search"></span></button>
                   </form> 
               </div>
           </div>
        </header>
        <br>