<table width="550" border="1">
     <tr>
		  <td>Name</td>
		  <td>Image</td>
		  <td>Category</td>
          <td>Brand</td>
		  <td>Price</td>
		  <td>Description</td>
          <td>Content</td>
          <td>Status</td>
		  <td colspan="2"align="center">Action</td>
	 </tr>
	 <?php
        $controller = new admin_controller;
        $controller->non_active_product_controller();
        $controller->active_product_controller();
        $controller->delete_product_controller();
     $result = $controller->show_product();
     if($result){
     while ($result_info = $result->fetch()) {
     ?>
	  <tr>
          <td><?php echo $result_info['product_name']; ?></td>
          <td><img src="adminModules/Product/uploads/<?php echo $result_info['product_image'] ?>" width="120" height="150" </td>
          <td><?php echo $result_info['category_name'] ?></td>
          <td><?php echo $result_info['brand_name']; ?></td>
          <td><?php echo $result_info['product_price']; ?></td>
          <td><?php echo $result_info['product_description']; ?></td>
          <td><?php echo $result_info['product_content']; ?></td>
          <td><?php  if($result_info['product_status'] == 0){
                  ?>
                  <a href="homepage.php?quanli=Product&ac=them&status=Off&id=<?php echo $result_info['product_id'] ?>">Off</a>
                  <?php
              } else {
                  ?>
                  <a href="homepage.php?quanli=Product&ac=them&status=Onl&id=<?php echo $result_info['product_id'] ?>">Onl</a>
                  <?php
              }
              ?>
          </td>
          <td><a href="homepage.php?quanli=Product&ac=sua&id=<?php echo $result_info['product_id'] ?>">Edit</td>
          <td><a href="homepage.php?quanli=Product&ac=them&action=delete&id=<?php echo $result_info['product_id'] ?>" onclick="return confirm('Are you want to delete?')">Delete</td>
	 </tr>
    <?php
        }
     }
    ?>
</table>
