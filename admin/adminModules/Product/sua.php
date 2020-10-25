<style>
    .button-add{
        text-align: center;
        font-size: 30px;
        padding: 5px;
        margin: 5px;
        color:red;
    }
</style>
<?php
$product = new admin_controller;
$product->update_product_controller();
$result = $product->show_edit_product();
if($result){
    while($result_product = $result->fetch()){
?>
<form action="" method="POST" enctype="multipart/form-data" name="form7" onsubmit="return validate_product_edit()">
<table width="400" border="1">
     <tr>
	     <td colspan="2" align="center">Edit Product</td>
	 </tr>
	 <tr>
	     <td>Name</td>
		 <td><input type="text" name="product_name" value="<?php echo $result_product['product_name'] ?>" ></td>
         <td style="font-size: 20px;color:blue" id="product_name_error"></td>
	 </tr>
	 <tr>
	     <td>Price</td>
		 <td><input type="text" name="product_price" value="<?php echo $result_product['product_price'] ?>"></td>
         <td style="font-size: 20px;color:blue" id="product_price_error"></td>
	 </tr>
	 <tr>
	     <td>Image</td>
		 <td><input type="file" name="product_image"><img src="adminModules/Product/uploads/<?php echo $result_product['product_image'] ?>"width="60" height="60"/></td>
	 </tr>
	 <tr>
	     <td>Description</td>
		 <td><textarea name="product_description" style="resize: none" cols="20" rows="5"><?php echo $result_product['product_description'] ?></textarea></td>
         <td style="font-size: 20px;color:blue" id="product_description_error"></td>
	 </tr>
    <tr>
        <td>Content</td>
        <td><textarea name="product_content" style="resize: none" cols="20" rows="5"><?php echo $result_product['product_content'] ?></textarea></td>
        <td style="font-size: 20px;color:blue" id="product_content_error"></td>
    </tr>
    <?php

       }
    }
    ?>
	 <tr>
	     <td>Category</td>
		 <td><select name="category_id">
                 <?php
                 $result = $product->show_category();
                 if($result){
                 while($result_category = $result->fetch()){
                 ?>
                 <option value="<?php echo $result_category['category_id'] ?>">
                     <?php echo $result_category['category_name'] ?>
                 </option>
                     <?php
                 }
                 }
                 ?>
		 </select></td>
	 </tr>

    <tr>
        <td>Brand</td>
        <td><select name="brand_id">
                <?php
                $result = $product->show_brand();
                if($result){
                while($result_brand = $result->fetch()){
                ?>
                <option value="<?php echo $result_brand['brand_id'] ?>">
                    <?php echo $result_brand['brand_name'] ?>
                </option>
                <?php
                    }
                }
                ?>
            </select></td>
    </tr>
	 <tr>
	     <td colspan="2"<div align="center"><input type="submit" name="edit_product" class="button-add" value="Edit"></div></td>
	 </tr>
	 
</table>
</form>
<script>
    var product_name = document.forms['form7']['product_name'];
    var product_price = document.forms['form7']['product_price'];
    var product_description = document.forms['form7']['product_description'];
    var product_content = document.forms['form7']['product_content'];

    var product_name_error = document.getElementById('product_name_error');
    var product_price_error = document.getElementById('product_price_error');
    var product_description_error = document.getElementById('product_description_error');
    var product_content_error = document.getElementById('product_content_error');

    product_name.addEventListener('blur',product_name_verify,true);
    product_price.addEventListener('blur',product_price_verify,true);
    product_description.addEventListener('blur',product_description_verify,true);
    product_content.addEventListener('blur',product_content_verify,true);

    function validate_product_edit() {
        if(product_name.value == ""){
            product_name_error.textContent = "You need to fill in the blanket";
            product_name.focus();
            return false;
        }
        if(product_price.value == ""){
            product_price_error.textContent = "You need to fill in the blanket";
            product_price.focus();
            return false;
        }
        if(product_description.value == ""){
            product_description_error.textContent = "You need to fill in the blanket";
            product_description.focus();
            return false;
        }
        if(product_content.value == ""){
            product_content_error.textContent = "You need to fill in the blanket";
            product_content.focus();
            return false;
        }
    }
    function product_name_verify() {
        if(product_name.value != ""){
            product_name_error.innerHTML = "";
            return true;
        }
    }
    function product_price_verify() {
        if(product_price.value != ""){
            product_price_error.innerHTML = "";
            return true;
        }
    }
    function product_description_verify() {
        if(product_description.value != ""){
            product_description_error.innerHTML = "";
            return true;
        }
    }
    function product_content_verify() {
        if(product_content.value != ""){
            product_content_error.innerHTML = "";
            return true;
        }
    }
</script>

