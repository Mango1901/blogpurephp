<table width="450" border="1">
    <tr>
         <td>ID</td>
         <td>Name</td>
         <td>Description</td>
        <td>Status</td>
        <td colspan="2">Action</td>
    </tr>
    <?php
    $show_controller = new admin_controller;
    $show_controller->non_active_brand_controller();
    $show_controller->active_brand_controller();
    $show_controller->delete_brand_controller();
    $result = $show_controller->show_brand();
    if($result){
        while ($result_info = $result->fetch()){
    ?>
    <tr>
        <td><?php echo $result_info['brand_id'] ?></td>
        <td><?php echo $result_info['brand_name'] ?></td>
        <td><?php echo $result_info['brand_description'] ?></td>
        <td><?php  if($result_info['brand_status'] == 0){
                ?>
                <a href="homepage.php?quanli=Brand&ac=them&status=Off&id=<?php echo $result_info['brand_id'] ?>">Off</a>
                <?php
            } else {
                ?>
                <a href="homepage.php?quanli=Brand&ac=them&status=Onl&id=<?php echo $result_info['brand_id'] ?>">Onl</a>
                <?php
                }
                ?>
        </td>
        <td><a href="homepage.php?quanli=Brand&ac=sua&id=<?php echo $result_info['brand_id'] ?>">Edit</a></td>
        <td><a href="homepage.php?quanli=Brand&ac=them&action=delete&id=<?php echo $result_info['brand_id'] ?>" onclick="return confirm('Are you want to delete?')">Delete</a></td>
    </tr>
    <?php
        }
    }
    ?>
</table>