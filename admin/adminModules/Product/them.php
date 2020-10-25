<?php
$controller = new admin_controller;
$controller->add_product_controller();
?>
<style>
    .button-add{
        text-align: center;
        font-size: 30px;
        padding: 5px;
        margin: 5px;
        color:red;
    }
</style>
<form action="" method="POST" enctype="multipart/form-data" name="form6" onsubmit="return validate_product()">
<table width="400" border="1">
     <tr>
	     <td colspan="2" align="center">Add Product</td>
	 </tr>
	 <tr>
	     <td>Name</td>
		 <td><input type="text" name="product_name"></td>
         <td style="font-size: 20px;color:blue" id="product_name_error"></td>
	 </tr>
	 <tr>
	     <td>Price</td>
		 <td><input type="text" name="product_price"></td>
         <td style="font-size: 20px;color:blue" id="product_price_error"></td>
	 </tr>
	 <tr>
	     <td>Image</td>
		 <td><input type="file" name="product_image"></td>
	 </tr>
	 <tr>
	     <td>Description</td>
		 <td><textarea name="product_description" style="resize: none;" cols="20" rows="5" ></textarea></td>
         <td style="font-size: 20px;color:blue" id="product_description_error"></td>
	 </tr>
    <tr>
        <td>Content</td>
        <td><textarea name="product_content" style="resize: none;" cols="20" rows="5"></textarea></td>
        <td style="font-size: 20px;color:blue" id="product_content_error"></td>
    </tr>
	 <tr>
	     <td>Category</td>
		 <td><select name="category_id" style="font-size: 15px; font-weight: 400">
                 <?php
                 $result_category = $controller->show_category();
                 if($result_category){
                     while ($result = $result_category->fetch()){
                         ?>
                 <option value="<?php echo $result['category_id'] ?>">
                     <?php
            echo $result['category_name'];
                 }
        }
        ?>
                 </option>
		 </select></td>
	 </tr>
    <tr>
        <td>Brand</td>
        <td><select name="brand_id" style="font-size: 20px; font-weight: 400">
                <?php
                $result_brand = $controller->show_brand();
                if($result_brand){
                while ($result = $result_brand->fetch()){
                ?>
                <option value="<?php echo $result['brand_id'] ?>">
                    <?php
                    echo $result['brand_name'];
                         }
                    }
                    ?>
                </option>
            </select></td>
    </tr>
    <tr>
        <td>Status</td>
        <td style="padding:15px;">
            <select style="padding:25px;font-size: 20px;" name="product_status">
                <option style="font-size: 20px;color: red;" value="0">Off</option>
                <option style="font-size: 20px;color: blue;" value="1">Onl</option>
            </select>
        </td>
    </tr>
    <tr>
        <td colspan="2"><div align="center">
                <input type="submit" name="add_product" id="add_product" class="button-add" value="Add"></div></td>
    </tr>
	 
</table>
</form>
<script>
    var product_name = document.forms['form6']['product_name'];
    var product_price = document.forms['form6']['product_price'];
    var product_description = document.forms['form6']['product_description'];
    var product_content = document.forms['form6']['product_content'];

    var product_name_error = document.getElementById('product_name_error');
    var product_price_error = document.getElementById('product_price_error');
    var product_description_error = document.getElementById('product_description_error');
    var product_content_error = document.getElementById('product_content_error');

    product_name.addEventListener('blur',product_name_verify,true);
    product_price.addEventListener('blur',product_price_verify,true);
    product_description.addEventListener('blur',product_description_verify,true);
    product_content.addEventListener('blur',product_content_verify,true);

function validate_product() {
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





