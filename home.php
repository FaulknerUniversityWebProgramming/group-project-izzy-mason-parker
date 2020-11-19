<!--Original Author: Izabella Zientek -->
<?php
    include 'php/mainHeader.php';
?>
<main class="row">
            <aside class="col-md-2" >
                <div class="panel" >
                    <div class="panel-heading" style="background-color:black;color:white;">Categories</div>
                    <ul class="nav" >
                        <li><a href="#" id ="home">Home and Lifestyle</a></li>
                        <li><a href="#">Clothes</a></li>
                        <li><a href="#">Electronics</a></li>
                        <li><a href="#">Tools</a></li>
                        <li><a href="#">Toys</a></li>
                        <li><a href="#">Miscellaneous</a></li>
                    </ul>
                </div>
            </aside>  
            <div id="filter" class="col-md-10">  
               <?php 
                    $sql = "select it.iname, it.description, it.category, it.price, im.img_path from item it left join image im on it.item_id = im.item_id";
                    $query = $conn->query($sql);
                    foreach($query as $item){
                            echo "<figure style='float:left;margin-right:5%'><a href='view.php'><img src='/".$item['img_path']."' style='width:200px; height:200px;'></a><figcaption>".$item['iname']." - ".$item['description']."<br>".$item['category']."</figcaption></figure>";
                    }

                ?>

            </div>    

</main>
<?php
    include 'php/footer.php';
?>
