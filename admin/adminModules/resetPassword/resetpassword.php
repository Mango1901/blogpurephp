<?php
$reset_password = new admin_controller;
$reset_password->admin_resetpassword_controller();
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Admin Reset Password</title>
    <link rel="stylesheet" href="style/css/style-admin-login.css" type="text/css">
</head>
<body>
<div class="wrapper-login">
    <div class="header-login">
        Reset Password
    </div>
    <form action="" method="post">
        <div class="form-input">
            <label class="label-login">Username</label>
            <input type="text"  class="input-login" name="admin_username" placeholder="Enter your username:..."/>
        </div>
        <div class="form-input">
            <label class="label-login">Password</label>
            <input type="password" class="input-login" name="admin_password" placeholder="Enter your password:..."/>
        </div>
        <div class="form-input">
            <label class="label-login">New Password</label>
            <input type="password" class="input-login" name="admin_new_password" placeholder="Enter your new password:..."/>
        </div>
        <div class="submit-button-login">
            <input type="submit" class="button-login" name="submit_resetpassword" value="Reset">
        </div>
    </form>
</div>
</body>
</html>