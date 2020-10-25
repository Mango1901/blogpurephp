<style>
    .button-add{
        text-align: center;
        font-size: 30px;
        padding: 5px;
        margin: 5px;
        color:red;
    }
</style>
<form action="" method="post" name="form2" onsubmit="return validate_category()">
    <table width="100%" border="1">
        <tr>
            <td colspan="2"><div align="center">Add Category</div></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input style="padding:8px;" type="text" name="category_name"></td>
            <td style="font-weight: 400; color:blue;font-size: 20px" id="category_name_error"></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><textarea style="resize: none;padding:5px;" name="category_description"></textarea></td>
            <td style="font-weight: 400; color:blue;font-size: 20px;" id="category_description_error"></td>
        </tr>
        <tr>
            <td>Status</td>
            <td style="padding:15px;">
            <select style="padding:25px;font-size: 20px;" name="category_status">
                <option style="font-size: 20px;color: red;" value="0">Off</option>
                <option style="font-size: 20px;color: blue;" value="1">Onl</option>
            </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><div align="center">
             <input type="submit" name="add_category" id="add_category" class="button-add" value="Add"></div></td>
        </tr>
    </table>
</form>
<?php
$controller = new admin_controller;
$controller->add_category_controller();
?>

