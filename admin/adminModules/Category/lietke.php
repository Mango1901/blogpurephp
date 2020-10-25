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
    $show_controller->non_active_category_controller();
    $show_controller->active_category_controller();
    $show_controller->delete_category_controller();
    $result = $show_controller->show_category();
    if($result){
        while ($result_info = $result->fetch()){
    ?>
    <tr>
        <td><?php echo $result_info['category_id'] ?></td>
        <td><?php echo $result_info['category_name'] ?></td>
        <td><?php echo $result_info['category_description'] ?></td>
        <td><?php  if($result_info['category_status'] == 0){
                ?>
                <a href="homepage.php?quanli=Category&ac=them&status=Off&id=<?php echo $result_info['category_id'] ?>" name="Off">Off</a>
                <?php
            } else {
                ?>
                <a href="homepage.php?quanli=Category&ac=them&status=Onl&id=<?php echo $result_info['category_id'] ?>" name="Onl">Onl</a>
                <?php
                }
                ?>
        </td>
        <td><a href="homepage.php?quanli=Category&ac=sua&id=<?php echo $result_info['category_id'] ?>">Edit</a></td>
        <td><a href="homepage.php?quanli=Category&ac=them&action=delete&id=<?php echo $result_info['category_id'] ?>" onclick="return confirm('Are you want to delete?')">Delete</a></td>
    </tr>
    <?php
        }
    }
    ?>
</table>