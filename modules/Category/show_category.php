<div class="category_header">
    Category
</div>
<?php
$show_category = new frontend_controller;
$result_show_category = $show_category->show_category_frontend();
if($result_show_category){
    while($result = $result_show_category->fetch()){
        ?>
<div class="show_category">
    <ul>
        <li><a href="index.php?xem=product_category&category_id=<?php
            echo $result['category_id'];?>"><?php echo $result['category_name'];?></a></li>
    </ul>
</div>
<?php
   }
}
 ?>
<br/>
