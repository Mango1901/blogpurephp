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
$show_controller = new admin_controller;
$show_controller->update_brand_controller();
$result = $show_controller->show_brand_edit();
if($result){
while ($result_info = $result->fetch()){
?>
<form action="" method="post" name="form5" onsubmit="return validate_brand_edit()">
    <table width="100%" border="1">
        <tr>
            <td colspan="2"><div align="center">Edit brand</div></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input style="padding:8px;" type="text" name="brand_name" value="<?php echo $result_info['brand_name'] ?>"></td>
            <td style="font-size: 20px;color:blue" id="brand_name_error"></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><textarea style="resize: none;padding:5px;" name="brand_description"><?php echo $result_info['brand_description'] ?></textarea></td>
            <td style="font-size: 20px;color:blue" id="brand_description_error"></td>
        </tr>
        <tr>
            <td colspan="2"><div align="center">
                    <input type="submit" name="edit_brand" id="edit_brand" class="button-add" value="Edit"></div></td>
        </tr>
    </table>
</form>
<?php
}
}
?>
<script>
    var brand_name = document.forms['form5']['brand_name'];
    var brand_description = document.forms['form5']['brand_description'];

    var brand_name_error = document.getElementById('brand_name_error');
    var brand_description_error = document.getElementById('brand_description_error');

    brand_name.addEventListener('blue',brand_name_verify,true);
    brand_description.addEventListener('blue',brand_description_verify,true);

    function validate_brand_edit() {
        if(brand_name.value==""){
            brand_name_error.textContent = "You need to fill in  the blanket";
            brand_name.focus();
            return false;
        }
        if(brand_description.value==""){
            brand_description_error.textContent = "You need to fill in in the blanket";
            brand_description.focus();
            return false;
        }
    }
    function brand_name_verify() {
        if(brand_name.value != ""){
            brand_name_error.innerHTML = "";
            return true;
        }
    }
    function brand_description_verify() {
        if(brand_description.value != ""){
            brand_description_error.innerHTML = "";
            return true;
        }
    }
</script>
