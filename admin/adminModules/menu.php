<div class="menu">
    <ul>
        <li><a href="homepage.php?quanli=Category&ac=them">Category</a></li>
        <li><a href="homepage.php?quanli=Brand&ac=them">Brand</a></li>
        <li><a href="homepage.php?quanli=Product&ac=them">Product</a></li>
        <?php
        $controller = new admin_controller;
        $result = $controller->show_admin_details();
        if($result){
        while($result_details = $result->fetch()){
        ?>
        <li><a href="homepage.php?quanli=resetPassword&id=<?php echo $result_details['admin_id'] ?>">Reset Password</a></li>
            <?php
        }
        }
        ?>
        <li><a href="homepage.php?ac=logout">Logout</a></li>
    </ul>
</div>
