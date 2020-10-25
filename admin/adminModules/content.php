<div class="content">
    <?php
    if(isset($_GET['quanli'])){
        $tam= $_GET['quanli'];
    } else {
        $tam = '';
    } if($tam == 'Category'){
        include('Category/main.php');
    } else if($tam=='Product'){
        include('Product/main.php');
    } else if($tam=='Brand') {
        include('Brand/main.php');
    } else if($tam == 'resetPassword'){
        include ('resetPassword/resetpassword.php');
    }
    ?>
</div>