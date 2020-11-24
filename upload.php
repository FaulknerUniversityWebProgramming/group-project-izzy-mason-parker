<!--Original Author: Mason Simonton -->
<?php
include 'php/mainHeader.php';

$target_dir = "group-project-izzy-mason-parker/sql/db_imgs/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submitImage"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".<br>";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.<br>";
  $uploadOk = 0;
}

// Check file size
/*if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.<br>";
  $uploadOk = 0;
}*/


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.<br>";
          //$stmt = $conn->prepare("INSERT INTO image(item_id, img_path) VALUES (:itemid, :path)");
            //$stmt->bindParam(":itemid", $result);
            //$stmt->bindParam(":path", $path);

            //$path =$_FILES['fileToUpload']['tmp_name'];

            //$stmt->execute();

            //$msg = "Image Added Successfully";
      } 
      else {
        echo "Sorry, there was an error uploading your file. ".$_FILES['fileToUpload']['error'];
      }
}
?>