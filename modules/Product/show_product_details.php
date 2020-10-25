<?php
$show_product_details = new frontend_controller;
$result_product_details = $show_product_details->show_product_details();
if($result_product_details){
    while($result = $result_product_details->fetch()){
?>
<table width="400" border="1">
    <tr>
        <td style="font-size: 30px;text-transform: uppercase; text-align: center;color: red;" colspan="2">Product Details</td>
    </tr>
    <tr>
        <td colspan="2"><img src="../../admin/adminModules/Product/uploads/<?php echo $result['product_image'] ?>" width="400" height="300" </td>
    </tr>
    <tr>
        <td>Name</td>
        <td><?php echo $result['product_name'] ?></td>
    </tr>
    <tr>
        <td>Price</td>
        <td><?php echo $result['product_price'] ?></td>
    </tr>
    <tr>
        <td>Description</td>
        <td><?php echo $result['product_description'] ?></td>
    </tr>
    <tr>
        <td>Content</td>
        <td><?php echo $result['product_content'] ?></td>
    </tr>
    <tr>
        <td>Category</td>
        <td><?php echo $result['category_name'] ?></td>
    </tr>
    <tr>
        <td>Brand</td>
        <td><?php echo $result['brand_name'] ?></td>
    </tr>
</table>
<?php
   }
}
?>