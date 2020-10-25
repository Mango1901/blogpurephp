<div class="product_header">
    Category Product
</div>
<div class="show_product">
    <?php
    $show_product = new frontend_controller();
    $result = $show_product->show_product_category();
    if($result){
        while($result_product = $result->fetch()){
            ?>
            <ul>
                <li><a href="index.php?xem=product_details&product_id=<?php echo $result_product['product_id'] ?>">
                        <img src="../../admin/adminModules/Product/uploads/<?php echo $result_product['product_image'] ?>" width="150" height="100"/>
                        <p class="content_product">Name:</p><p> <?php echo $result_product['product_name'] ?></p>
                        <p class="content_product">Price:</p><p><?php echo $result_product['product_price'] ?></p>
                    </a></li>
            </ul>
            <?php
        }
    }
    ?>
</div>