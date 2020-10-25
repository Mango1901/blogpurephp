<style>
    .button-add{
        text-align: center;
        font-size: 30px;
        padding: 5px;
        margin: 5px;
        color:red;
    }
</style>
<form action="" method="post" name="form4" onsubmit="return validate_brand()">
    <table width="100%" border="1">
        <tr>
            <td colspan="2"><div align="center">Add Brand</div></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input style="padding:8px;" type="text" name="brand_name"></td>
            <td style="font-weight: 400; color:blue;font-size: 20px" id="brand_name_error"></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><textarea style="resize: none;padding:5px;" name="brand_description"></textarea></td>
            <td style="font-weight: 400; color:blue;font-size: 20px" id="brand_description_error"></td>
        </tr>
        <tr>
            <td>Status</td>
            <td style="padding:15px;">
            <select style="padding:25px;font-size: 20px;" name="brand_status">
                <option style="font-size: 20px;color: red;" value="0">Off</option>
                <option style="font-size: 20px;color: blue;" value="1">Onl</option>
            </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><div align="center">
             <input type="submit" name="add_brand" id="add_brand" class="button-add" value="Add"></div></td>
        </tr>
    </table>
</form>
<?php
$controller = new admin_controller;
$controller->add_brand_controller();
?>