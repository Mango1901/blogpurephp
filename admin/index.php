<?php include('../inc/path_admin.inc.php'); ?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Admin Login Page</title>
    <link rel="stylesheet" href="style/css/style-admin-login.css" type="text/css">
</head>
<?php
$admin_login_controller = new admin_controller;
$admin_login_controller->admin_controller_login();
?>
<body>
<div class="wrapper-login">
    <div class="header-login">
        LOGIN
    </div>
    <form action="" method="post" name="form1" onsubmit="return validateForm_login()">
        <div class="form-input">
            <label class="label-login">Username</label>
            <input type="text"  class="input-login" name="admin_username" placeholder="Enter your username:..."/>
            <div id="username_error" class="val_error"></div>
        </div>
        <div class="form-input">
            <label class="label-login">Password</label>
            <input type="password" class="input-login" name="admin_password" placeholder="Enter your password:..."/>
            <div id="password_error" class="val_error"></div>
        </div>
        <div class="submit-button-login">
            <input type="submit" class="button-login" name="submit_login" value="Login">
        </div>
    </form>
</div>
</body>
<script src="style/JS/validate_login.js"></script>
</html>