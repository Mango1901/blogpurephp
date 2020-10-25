<div class="brand_header">
    Brand
</div>
<?php
$show_brand = new frontend_controller;
$result_show_brand = $show_brand->show_brand_frontend();
if($result_show_brand){
    while($result = $result_show_brand->fetch()){
        ?>
        <div class="show_brand">
            <ul>
                <li><a href="index.php?xem=product_brand&brand_id=<?php
                    echo $result['brand_id'];?>"><?php echo $result['brand_name'];?></a></li>
            </ul>
        </div>
        <?php
    }
}
?>