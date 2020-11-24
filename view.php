<!--Original Author: Parker Allbritton -->
<?php 
    include 'php/mainHeader.php';
?>
<main class="row">
    <div class="col-md-10">
        <?php
            $itemID = $_GET['passID'];
            $sql1 = "select it.iname, it.description, it.category, it.price, im.img_path from item it left join image im on it.item_id=im.item_id where it.item_id= $itemID";
            $query1 = $conn->query($sql1);
            foreach($query1 as $item){
                echo "<figure style='float:left;margin-right:5%'><img src='/".$item['img_path']."' style='width:400px; height:400px;margin-left:20px;'><div style='float:right;margin-left:20px;'><h1>".$item['iname']."</h1><p> ".$item['description']."</p><br><p>$".$item['price']."</p></div></figure>";
                
            }
        ?>
    </div>

<br>
<br>
</main>
<br>
<br>
<?php 
    include 'php/footer.php';
?>