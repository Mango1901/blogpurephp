<?php include('../inc/path_admin.inc.php'); ?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Admin Page</title>
    <link rel="stylesheet" href="style/css/style-admin.css" type="text/css">
</head>
<body>
<div class="margin">
    <?php include('adminModules/header.php') ?>
    <?php include('adminModules/menu.php'); ?>
    <?php include('adminModules/content.php'); ?>
    <?php include ('adminModules/footer.php');?>
</div>
</body>
<?php
$ct = new admin_controller;
$ct->admin_controller_logout();
?>
<script src="style/JS/validate_category.js"></script>
<script src="style/JS/validate_brand.js"></script>
</html>
