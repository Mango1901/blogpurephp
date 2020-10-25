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
$show_controller->update_category_controller();
$result = $show_controller->show_category_edit();
if($result){
while ($result_info = $result->fetch()){
?>
<form action="" method="post" name="form3" onsubmit="return validate_category_edit()">
    <table width="100%" border="1">
        <tr>
            <td colspan="2"><div align="center">Edit Category</div></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input style="padding:8px;" type="text" name="category_name" value="<?php echo $result_info['category_name'] ?>"></td>
            <td style="font-size: 20px; color:blue;" id="category_name_error"></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><textarea style="resize: none;padding:5px;" name="category_description"><?php echo $result_info['category_description'] ?></textarea></td>
            <td style="font-size: 20px; color:blue;" id="category_description_error"></td>
        </tr>
        <tr>
            <td colspan="2"><div align="center">
                    <input type="submit" name="edit_category" id="edit_category" class="button-add" value="Edit"></div></td>
        </tr>
    </table>
</form>
<?php
}
}
?>
<script>
    var category_name = document.forms['form3']['category_name'];
    var category_description = document.forms['form3']['category_description'];

    var category_name_error = document.getElementById('category_name_error');
    var category_description_error = document.getElementById('category_description_error');

    category_name.addEventListener('blue',category_name_verify,true);
    category_description.addEventListener('blue',category_description_verify,true);

    function validate_category_edit() {
        if(category_name.value==""){
            category_name_error.textContent = "You need to fill in  the blanket";
            category_name.focus();
            return false;
        }
        if(category_description.value==""){
            category_description_error.textContent = "You need to fill in in the blanket";
            category_description.focus();
            return false;
        }
    }
    function category_name_verify() {
        if(category_name.value != ""){
            category_name_error.innerHTML = "";
            return true;
        }
    }
    function category_description_verify() {
        if(category_description.value != ""){
            category_description_error.innerHTML = "";
            return true;
        }
    }
</script>
